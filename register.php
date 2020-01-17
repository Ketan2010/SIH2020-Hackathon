

<!DOCTYPE HTML>
<html>
<head>
<META http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body>
  
	<?php include './includes/sidebar.php'; ?>
	<div style="background:linear-gradient(28deg,rgba(2,0,36,1) 0%,rgba(19,19,196,1) 25%,rgba(0,212,255,1) 100%)">
		<h1 style="font-family:Cooper black;font-style:italic;font-size:66px;color:white">
			Register</h1>
		
	</div>
	<div style="width:22rem">
		
		<div>
			<h5>Already registered?</h5>
				<p></p>
				<a href="login.php">login</a>
		</div>
	</div>
	<div style="width:22rem">
		<div>
			<h5>Enter your Details to register</h5>
			<div>
			<form action="./includes/register.php" method="POST">
				  <div>
					<div>
					  <label>First name</label>
					  <input type="text" name="fn">
					</div>
					<div>
					  <label>Last name</label>
					  <input type="text" name="ln">
					</div>
					<div>
					  <label>Email ID</label>
					  <input type="Email" name="e">
					</div>
					<div>
					  <label>Username</label>
					  <div>
						<div>
						</div>
						<input type="text" name="user">
						
					  </div>
					</div>
				  </div>
				  <div>
					<div>
					  <label>Password</label>
					  <input type="password" name="p">
					</div>
					<div>
					  <label>Date</label>
					  <input type="date" name="dob">
					</div>
					<div>
					  <label>Gender</label>
					  <select>
						<option selected disabled value="">Choose...</option>
						<option name='male'>Male</option>
						<option name='female'>Female</option>
					  </select>
					</div>
					
				  </div>
					  <button type="submit" name="register">Submit</button>
			</form>
			
			
		</div>
  </div>
	</div>
			

    
    
    
    
    
  </div>

</body></html>

