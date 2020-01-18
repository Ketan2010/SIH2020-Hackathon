<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: "Lato", sans-serif;
}

.sidebar {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: white;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
  white-space:nowrap;

}

.sidebar a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.sidebar a:hover {
  color: #f1f1f1;
}

.sidebar .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

.openbtn {
  font-size: 20px;
  cursor: pointer;
  background-color: #111;
  color: white;
  padding: 10px 15px;
  border: none;
}

.openbtn:hover {
  background-color: #444;
}

#main {
  transition: margin-left .5s;
  padding-left: 0.3rem;
  padding-top: 0.5rem;
  display-inline:block;
}
.logo {
	display-inline:block;
	white-space:nowrap;


}
@media screen and (max-height: 450px) {
  .sidebar {padding-top: 10px;}
  .sidebar a {font-size: 15px;}
}
button {
	float:left;
}
.icon{
	widthh:40px;
	height:40px;
	margin-left:0;
}
</style>
</head>
<body >
<?php
	session_start();
	$name="SignIn";
	if($_SESSION['Goodname'])
	{
	$name = $_SESSSION['Goodname'];
	}

?>
<div id="mySidebar" class="sidebar" >
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()" style=" color:white; font-size:50px; margin-top:-1.1rem; margin-right:-1.1rem">×</a>
  <div style="background:linear-gradient(to right,blue,purple); margin-top:-3.65rem; height:16rem"><img src="./images/account.png" height="136px" style="border-radius:50%; margin:50px; margin-top:28px; margin-left:53px"></img>
  <div style=" background-color:white; border-radius:14px; width:12rem; height:2rem; margin-top:-2rem; margin-left:1.5rem; text-align:center"><?php echo $_SESSSION['Goodname'];?></div>
  </div><br><br>
  <a class="at" href="index.php" style="border:2px solid black;background-color:white;border-bottom:none; border-left:none; border-right:none; color:black; "><b><img src="./images/home.png" class="icon"/>&nbsp&nbsp&nbsp&nbspHome</b></a>
  <a href="Questionnaire.php" style="border:2px solid black;border-bottom:none;background-color:white; border-left:none; border-right:none; color:black; "><b><img src="./images/quiz.png" class="icon"/>&nbsp&nbsp&nbsp&nbspQuiz</b></a>
  <a href="login.php" style="border:2px solid black;background-color:white;border-bottom:none; border-left:none; border-right:none; color:black; "><b><img src="./images/login.png" class="icon"/>&nbsp&nbsp&nbsp&nbspLog in</b></a>
  <a href="#" style="border:2px solid black;background-color:white;border-bottom:none;  border-left:none; border-right:none; color:black; "><b><img src="./images/settings.png" class="icon"/>&nbsp&nbsp&nbsp&nbspSettings</b></a>
  <a href="policydetails.php" style="border:2px solid black;background-color:white; border-left:none; border-right:none; color:black; "><b><img src="./images/logout1.png" class="icon"/>&nbsp&nbsp&nbsp&nbspPolicy Details</b></a>
</div>

<div id="main">
  <a onclick="openNav()" style=" border:none; position:absolute; padding:1rem; font-size:2rem;">☰</a>

</div>

<script>
function openNav() {
  document.getElementById("mySidebar").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
}

function closeNav() {
  document.getElementById("mySidebar").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
}
</script>

</body>
</html>
