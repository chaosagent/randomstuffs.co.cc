<html>
<head>
<title>Solution</title>
<script type="text/javascript" src="analytics.js"></script>
<link type="text/css" rel="stylesheet" href="style.css" />
</head>
<body>
<?php
$t = $_POST["t"];
$i = $_POST["i"];
$m = $_POST["m"];
if ((is_numeric($i))&&(is_numeric($m))){
if ($t == "x"){
	$x = $_POST["i"];
	$y;
	$m = $_POST["m"];
	$o = $x * $m;
	$y = 0 - $o;
	echo "The y intercept is ".$y;
}else if($t == "y"){
	$y = $_POST["i"];
	$x;
	$m = $_POST["m"];
	$o = $y / $m;
	$x = $o;
	$o = $o * 2;
	$x = $x - $o;
	echo "The x intercept is ".$x;
}else{
	echo "You must select either x or y";
}
}else{
	echo "The intercept and the slope must both be numeric!";
}
?>
</body>
</html>