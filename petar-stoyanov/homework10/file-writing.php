<!DOCTYPE html>
<html>
<head>
	<title>File Writing</title>
</head>
<body>
	<?php
		$file = fopen("some-file.txt", "a");

		fwrite($file, "Hello \n");
		fwrite($file, ", World");

		fclose($file);
	?>
</body>
</html>