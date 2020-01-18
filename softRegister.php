<html>
<head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  
	<script>
	$(document).ready(function(){
		$("#registerForm").hide();
		$("#registerForm").fadeIn(1000);	
	});
	
	function validateForm() 
	{
		var x = document.forms["registerForm"]["phoneNumber"].value;
		var y = document.forms["registerForm"]["email"].value;
		if (x == "" && y=="") 
		{
			alert("Please enter either phone number or e-mail address to proceed.");
			return false;
		}
		}
	</script>
	
	<style>
	fieldset
	{
		padding: 1rem;
		margin-top: 3%;
		margin-bottom: 1%;

	}
	#question
	{
		font-size:22px;
	}
	.quiz{
		width:23rem;
		margin-left:18px;
		color:black;
		border:3px solid black;
		box-shadow: 0 0 4px white,0 0 5px white,0 0 9px white,0 0 8px white;
		background-color:white;
	}
	ul{
		margin-left:3rem;
	}
	li{


	}
	body{
		background:linear-gradient(225deg,rgb(51, 51, 255),rgb(204, 204, 255),rgb(230, 230, 255),rgb(255,255,255)) ;
		
	}
	.image{
		width:330px ; 
		height:200px; 
		border:1px solid black;
		box-shadow: 3px 2px 3px rgb(154,154,154),4px 3px 5px rgb(188,188,188),5px 4px 8px rgb(218,218,218);
	}
	
	th{
		text-align:right;
	}
	</style>
	
</head>
<body>
	<div class="header" style="background-color:rgb(0,0,160); height:73px; border-bottom:2px solid white">
		<?php include './includes/sidebar.php'; ?>
		<div class="bajaj">
			<p style="margin-left:7rem; font-size:33px; color:white; font-family:Cooper black; text-shadow:0 0 5px black,0 0 3px yellow; position:absolute">Bajaj finc serv</p>
		</div>
	</div>
<form id="registerForm" onsubmit="return validateForm()">
	<fieldset class="quiz">
		<table cellpadding="5rem" >
			<tr colspan="2">
				<span id="question" style="color:black">
				Please register to view your score
				</span>
				
				<hr/>
			</tr>
			
			<tr>
				<th>Username:</th>
				<td> <input type="text" name="userName" id="userName" required /> </td>
			</tr>
				
			
			<tr>
				<th>Phone Number:</th>
				<td> <input type="text" name="phoneNumber"  id="phoneNumber" pattern="[789][0-9]{9}" placeholder="XXX XXX XXXX" title="Ten digit numbers starting with 7 or 8 or 9." /> </td>
			</tr>
			
			<tr>
				<th></th>
				<td colspan="2">
				<center>OR</center>
				</td>
			</tr>
			
			<tr>
				<th>Email: </th>
				<td> <input type="email" name="email" id="email" placeholder="example@mail.com" /> </td>
			</tr>
		</table>
	
	</fieldset>
	
	<br/>
	<center>
		<input type="submit" id="SubmitButton" value="Submit" class="btn btn-success" href="#"></input>
	</center>
		
</form>

<body>

</html>