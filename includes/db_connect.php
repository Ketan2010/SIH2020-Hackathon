<?php
$username = 'epiz_25065365';
$password = 'sih2020jay';
$servername = 'sql108.epizy.com';
$database = 'epiz_25065365_healthinsurance';

$conn = mysqli_connect($servername, $username,$password,$database);
$success = "connected";

// CHECK CONNECTION 
if(mysqli_connect_errno())
{
    echo "Failed to connect to database ".mysqli_connect_error();
    die();
}
