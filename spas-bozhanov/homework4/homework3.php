<!DOCTYPE html>
<html>
	<head>
		<title></title>
	</head>
	<body>
	<?php
		$a = 4;
		$b = 8;
		$c = 2;

		$d = ($b**2) - (4 * $a * $c);
		$x = (-$b)/2*$a;
		$x1 = (-$b * sqrt($d))/(2*$a);
		$x2 = (-$b * -sqrt($d))/(2*$a);

		if ($d < 0) {
			echo "Error <br>";
		} elseif ($d = 0) {
			echo "$x <br>";
		} else {
			echo "$x1 <br>";
			echo "$x2 <br>";
		}

		echo "End of program";
	?>
	</body>
</html>