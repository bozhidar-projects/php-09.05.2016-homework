<!DOCTYPE html>
<html>
<head>
	<title>Homework 2016.06.09</title>
	<link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
	<header>
		<h2 class="title">Homework of 2016.06.09</h2>
	</header>
	<main>
	<div class="excercise">
		<h4>Check values of a, b, c</h4>
		<?php			
			$a = 11;
			$b = 3;
			$c = 3;
			echo "<h4>a=".$a." b=".$b." c=".$c."</h4>";
			if ($a == $b) {
				if ($b == $c) {
					echo "a = b = c";					
					echo "<br>$a = $b = $c";
				}
				elseif ($b > $c) {
					echo "a = b > c";
					echo "<br>$a = $b > $c";
				}
				else {
					echo "a = b < c";
					echo "<br>$a = $b < $c";
				}
			}

			if ($a > $b) {
				if ($b == $c) {
					echo "a > b = c";
					echo "<br>$a > $b = $c";					
				}
				elseif ($b > $c) {
					echo "a > b > c";
					echo "<br>$a > $b > $c";					
				}
				else {
					echo "a > b < c";
					echo "<br>$a > $b < $c";
				}
			}

			if ($a < $b) {
				if ($b == $c) {
					echo "a < b = c";
					echo "<br>$a < $b = $c";
				}
				elseif ($b > $c) {
					echo "a < b > c";
					echo "<br>$a < $b > $c";
				}
				else {
					echo "a < b < c";
					echo "<br>$a < $b < $c";
				}
			}
		?>
	</div>

	<div class="excercise">
		<h4>Quadric equation</h4>
		<?php 
			echo "<h4>".$a."x<sup>2</sup> + ".$b."x + ".$c." = 0</h4>";
			$D = $b**2 - 4*$a*$c;
			echo "The Discriminant is: ".$D."<br>";
			if ($D < 0) {
				echo "The equation has no real roots";
			}
			elseif ($D == 0) {
				echo "The equation has only one root<br>";
				$x = -$b/2*$a;
				echo "x = ".$x;
			}
			else {
				$x1 = (-$b+sqrt($D))/(2*$a);
				$x2 = (-$b-sqrt($D))/(2*$a);
				echo "The equation has two roots:<br>";
				echo "x<sub>1</sub> = ".$x1."<br>";
				echo "x<sub>2</sub> = ".$x2."<br>";
			}
		?>
	</div>

	<div class="excercise">
		<h4>Check if number is prime or not</h4>
		<?php
			if ($a==1 || $a==2) {
				echo "The number $a is prime<br>";
			}
			$i=2;
			while($a>$i) {
				if ($a % $i == 0) {
					echo "The number $a is not prime<br>";
					break;
				}
				elseif ($a % $i != 0) {
					$i++;
				}
				if ($i == $a) {
					echo "The number $a is prime<br>";
				}
			}
			if ($b==1 || $b==2) {
				echo "The number $b is prime<br>";
			}
			$i=2;
			while($b>$i) {
				if ($b % $i == 0) {
					echo "The number $b is not prime<br>";
					break;
				}
				elseif ($b % $i != 0) {
					$i++;
				}
				if ($i == $b) {
					echo "The number $b is prime<br>";
				}
			}
			if ($c==1 || $c==2) {
				echo "The number $c is prime<br>";
			}
			$i=2;
			while($c>$i) {
				if ($c % $i == 0) {
					echo "The number $c is not prime<br>";
					break;
				}
				elseif ($c % $i != 0) {
					$i++;
				}
				if ($i == $c) {
					echo "The number $c is prime<br>";
				}
			}
		?>
	</div>
	</main>
</body>
</html>