<html>
<head>
<!-- For Hiding Number arrows> <-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

input[type=number]::-webkit-inner-spin-button, 
input[type=number]::-webkit-outer-spin-button { 
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    margin: 0; 
}

</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
$(document).ready(function(){	
	
	$("#imperial").hide();
	
	$("input[name='UnitSelect']").click(function(){
		alert($("input[name='UnitSelect']:checked").val());
	});
		
  $("#check").click(function(){
	  
	  
	  
	if ( $('#Q1a').val() == '0' || $('#Q1a').val() == '' || $('#Q1a').val() == 'undefined' || $('#Q1a').val() == null ) 
		{ alert('Please enter your Height'); }
	else if( $('#Q1a').val()< 0 )
		{alert('Please enter a valid Height'); }
	else if( $('#Q1b').val() == '0' || $('#Q1b').val() == '' || $('#Q1b').val() == 'undefined' || $('#Q1b').val() == null ) 
		{ alert('Please enter your Weight'); }
	else if( $('#Q1b').val()< 0 )
		{alert('Please enter a valid Weight'); }
	else
	{
		var height = $("#Q1a").val()/100;
		var weight = $("#Q1b").val();
		
		var BMI = ( weight / (height * height) ).toFixed(2);
		
		$("#BMIScore").text(BMI);
		if (BMI <= 15)
		{		$("#BMIChart").text("Severely underweight");	}
		else if(BMI <= 18.5)
		{		$("#BMIChart").text("Underweight");	}    
		else if (BMI <= 25 ) 
		{		$("#BMIChart").text("Normal (healthy weight)");	} 
		else if(BMI <=30)   
		{		$("#BMIChart").text("Overweight");	} 
		else
		{		$("#BMIChart").text("Severely overweight");	} 
		
	}	
  });
 });
</script>
<style>
fieldset
{
	border: 1px solid #ccc;
	width:80%;
	padding: 1rem;
	margin: 10%;
	margin-top: 3%;
	margin-botton: 1%;
	align-content: center;
}
#question
{
	font-size:30px;
}
</style>
</head>

<body>
	<form>
		<fieldset id="Q1" required>
			<span id="question">BMI Calculator </span>
			<br/><br/>
			<input type="radio" name ="UnitSelect" value="metric" checked="checked">Metric</input>
			<input type="radio" name ="UnitSelect" value="imperial">Imperial</input>
			
			<span id="metric">
				<br/><br/>
				Height: <input type ="number" id="Q1a"> cms
				<br/><br />
				Weight: <input type ="number" id="Q1b"> kgs
			</span>
			
			<span id="imperial">
				<br/><br/>
				Height: <input type ="number" id="Q1a_imp1" > feet &nbsp;&nbsp;&nbsp;&nbsp; <input type ="number" id="Q1a_imp2" > inches
				<br/><br/>
				Weight: <input type ="number" id="Q1b_imp"> pounds
			</span>
			
			<br/><br />
			<div>Your BMI score is <b><span id="BMIScore">___</span></b> which is considered <b><span id="BMIChart">___</span></b>. </div>
		</fieldset>	

		<button id="check" type="button">Calculate</button>
		
	</form>
</body>
</html>
