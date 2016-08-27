<?php
$file = fopen("database-members.csv", "r");
	$members = array();

	$column_string = fgets($file);
	$column_names = explode(",", $column_string);

	while(!feof($file)) { // feof - end of file - dava true, kogato stignem kraq na file, napisano s !feof kazva, che dokato ne e istina (kraq na file), shte produlji da vurti
		$current_line = trim(fgets($file)); //fgets - chete celiq file , trim - maha white spaces ot nachaloto i kraq na stringa
		$elements = explode(",", $current_line);
		$member = array();
		for ($i = 0; $i < count($column_names); $i++) {
			$key = $column_names[$i];
			$member[$key] = $elements[$i];

		}
		array_push($members, $member);
	}
	fclose($file);
?>