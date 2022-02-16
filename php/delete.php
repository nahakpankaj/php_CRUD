<?php

if (isset($_GET['id'])) {

    include "../db_Conn.php";
    function validate($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $id = validate($_GET['id']);

    $sql = "DELETE FROM user WHERE id=$id ";
    $RESULT = mysqli_query($conn, $sql);
    if ($RESULT) {
        header("Location: ../read.php?success=Deleted SuccessFully...");
    } else {
        header("Location: ../read.php?error=Unknown Error Occured&user_data");
    }
} else {
    header("Location: ../read.php");
}
