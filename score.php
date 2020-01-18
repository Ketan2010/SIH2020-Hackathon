<!DOCTYPE>
<html>
<head>

<script>
function animateValue(id, start, end, duration) {
    var range = end - start;
    var current = start;
    var increment = end > start? 1 : -1;
    var stepTime = Math.abs(Math.floor(duration / range));
    //var obj = document.getElementById(id);
    var timer = setInterval(function() {
        current += increment;
        document.getElementById(id).innerHTML = current;
        if (current == end) {
            clearInterval(timer);
        }
    }, stepTime);
	
}

animateValue("value", 0, 60, 2000);

</script>
</head>
<body>
	<center>
		<div>
			<span>Your Score is</span>
			<br/><br/>
			<div id="value">0</div>
		</div>
	</center>
</body>
</html>
