<?php

if (isset($_GET['id'])) {
    include "db_Conn.php";

    function validate($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $id = validate($_GET['id']);

    $sql = "SELECT * FROM user WHERE id=$id";
    $RESULT = mysqli_query($conn, $sql);
    if (mysqli_num_rows($RESULT) > 0) {
        $rows = mysqli_fetch_assoc($RESULT);
    } else {
        header("Location: read.php");
    }
} else if (isset($_POST['update'])) {
    include "../db_Conn.php";
    function validate($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $name = validate($_POST['name']);
    $email = validate($_POST['email']);
    $id = validate($_POST['id']);

    /*  $user_data = 'name' . $name . 'email' . $email;
    echo "$user_data";
 */
    if (empty($name)) {
        header("Location: ../update.php?id=$id&error=Name is Required.");
    } else if (empty($email)) {
        header("Location: ../update.php?id=$id&error=Email is Required.");
    } else {
        $sql = "UPDATE user SET name ='$name', email= '$email' WHERE id=$id ";
        $RESULT = mysqli_query($conn, $sql);
        if ($RESULT) {
            header("Location: ../read.php?success=SuccessFully Updated...");
        } else {
            header("Location: ../update.php?id=$id&error=Unknown Error Occured&user_data");
        }
    }
} else {
    header("Location: read.php");
}
