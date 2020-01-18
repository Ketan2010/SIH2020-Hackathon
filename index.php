<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="./start1.css">
	<style>



.image{
	border:2px solid white;
}
.info{
	background-color:black;
	color:white;


}
.info1{
	margin-left:14px;
	background-color:white;
}
	</style>
    <script>
		function tipOfTheDay(id)
{
var TODArray = [
	'Drink atleast 8 glass of water.',
	'Drink atleast 8 glass of water.',
	'Drink atleast 8 glass of water.',
	'Drink atleast 8 glass of water.',
	'Drink atleast 8 glass of water.',
];
var randomNumber = Math.floor(Math.random()*TODArray.length);
document.getElementById(id).innerHTML = TODArray[randomNumber];
}
    </script>
  </head>
  <body>

	<div class="header">
		<?php
			session_start();
			$m = $_SESSION['Goodname'];
		 	include './includes/sidebar.php';
		 	 ?>
		<div class="bajaj container" style="color:black;">
			<img src="./images/logo1.png">
		</div>
	</div>

	<marquee  behavior="scroll" direction="left" SCROLLAMOUNT="5"><p style="font-size:27px; text-shadow:0 0 2px white,0 0 10px rgb(0,128,255),0 0 5px rgb(0,97,193), 0 0 3px rgb(0,75,151),0 0 5px black,0 0 5px black,0 0 5px black; color:white"><b>Bajaj Finserv include Protection through Bajaj Allianz Life Insurance and Bajaj Allianz General Insurance, Lending and Wealth through Bajaj Finance Limited.</b></p></marquee>
	<div class="container tips" style="background-color:white; box-shadow: 5px 5px 6px rgb(228,228,228), 3px 2px 10px rgb(190,190,190);">
		<div class="row">
			<div class="col-2" id="bulb"><img src="./images/bulb.png" alt="bulb" style="width:128px;height:128px;margin-left:-2rem"> </div>
			<div class="col-10" id="tipoftheday" style="margin-left:5rem; margin-top:-3rem; float:right">Tips Of the Day</div>
		</div>
		<div class="row">
			<div class="col-12" id="tip" style="padding-top:2rem">Drink atleast 8 glass of water.</div>
		</div>

	</div>
	<div class="container takequiz">
		<div class="row">
			<div class="col-6"><span id="takequiz" style="font-family:Cooper black; font-size:1.7rem; position:absolute">Take A Quiz</span></div>
			<div class="col-6">
			<button class="btn btn-primary button" id="mybtn" style="background-color:blue; border: 3px solid white;width:10rem; height:3rem;  margin-auto; border-radius:30px"><b><a href="Questionnaire.php" style="font-size:23px; color:white; text-decoration:none;">Quiz &rArr;</a></b></button>
			</div>
		</div>
	</div>

	<div class="bd-example">
  <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="./images/b1.jpg" class="d-block w-100 image" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>First slide label</h5>
          <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="./images/b2.jpg" class="d-block w-100 image" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Second slide label</h5>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="./images/b3.jpg" class="d-block w-100 image" alt="..." style="width:60px; height:220px">
        <div class="carousel-caption d-none d-md-block">
          <h5>Third slide label</h5>
          <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

	<div class="footer">
		<br><footer>
			<div id="accordion" >

				<div class="card">
					<div class="card-header" style="background-color:black;border:1px solid white; height:3rem;">
						<a class="card-link" data-toggle="collapse" href="#collapseOne" style="color:white">
							<b>Why take insurance?</b>
						</a>
					</div>
					<div id="collapseOne" class="collapse " data-parent="#accordion">
						<div class="card-body">
							Insurance is not an expense but necessity to secure our life.
						</div>
					</div>
				</div>

				<div class="card">
					<div class="card-header" style="background-color:black;border:1px solid white; height:3rem;">
						<a class="collapsed card-link" data-toggle="collapse" href="#collapseTwo" style="color:white">
							<b>What are the benefits of insurance?</b>
						</a>
					</div>
					<div id="collapseTwo" class="collapse" data-parent="#accordion">
						<div class="card-body">
							Lorem ipsum..
						</div>
					</div>
				</div>

			</div>

		</footer>
	</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script>tipOfTheDay("tip")</script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
