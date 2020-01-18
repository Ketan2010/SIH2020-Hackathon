
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="./start(1).css">
    <title>Login</title>
  </head>
  <body>
		<div class="header" style="background-color:rgb(0,0,160); height:73px; border-bottom:2px solid white">
		<?php include './includes/sidebar.php'; ?>
		<div class="bajaj">
			<p style="margin-left:7rem; font-size:33px; color:white; font-family:Cooper black; text-shadow:0 0 5px black,0 0 3px yellow; position:absolute">Bajaj finc serv</p>
		</div>
	</div>







			<div class="card-text" >

			<form id="loginform" class="form-horizontal" role="form" method="POST" action="./includes/sign_in.php">

`							<img src="./images/loginimg.png" style="position: absolute;
   left: 50%;
   top: 20%;
   -webkit-transform: translateY(-50%) translateX(-50%);" height="100" width="100">
<section id="cover" class="min-vh-100" style="width: 22rem; ">
    <div id="cover-caption">


<div class="content">
    <div class="container"  >

        <div id="loginbox" style="margin-top:100px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
            <div class="panel panel-info" >
                    <div class="panel-heading" style="margin-top: 6rem;">
    	    <h1 class="h3 mb-3 font-weight-normal" style="margin-left:120px;">Sign in</h1>


            <div class="social-login">
               <button class="btn btn-primary btn-sm" style="font-size:50; width:12rem; margin-left:4.4rem" >
  			Login with Facebook&nbsp&nbsp&nbsp <img src="./images/fb.png" height="20px" width="20px" style="border:1px solid white"/>
	       </button><br><br>
	    <button class="btn btn-primary btn-sm" style="font-size:50;width:12rem; margin-left:4.4rem " >
                        Login with Google&nbsp&nbsp&nbsp <img src="./images/google.png" height="20px" width="20px" style="border-radius:50%"/>
	    </button></div>
<div class="panel-body" >

                        <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>



                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                        <input id="login-username" type="text" class="form-control" maxlength="20" style="font-size:50; margin-top: 2rem;" name="username" value="" placeholder="username ">
                                    </div>

                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"/includes/db_connect.php><i class="glyphicon glyphicon-lock"></i></span>
                                        <input id="login-password" type="password" class="form-control" maxlength="20" style="font-size:50"  name="password" placeholder="password">
                                    </div>


										<input type="submit" name="signin" class="btn btn-primary btn-sm" value="signin"><br/><br/>

										<a href=" " style=""> Forgot password?</a>




                        </div>

                    </div>
        </div>
<div class="form-group">
                                    <div class="col-md-12 control">
                                        <div style=" padding-top:15px; font-size:75%;margin:2px;text-align:center;" >
                                           <p> Don't have an account! <a href="#" >Sign Up Here</a></p>


                                        </div>
                                    </div>
                                </div>





                         </div>
                    </div>




         </div>
    </div>
</div>



 </form>



  </div>
	</div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
 
  </body>
</html>
