<?php
$file = fopen("database-makeup.csv", "r");
	$msection = array();

	$column_string = fgets($file);
	$column_names = explode(",,", $column_string);

	while(!feof($file)) { // feof - end of file - dava true, kogato stignem kraq na file, napisano s !feof kazva, che dokato ne e istina (kraq na file), shte produlji da vurti
		$current_line = trim(fgets($file)); //fgets - chete celiq file , trim - maha white spaces ot nachaloto i kraq na stringa
		$elements = explode(",,", $current_line);
		$marticle = array();
		for ($i = 0; $i < count($column_names); $i++) {
			$key = $column_names[$i];
			$marticle[$key] = $elements[$i];

		}
		array_push($msection, $marticle);
	}
	fclose($file);
?>