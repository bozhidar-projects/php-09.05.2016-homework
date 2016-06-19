<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
		$a = 15;
		$b = -2;
		$c = 0;
		$d = $b * $b - 4 * $a * $c;

		if ($d > 0) {
			$x1 = (-$b + sqrt($d)) / 2 * $a;
			$x2 = (-$b - sqrt($d)) / 2 * $a;
			echo $x1 . "<br>";
			echo $x2 . "<br>";
		} else {
			echo "ERROR";
		}
	?>
</body>
</html>