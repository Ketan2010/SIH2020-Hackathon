
<html>

<head>
<!-- Form Animation><-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js">
</script>

<script>
$(document).ready(function(){

	var maxQuest = 10;
	var fadeTime = 1000;

	$("#Q1").hide();
	$("#Q2").hide();
	$("#Q3").hide();
	$("#Q4").hide();
	$("#Q5").hide();
	$("#Q6").hide();
	$("#Q7").hide();
	$("#Q8").hide();
	$("#Q9").hide();
	$("#Q10").hide();
	$("#Complete_Page").hide();
	$("#score").hide();


	var currQuest = 1;

	$("#outOfPlaceholder").text(currQuest);
	$("#Q1").fadeIn(fadeTime);
	$(".prevButton").attr("disabled", true);

	var percent = 0;
	//percent = ((currQuest/maxQuest)*100);
	$(".progress-bar").css("width", percent+"%");
	$("#progressPercent").text(percent+"%");

	$(".nextButton").click(function(){

		//Hide Tips
		$("#checkText").text("");

		//validation
		var questAnswered = false;
		if (!$("input[name='Q"+currQuest+"']:checked").val() && currQuest!=maxQuest+1)
		{ alert('Nothing is checked!'); }
		else
		{ questAnswered = true; }

		//fade old out fade new in
		if (currQuest!=maxQuest+1 && questAnswered)
		{
			$("#Q"+currQuest).fadeOut(fadeTime);
			currQuest+=1;
			setTimeout(function(){ $("#Q"+currQuest).fadeIn(fadeTime); },fadeTime)
			if(currQuest<=maxQuest)
				$("#outOfPlaceholder").text(currQuest);

			//Re-enable prev button
			$(".prevButton").attr("disabled", false);

			//Progress Bar
			percent = (((currQuest-1)/maxQuest)*100);
			$(".progress-bar").css("width", percent+"%");
			$("#progressPercent").text(percent+"%");
		}

		if (currQuest==maxQuest+1)
		{
			//disable button
			//$(".nextButton").attr("disabled", true);

			//Change Next Button Text
			$(".nextButton").attr("value","Complete");
			$calcScore();
			$("#progressPercent").text("100%");
			$("#Complete_Page").show();

			//Go to next page
		}
  });

  $(".prevButton").click(function(){

		//Hide Tips
		$("#checkText").text("");

		if (currQuest!=1)
		{
			$("#Q"+currQuest).fadeOut(fadeTime);
			currQuest-=1;
			setTimeout(function(){ $("#Q"+currQuest).fadeIn(fadeTime); },fadeTime)
			$("#outOfPlaceholder").text(currQuest);

			//Change Next Button Text
			$(".nextButton").attr("value","Next");


			//Progress Bar
			percent = (((currQuest-1)/maxQuest)*100);
			$(".progress-bar").css("width", percent+"%");
			$("#progressPercent").text(percent+"%");

			//Hide the Completetion message
			$("#Complete_Page").hide();
		}

		if(currQuest==1)
		{
			//disable button
			$(".prevButton").attr("disabled", true);
		}
  });

  $calcScore = function(  ){

	var score=0;
	var maxScore = maxQuest*3;

	for (i=1;i <= maxQuest;i++)
	{
		score += parseInt( $("input[name='Q"+i+"']:checked").val() );
		//alert($("input[name='Q"+i+"']:checked").val());
	}
	score = (score/maxScore)*100;
	score = score.toFixed(2);
	//alert(score);
	$("#score").text(score);

 }
 $(".check").click(function(){

		if (currQuest==1)
		{			$("#checkText").text("1");		}
		else if (currQuest==2)
		{			$("#checkText").text("Healthy person should sleep for atleast 7-8 hours a day.");		}
		else if (currQuest==3)
		{			$("#checkText").text("Do 30 minutes of cardiovascular exercise on an empty stomach.");		}
		else if (currQuest==4)
		{			$("#checkText").text("On average, a person should drink 8-10 glasses of water everyday.");		}
		else if (currQuest==5)
		{			$("#checkText").text("A person should never smoke as it can have many side-effects like lung cancer and can also be fatal.");		}
		else if (currQuest==6)
		{			$("#checkText").text("It depends on the drink. For example, red wine is very good for heart. But too much consumpino is harmful");		}
		else if (currQuest==7)
		{			$("#checkText").text("7");		}
		else if (currQuest==8)
		{			$("#checkText").text("8");		}
		else if (currQuest==9)
		{			$("#checkText").text("9");		}
		else if (currQuest==10)
		{			$("#checkText").text("10");		}

 });
});


</script>

<!-- Progress Bar><-->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>


<style >
.progressBar
{
 width: 30rem;
 margin-left:2rem;
}

