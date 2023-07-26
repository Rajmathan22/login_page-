<?php
include 'connection.php';
$mail = $_POST['Umail'];
$pwd = $_POST['password'];

$sql = "SELECT * FROM baselog WHERE email = '$mail' AND password = '$pwd'";

$result = mysqli_query($conn, $sql);
$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
$count=mysqli_num_rows($result);
if($count==1)
{
echo "login successful";
}
else{
    echo "login failed";
}

?>