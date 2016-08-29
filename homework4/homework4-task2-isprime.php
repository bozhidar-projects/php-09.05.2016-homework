<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
		$number = 5;
		$is_prime = true;
		for($i = 2; $i < $number; $i++) {
			if ($number % $i == 0) {
				$is_prime = false;
				break;
			}
		}
		if ($is_prime) {
			echo "The number " . $number . " is prime";
		} else {
			echo "The number " . $number . " is not prime";
		}
	?>
</body>
</html>