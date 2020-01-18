<?php
	session_start();

if(!isset($_POST['register']))  /////////////REGISTRATION HAS BEEN COMPLETED PARTIALLY PL. DO NOT MAKE CHANGES ; JAYESH AT 16 JAN 2020 5:26 AM;  
{
    // GO BACK SIMON
    header("location: ../index.php?m=register");
    exit();
    //echo "something wrong";
}

else
{
    require 'db_connect.php';
	$fn = $_POST['fn'];
	$p = $_POST['p'];
	$ln = $_POST['ln'];
	$g = $_POST['g'];
	$dob = $_POST['dob'];
	$user = $_POST['user'];
	$e=$_POST['e'];
	///////TO ADD A FUNCTION TO CHECK WHETHER USERNAME AND EMAIL IS CORRECT OR NOT 
	
	
	$sql= "INSERT INTO `customer`(`FN`, `LN`, `Gender`, `DOB`, `EmailID`, `UserName`, `Password`) VALUES ('$fn','$ln','$g','$dob','$e','$user','$p')";
	$stmt = mysqli_stmt_init($conn);
            if(!mysqli_stmt_prepare($stmt,$sql))
            {
                //GO BACK SIMON
                header("location: ../register.php?message=error");
                exit();
            }
            else
            {
                mysqli_stmt_execute($stmt);
                header("location: ../register.php?message=success");
                exit();
                mysql_close($conn);
                
            }


}
 
?>


