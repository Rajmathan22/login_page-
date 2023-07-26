<?php
include ("connection.php");

$uname = $_POST['Uname'];
$uemail = $_POST['mail'];
$pass = $_POST['password'];

$sql = "INSERT INTO `baselog`(`name`, `email`, `password`) VALUES ('$uname', '$uemail', '$pass')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
}
else{
    echo "Error: ". $sql. "<br>". $conn->error;
}

?>