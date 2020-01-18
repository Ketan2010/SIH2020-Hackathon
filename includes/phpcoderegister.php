<?php
	session_start();

if(!isset($_POST['register']))
{
    // GO BACK SIMON
    header("location: ../index.php?m=register");
    exit();
    //echo "something wrong";
}

else
{
    require 'db_connect.php';


if (isset($_POST['fn']) and isset($_POST['password'])){

$fn = $_POST['fn'];
$p = $_POST['password'];
$ln = $_POST['ln'];
$g = $_POST['gender'];
$dob = $_POST['dob'];
$user = $_POST['username'];
$e=$_POST['emailid'];

$query = "insert into Customer(fn,ln,gender,dob,emailid,username,password) values('$fn','$ln','$g','$dob','$e','$user','$p')";

$result = mysqli_query($conn,$query) or die(mysqli_error($conn));


}else{}
 echo($fn.$p);
?>