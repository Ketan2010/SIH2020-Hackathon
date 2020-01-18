  <?php 
session_start();

$sn="localhost";
$un="root";
$pswd= "";
$dbn= "healthinsurence";

$conn=new mysqli($sn, $un, $pswd, $dbn);

if($conn->connect_error)
{
	die("connection failed:". $conn->connect_error);
	
}
else{
	echo "Connection successful";
}
if (isset($_POST['username']) and isset($_POST['password'])){

$u = $_POST['username'];
$p = $_POST['password'];

$query = "SELECT * FROM `customer` WHERE username='$u' and password='$p'";

$result = mysqli_query($conn,$query) or die(mysqli_error($conn));
$count = mysqli_num_rows($result);

if($count==1)
{
	echo("login successful");
}
else
{
$inv = "Invalid Login Credentials.";
echo " ".$inv;
}

}
 

?>