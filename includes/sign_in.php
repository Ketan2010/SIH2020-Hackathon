 <?php 
///////////////////////////Complete working FIle Jayesh waghmare 16 jan 2020 4:00 18 AM
session_start();

if(!isset($_POST['signin']))
{
    // GO BACK SIMON
    header("location: ../index.php?m=signin");
    exit();
    //echo "something wrong";
}

else
{
    require 'db_connect.php';
    $username = $_POST['username'];
    $password = $_POST['password'];

    //// VALIDATE THE USERNAME AND PASSWORD <start>
    $sql = "SELECT * FROM customer WHERE UserName = ?";
    $stmt = mysqli_stmt_init($conn);

    // checks if query is Ok or NOT 
    if(!mysqli_stmt_prepare($stmt,$sql))
    {
        // GO BACK SIMON
        header("location: ../index.php?m=wrong");
        exit();
    }
    else 
    {
        mysqli_stmt_bind_param($stmt,'s',$username);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        $count = mysqli_num_rows($result);
        if($count==1)
        {    
            $row = mysqli_fetch_assoc($result);
            if($username== $row['UserName'] && $password== $row['Password'])
            {

                //// start the session and then go to the internship.php page lol 
                
                $_SESSION['username']=$username_html;
                $_SESSION['Goodname'] = $row['UserName'];
                header("location: ../index.php?m=signinsuccessful");
                exit();
            } 
    //// VALIDATE THE USERNAME AND PASSWORD <end>       
            else 
            {
                // GO BACK SIMON
                header("location: ../login.php?incorrectlogindetails");
                exit();
            }
        } 
        else 
        {
            // GO BACK SIMON
            header("location: ../login.php?incorrectlogindetails");
            exit();
        }   
    }

}





?>