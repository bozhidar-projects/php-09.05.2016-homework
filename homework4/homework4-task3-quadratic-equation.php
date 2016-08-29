<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php 
$a=100;
$b=1;
$c=9991;
		$d = pow($b, 2) - 4 * $a * $c;
		$x;
		$x1;
		$x2;
		if ($d > 0) {
				$x1 = (-$b - sqrt($d)) / (2 * $a);
				$x2 = (-$b + sqrt($d)) / (2 * $a);
				echo "x1= ".$x1." ,x2= ".$x2;
		} else if ($d === 0) {
				$x = (-$b) / (2 * $a);
				echo "x1=x2= ".$x;
		} else {
			echo "No roots";
		}


 
 ?>
</body>
</html>