fieldset
{
	border: 1px solid #ccc;
	width:15rem;
	padding: 1rem;
	margin: 10%;
	margin-top: 3%;
	margin-bottom: 1%;
	align-content: center;
}
#question
{
	font-size:22px;
}
.quiz{
	width:19rem;
	margin-left:18px;
	color:black;
	border:3px solid black;
	box-shadow: 0 0 4px white,0 0 5px white,0 0 9px white,0 0 8px white;
	background-color:white;
}
ul{
	margin-left:1rem;
}
li{


}
body{
	background:linear-gradient(225deg,rgb(51, 51, 255),rgb(204, 204, 255),rgb(230, 230, 255),rgb(255,255,255)) ;

}
.image{
	width:16rem ;
	height:200px;
	border:1px solid black;
	box-shadow: 3px 2px 3px rgb(154,154,154),4px 3px 5px rgb(188,188,188),5px 4px 8px rgb(218,218,218);
}

</style>

</head>

<body>
	<div class="header" style="background-color:rgb(0,0,160); height:73px; border-bottom:2px solid white">
		<?php include './includes/sidebar.php'; ?>
		<div class="bajaj">
			<p style="margin-left:7rem; font-size:33px; color:white; font-family:Cooper black; text-shadow:0 0 5px black,0 0 3px yellow; position:absolute">Bajaj finc serv</p>
		</div>
	</div><br>
	<span id="progressBar container">
	<div class="progress " style="height:40px; margin-left:10px; margin-top:0px; width:90%; border-radius:15px; border:2px solid white">
		<div class="progress-bar progress-bar-striped" ><span id="progressPercent" style="font-style:bold; font-size:17px"></span></div>
	</div>
	</span>

	<hr/ >
	<form action="" class="form-control">

		<fieldset  id="Q1" class="quiz" >
			<span id="question" style="color:black">1. How many servings of fruits and vegetables do you eat a day ? </span>
			<hr/>
			<input type ="radio" onclick="document.getElementById('myImage1').src='./images/fruit0.png'" name="Q1" value="0" >0</input> <br />
			<input type ="radio" onclick="document.getElementById('myImage1').src='./images/fruit1.png'" name="Q1" value="1">1-2</input> <br />
			<input type ="radio" onclick="document.getElementById('myImage1').src='./images/fruit2.png'" name="Q1" value="2">3-4</input> <br />
			<input type ="radio" onclick="document.getElementById('myImage1').src='./images/fruit3.png'" name="Q1" value="3">5+</input> <br />
			<div class="card" style="width:0px ; height:200px">
				<img id="myImage1" src="./images/fruit0.png" class="image"></img>
			</div>
		</fieldset>

		<fieldset id="Q2" required class="quiz">
			<span id="question" style="color:black">2. How many hours do you sleep per Night ? </span>
			<hr/>
			<input type ="radio" onclick="document.getElementById('myImage2').src='./images/clk0.png'"  name="Q2" value="0">Less than 6 hours</input> <br />
			<input type ="radio" onclick="document.getElementById('myImage2').src='./images/clk1.png'"  name="Q2" value="2">6-7 hours</input> <br />
			<input type ="radio" onclick="document.getElementById('myImage2').src='./images/clk2.png'"  name="Q2" value="3">7-8 hours</input> <br />
			<input type ="radio" onclick="document.getElementById('myImage2').src='./images/clk3.png'"  name="Q2" value="1">More than 8 hours</input> <br />
			<div class="card" style="width:0px ; height:200px">
				<img id="myImage2" src="./images/sleep.png" class="image"></img>
			</div>
		</fieldset>

		<fieldset  id="Q3" class="quiz">
			<span id="question" style="color:black">3. Your daily exerise routine ? </span>
			<hr/>
			<input type ="radio" onclick="document.getElementById('myImage3').src='./images/fit0.png'" name="Q3" value="0">Never</input> <br />
			<input type ="radio" onclick="document.getElementById('myImage3').src='./images/fit1.png'"  name="Q3" value="1">Rarely</input> <br />
			<input type ="radio" onclick="document.getElementById('myImage3').src='./images/fit2.png'"  name="Q3" value="2">10mins</input> <br />
			<input type ="radio" onclick="document.getElementById('myImage3').src='./images/fit3.png'"  name="Q3" value="3">30mins</input> <br />
			<div class="card" style="width:0px ; height:200px">
				<img id="myImage3" src="./images/fit0.png" class="image"></img>
			</div>
		</fieldset>

		<fieldset  id="Q4" class="quiz" style="color:black">
			<span id="question">4. How many glasses of water you drink everyday ? </span>
			<hr/>
			<input type ="radio" onclick="document.getElementById('myImage4').src='./images/drop0.png'" name="Q4" value="0">Very few</input> <br />
			<input type ="radio" onclick="document.getElementById('myImage4').src='./images/drop1.png'"  name="Q4" value="1">Less than 5</input> <br />
			<input type ="radio" onclick="document.getElementById('myImage4').src='./images/drop2.png'"  name="Q4" value="3">8-10 glasses</input> <br />
			<input type ="radio" onclick="document.getElementById('myImage4').src='./images/drop3.png'"  name="Q4" value="2">Very frequently</input>	<br />
			<div class="card" style="width:0px ; height:200px">
				<img id="myImage4" src="./images/drop0.png" class="image"></img>
			</div>
		</fieldset>

		<fieldset  id="Q5" class="quiz">
			<span id="question"  style="color:black">5. How often do you smoke ? </span>
			<hr/>
			<input type ="radio" onclick="document.getElementById('Q5').style.background = '#33ff33'" name="Q5" value="3">Never</input> <br />
			<input type ="radio" onclick="document.getElementById('Q5').style.background = '#ffff66'" name="Q5" value="2">Often</input> <br />
			<input type ="radio" onclick="document.getElementById('Q5').style.background = '#ff9933'" name="Q5" value="1">Twice or thrice a day</input> <br />
			<input type ="radio" onclick="document.getElementById('Q5').style.background = '#ff6666'" name="Q5" value="0">Very frequently</input>	<br />
		</fieldset>

		<fieldset  id="Q6" class="quiz">
			<span id="question" style="color:black">6. How much alcohol do you  consume everyday ? </span>
			<hr/>
			<input type ="radio"  onclick="document.getElementById('Q6').style.background = '#33ff33'"  name="Q6" value="3">Never</input> <br />
			<input type ="radio"  onclick="document.getElementById('Q6').style.background = '#ffff66'"  name="Q6" value="2">Often</input> <br />
			<input type ="radio"  onclick="document.getElementById('Q6').style.background = '#ff9933'"  name="Q6" value="1">Twice or thrice a day</input> <br />
			<input type ="radio"  onclick="document.getElementById('Q6').style.background = '#ff6666'"  name="Q6" value="0">Very frequently</input> <br/>
		</fieldset>

		<fieldset  id="Q7" class="quiz">
			<span id="question" style="color:black">7. Do you have cholestrol ? </span>
			<hr/>
			<input type ="radio" onclick="document.getElementById('Q7').style.background = '#33ff33'" name="Q7" value="3">No</input> <br />
			<input type ="radio" onclick="document.getElementById('Q7').style.background = '#ff9933'" name="Q7" value="1.5">Average</input> <br />
			<input type ="radio" onclick="document.getElementById('Q7').style.background = '#ff6666'" name="Q7" value="0">Severe</input> <br />
		</fieldset>

		<fieldset  id="Q8" class="quiz">
			<span id="question" style="color:black">8. Do you have diabetes ? </span>
			<hr/>
			<input type ="radio" onclick="document.getElementById('Q8').style.background = '#33ff33'" name="Q8" value="3">None</input> <br />
			<input type ="radio" onclick="document.getElementById('Q8').style.background = '#ff9933'" name="Q8" value="0">Diabetes Mellitus (High sugar)</input> <br />
			<input type ="radio" onclick="document.getElementById('Q8').style.background = '#ff6666'"  name="Q8" value="0">Diabetes Insipidus (Loss of water) </input> <br />
		</fieldset>

		<fieldset  id="Q9" class="quiz">
			<span id="question" style="color:black">9. Do you have any allergies ?</span>
			<hr/>
			<input type ="radio" onclick="document.getElementById('Q9').style.background = '#33ff33'" name="Q9" value="0">No</input> <br />
			<input type ="radio" onclick="document.getElementById('Q9').style.background = '#ff6666'" name="Q9" value="3">Yes</input> <br />
		</fieldset>

		<fieldset id="Q10" required class="quiz">
			<span id="question" style="color:black">10. Placeholder 1 </span>
			<hr/>
			<input type ="radio" name="Q10" value="0">Placeholder answer 1</input> <br />
			<input type ="radio" name="Q10" value="3">Placeholder answer 2</input> <br />
		</fieldset>

		<fieldset id="Complete_Page" class="quiz">
			<span id="question" style="color:black">You have completed taking the Quiz</span>
			<hr/>
			<span id="score">Generating Your Score...</span>

			<?php
					///////BRO JAYESH YAHA TUJHE CODE ADD KARNA HAI.... IF SESSION THEN THIS ELSE THAT

			 ?>
			<span></span>
		</fieldset>

		<div id="checkText"></div>

		<br/>
		<center>
		<ul class="pagination">
			<li class="page-item"><a class="page-link" href="#"><input type="button" value="Previous" class="prevButton" style="border:none; background-color:white"/></a></li>
			<li class="page-item active" style="z-index:-3;"><a class="page-link" href="#"><span>Question <span id="outOfPlaceholder"></span> / 10</span></a></li>
			<li class="page-item"><a class="page-link" href="#"><input type="button" value="Next"  class="nextButton" style="border:none; background-color:white"/></a></li>
		</ul>
		<center>
				<button type="button" class="btn btn-success check" style="float:none;">Check</button>
		</center>

	</form>

</body>
</html>
