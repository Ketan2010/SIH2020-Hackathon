<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="./start.css">
	<style>
		


.image{
	border:2px solid white;
}
.info{
	background-color:black;
	color:white;
	
	
}
#container {
  width: 100%;
  height: 100%;
  margin: 0;
  padding: 0;
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
 
  <body style="background:url('./images/bg.jpg')">
	
	<div class="header">
		<?php include './includes/sidebar.php'; ?>
		<?php include './includes/historyphp.php'; ?>
		 
		<div class="bajaj container" style="color:black; background-image:url('./images/logo.png');">
			Logo
		</div>
	</div>
	
	
	<div id="piechart"></div>
	
	<table class="table table-striped table-dark" style="width:590px;">
		  <thead>
			<tr>
			  <th scope="col">Date</th>
			  <th scope="col">Score</th>
			</tr>
		  </thead>
		  <tbody>
			<tr>
			  <td><?= $date ?></td>
			  <td><?= $score ?></td>
			</tr>
			<tr>
			  <td>21 jan</td>
			  <td>9</td>
			</tr>
			<tr>
			  <td>22 jan</td>
			  <td>10</td>
			</tr>
		  </tbody>
		  
	</table>
	
		
		<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

		<script type="text/javascript">
				// Load google charts
				google.charts.load('current', {'packages':['corechart']});
				google.charts.setOnLoadCallback(drawChart);

				// Draw the chart and set the chart values
				function drawChart() {
				  var data = google.visualization.arrayToDataTable([
				  ['date', 'score'],
				  ["<?php echo $date; ?>", <?php echo $score; ?>],
				  ['21 jan', 9],
				  ['23 jan', 10],
			
				]);

				  // Optional; add a title and set the width and height of the chart
				  var options = {'title':'Your Daily Score ', 'width':550, 'height':250};

				  // Display the chart inside the <div> element with id="piechart"
				  var chart = new google.visualization.PieChart(document.getElementById('piechart'));
				  chart.draw(data, options);
				}
		</script>
	
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script>tipOfTheDay("tip")</script>
	<script src="https://cdn.anychart.com/releases/8.0.0/js/anychart-base.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
  

</html>
