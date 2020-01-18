<html>
<head>
<script>
function tipOfTheDay(id)
{
var TODArray = [
	'Tip Array 1',
	'Tip Array 2',
	'Tip Array 3',
	'Tip Array 4',
	'Tip Array 5',
];
var randomNumber = Math.floor(Math.random()*TODArray.length);
document.getElementById(id).innerHTML = TODArray[randomNumber];
}
</script>
</head>

<body>
<div id ="tip">Placeholder</div>
</body>

<script>
tipOfTheDay("tip")
</script>
</html>