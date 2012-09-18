<html>
<head>
<title>Solution</title>
<script type="text/javascript" src="analytics.js"></script>
<link type="text/css" rel="stylesheet" href="style.css" />
</head>
<body>
<?php
	//stable
	$a = $_POST["vara"];
	$b = $_POST["varb"];
	$c = $_POST["varc"];
	if ((is_numeric($a))&&(is_numeric($b))&&(is_numeric($c)))
	{
	$e = 0;
	$sqrt = pow($b,2) - (4 * $a * $c);
	$x1 = 0;
	$x2 = 0;
	if (($sqrt < 0)||($a == 0))
		{
		$e++;
		$a = 100;
		}
	$x1 = ((-1*$b) + sqrt($sqrt))/(2 * $a);
	$x2 = ((-1*$b) - sqrt($sqrt))/(2 * $a);
	if ($e > 0)
		{
		echo "There are no solutions";
		}
	else if ($sqrt > 0)
		{
		echo "There are two solutions.<br />The first solution is ".$x1.". <br />The second solution is ".$x2.".";
		}
	else if ($sqrt == 0)
		{
		echo "There is one solution.<br />It is ".$x1;
		}
	else
		{
		echo $sqrt;
		echo "error";
		}
	}
	else
	{
	echo "All values should be numbers!";
	}
?>
<br />
<a href=quadeqsolve.html>Back</a>
<br />
<a href=index.php>Back to home</a>
</body>
</html>
