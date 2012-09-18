<html>
<head>
<title>Output</title>
<script type="text/javascript" src="analytics.js"></script>
<link type="text/css" rel="stylesheet" href="style.css" />
</title>
</head>
<body class="out">
<?php
	$type = $_POST["type"];
	$h = $_POST["h"];
	$w = $_POST["w"];
	$char = $_POST["char"];
	$color = $_POST["color"];
	echo "<font color=\"".$color."\">";
	//no bugs
	if ((is_numeric($h))&&(is_numeric($w))){
		if ($type == "parallel"){
			$w = $w - 6;
			$bgw = 0;
			$b = 0;
			for ($r = 1; $r < $h + 1; $r++){
				if ($b == $w){
					$bgw = 1;
					$b = $b - 1;
				}else if ($b == 0){
					$bgw = 0;
					$b++;
				}
				else if ($bgw == 0){
					$b++;
				}else if ($bgw == 1){
					$b = $b - 1;
				} 
			for ($c = 0; $c < $b - 1; $c++){
				echo "&nbsp;";
			}
			echo $char."&nbsp;&nbsp;&nbsp;&nbsp;".$char."<br />";
		}
	}
	else if ($type == "diamond"){
		echo "<center>".$char;
		$bgw = 0;
		$b = 0;
		for ($r = 1; $r < $h + 1; $r++){
			echo "<center>".$char;
			if ($b == $w){
				$bgw = 1;
				$b = $b - 1;
			}else if ($b == 0){
				$bgw = 0;
				$b++;
			}
			else if ($bgw == 0){
				$b++;
			}else if ($bgw == 1){
				$b = $b - 1;
			}
			for ($c = 0; $c < $b - 1; $c++){
				echo "&nbsp;";
			}
			if ($b != 0){
				echo $char."<br />";
			}
		}
		echo "</center>";
	}
	}
	else{
		echo "All values must be numbers";
	}
	echo "</font>";
?>
</body>
</html>
