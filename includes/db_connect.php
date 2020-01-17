<?php
$username = 'libTmdn3vO';
$password = 'oo3ylRWvP0';
$servername = 'remotemysql.com';
$database = 'libTmdn3vO';

$conn = mysqli_connect($servername, $username,$password,$database);
$success = "connected";

// CHECK CONNECTION 
if(mysqli_connect_errno())
{
    echo "Failed to connect to database ".mysqli_connect_error();
    die();
}
