<!DOCTYPE html>
<html>
	<head>
		<title></title>
	</head>
	<body>
		<?php
			$a = 2;
			$b = 4;
			$c = 5;

			if ($a >= $b) {
			} elseif ($b >= $c) {
				echo "$b<br>";
				echo " Variable <b>b</b> <br>";
			} else {
				echo "$c<br>";
				echo "Variable <b>c</b> <br>";
			}

			if ($a < $b) {				
			} elseif ($a >= $c) {
				echo "$a<br>";
				echo "Variable <b>a</b> <br>";
			} else {
				echo "$c<br>";
				echo "Variable <b>c</b> <br>";
			}

			echo "End of program";
		?>
	</body>
</html>