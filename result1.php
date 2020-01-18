<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="./result1.css">

<script>

	function animateValue(id, start, end, duration) {
		var range = end - start;
		var current = start;
		var increment = end > start? 1 : -1;
		var stepTime = Math.abs(Math.floor(duration / range));

		var r;
		var g;

		//var obj = document.getElementById(id);
		var timer = setInterval(function() {
			current += increment;
			document.getElementById(id).innerHTML = current;

			r = current<50 ? 255 : Math.floor(255-(current*2-100)*255/100);
			g = current>50 ? 255 : Math.floor((current*2)*255/100);
			$(".head").css("background-color", "rgb("+r+","+g+",0)");

			if (current == end) {
				clearInterval(timer);
			}
		}, stepTime);

	}

	animateValue("value", 0, 50, 1000);

</script>

  </head>
  <body>

	<div class="header" style="background-color:rgb(0,0,160); height:73px; border-bottom:2px solid white">
		<?php include './includes/sidebar.php'; ?>
		<div class="bajaj">
			<p style="margin-left:7rem; font-size:33px; color:white; font-family:Cooper black; text-shadow:0 0 5px black,0 0 3px yellow; position:absolute">Bajaj finc serv</p>
		</div>
	</div>

	<fieldset class="quiz">

		<div class="head">

			<div class="scoreText">
				<h1>Your Result is </br><div id="value">0</div></h1>
				<!----- RESULT BLOCK -------->

			</div>
		</div>

			<div class="customBox">
				<center>
					<h3>To view your previous results.</h3><br/>
					<button class="btn btn-danger" ><a href="">Register</a></button>
				</center>
			</div>

			<div class="customBox">
				<center>
					<h3>View Insurance Policies.</h3><br/>
					<button class="btn btn-primary"><a href="">Policy</a></button>
				</center>
			</div>


	



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script>tipOfTheDay("tip")</script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
