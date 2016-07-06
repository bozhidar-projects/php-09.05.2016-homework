<!DOCTYPE html>
<html>
<head>
	<title>Homework4</title>
</head>
<body>
	<header>
		<h2>Homework4</h2>
	</header>
	<main>
	<h3>Exercise2</h3>
	<?php
	$n=18;
	for ($j=17; $j < $n; $j++) { 
		$number=$j;
		$is_prime=true;

		for($i =2; $i < $number; $i++) {
			if ($number % $i == 0){
				$is_prime = false;
				break;
				}
			}

		if ($is_prime) {
			echo "The number " . $number . " is prime<br>";
		} else {
			echo "The number " . $number . " is not prime<br>";
		}
	
	}
		
	?>
	</main>
</body>
</html>