<?php
$host = "localhost";
$user = "root";
$pass = "";

$conn = mysqli_connect($host,$user,$pass);

mysqli_select_db($conn, "tuesday") or die(mysqli_error($conn));
?>