<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
		$n = 15;

		for ($a = 2;$a < $n; $a++) {
			$number = $a;
			$is_prime = true;

			for ($c = 2; $c < $number; $c++) { 
				if ($number % $c == 0) {
					$is_prime = false;
					break;
				}
			}

			if ($is_prime) {
				echo "The number" . " " .  $number . " " . "is prime<br>";
			} else {
				echo "The number" . " " . $number . " " . "is not prime<br>";
			}
		}
	?>
</body>
</html>