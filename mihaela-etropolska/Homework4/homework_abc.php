<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
		$a = 100;
		$b = 100;
		$c = 10;

		if ($a >= $b) {
			if ($a > $c) {
				echo "A is greater<br>";
			} elseif ($a <= $c) {
				echo "C is greater<br>";
			}
		}

		if ($a == $c) {
			if ($a != $b) {
			echo "A equals C<br>";
		} elseif ($a == $b) {
			echo "A equals B equals C<br>";
			}
		}

		if ($b > $a) {
			if ($b >= $c) {
				echo "B is greater<br>";
			} elseif ($b < $c) {
				echo "C is greater<br>";
			}
		}

		if ($a == $b) {
			if ($a != $c) {
				echo "A equals B<br>";
			}
		}

		if ($b == $c) {
			if ($b != $a) {
				echo "B equals C<br>";
			}
		}
	?>
</body>
</html>