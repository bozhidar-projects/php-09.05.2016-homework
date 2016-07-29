<!DOCTYPE html>
<html>
<head>
	<title>Random GSM Generator</title>
	<link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
	<header>
		<h1>Random GSM generator</h1>
	</header>
	<main>
	<div class="table" style="width: 5%">
	<?php
		for($i=1; $i<11; $i++) {
			echo "08";
			echo rand(7,9);
			for ($j=1; $j<=7; $j++) {

				echo rand(2,8);
			}
			echo "<br>";
		}
	?>
	</div>
	</main>
</body>
</html>