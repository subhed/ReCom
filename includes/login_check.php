<?php

require("connect.php");

$email = $_POST['email'];
$pass = $_POST['password'];


$sql = "select * from users where u_email= '".$email."' and password ='".$pass."'";
$query = mysqli_query($conn, $sql);

$count = mysqli_num_rows($query);

if($count >= 1){
    header("Location:../home.php");
}
else{
    header("Location:../login.php");
}


?>