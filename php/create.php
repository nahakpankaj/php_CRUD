<?php
if (isset($_POST['create'])) {
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

    $user_data = 'name' . $name . 'email' . $email;
    //echo "$user_data";

    if (empty($name)) {
        header("Location: ../index.php?error=Name is Required&user_data");
    } else if (empty($email)) {
        header("Location: ../index.php?error=Email is Required&user_data");
    } else {
        $sql = "INSERT INTO USER(name, email) VALUES('$name', '$email')";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            header("Location: ../read.php?success=SuccessFully Created..");
        } else {
            header("Location: ../index.php?error=Unknown Error Occured&user_data");
        }
    }
}
