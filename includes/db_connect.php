<?php
$username = 'banduk';
$password = 'suicide';
$servername = 'localhost';
$database = 'healthinsurance';

$conn = mysqli_connect($servername, $username,$password,$database);
$success = "connected";

// CHECK CONNECTION 
if(mysqli_connect_errno())
{
    echo "Failed to connect to database ".mysqli_connect_error();
    die();
}
