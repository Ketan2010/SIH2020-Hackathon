<?php
$username = 'satgahve_jayesh';
$password = 'sihvit123';
$servername = '162.215.241.244';
$database = 'satgahve_healthinsurance';

$conn = mysqli_connect($servername, $username,$password,$database);
$success = "connected";

// CHECK CONNECTION 
if(mysqli_connect_errno())
{
    echo "Failed to connect to database ".mysqli_connect_error();
    die();
}
