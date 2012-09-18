<html>
<head>
<title>Solution</title>
<script type="text/javascript" src="analytics.js"></script>
<link type="text/css" rel="stylesheet" href="style.css" />
</head>
<body>
<?php
//stable
$x = $_POST["x"];
$y = $_POST["y"];
if ((is_numeric($x))&&(is_numeric($y)))
	{
	$z = 0;
	for ($x = $_POST["x"] - 1; $x < $y + 1; $x++)
		{
		$z = $x + $z;
		}
	$x = $_POST["x"];
	echo "The sum of all the consecutive numbers from ".$x." to ".$y." is ".$z;
	}
else
	{
	echo "All values should be numbers!";
	}
?>
<br />
<a href=consecadd.html>Back</a>
<br />
<a href=index.php>Back to home</a>
</body>
</html>
