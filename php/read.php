<?php
include "db_Conn.php";

$sql = "SELECT * FROM user ORDER BY id DESC";
$RESULT = mysqli_query($conn, $sql);
