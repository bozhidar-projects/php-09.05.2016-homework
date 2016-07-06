<?php 
	$file = fopen("database1.csv", "r");
	$members = array();

	$column_string = fgets($file);
	$column_names = explode(",", $column_string);
	while (!feof($file)) {
		$current_line = trim(fgets($file));
		$elements = explode(",",$current_line);	
		$member = array();
		for ($i=0; $i < count($column_names); $i++){
			$key = $column_names[$i];
			$member[$key] = $elements[$i];
		}
		
		array_push($members, $member);
	}
	fclose($file);
 ?>