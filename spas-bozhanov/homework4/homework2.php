<!DOCTYPE html>
<html>
	<head>
		<title>Is Prime</title>
	</head>
	<body>
		<?php
		$n = 50;
		for ($j = 2; $j < $n; $j++) {

			$number = $j;
			$is_prime = true;

  			for ($i = 2; $i < $number; $i++) {
  				if ($number % $i == 0) {
  				$is_prime = false;
  				break;
  			}
        }

        if ($is_prime) {
        	echo "The number " . $number . " is prime <br>";
        }	else {
        	echo "The number " . $number . " is not prime <br>";
        }
		}

		?>
	</body>
</html>