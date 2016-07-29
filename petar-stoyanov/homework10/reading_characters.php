<!DOCTYPE html>
<html>
<head>
	<title>Working With Files</title>
</head>
<body>
	<pre><?php 
			$file = fopen("test.txt", "r");

			while (!feof($file)) {
				$current_character = fgetc($file);
				echo $current_character;
			}

			fclose($file);
		?></pre>
</body>
</html>