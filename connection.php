<?php
$host = "localhost";
$username = "root";
$password = "";
$dbname = "database";

$conn = mysqli_connect($host, $username, $password, $dbname);
if(mysqli_connect_errno())
{
die("failedto connect db".mysqli_connect_error());
}


?>