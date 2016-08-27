<?php
$file = fopen("database-sport.csv", "r");
	$ssection = array();

	$column_string = fgets($file);
	$column_names = explode(",,", $column_string);

	while(!feof($file)) { // feof - end of file - dava true, kogato stignem kraq na file, napisano s !feof kazva, che dokato ne e istina (kraq na file), shte produlji da vurti
		$current_line = trim(fgets($file)); //fgets - chete celiq file , trim - maha white spaces ot nachaloto i kraq na stringa
		$elements = explode(",,", $current_line);
		$sarticle = array();
		for ($i = 0; $i < count($column_names); $i++) {
			$key = $column_names[$i];
			$sarticle[$key] = $elements[$i];

		}
		array_push($ssection, $sarticle);
	}
	fclose($file);
?>