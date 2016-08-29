<!DOCTYPE html>
<html>
<head>
	<title>List of Students</title>
</head>
<style type="text/css">
	ul{
		list-style-type: circle;
	}
	li{
		color: #ff0000;
	}
</style>
<body>
	<ul>
		<?php 
		$students=array("Veselinka","Petya","Bozhidar","Spas","Nikolay","Mihaela");
		for ($i=0; $i < count($students); $i++) {
			echo "<li>".$students[$i]."</li>";
		}
		?>
	</ul>
</body>
</html>