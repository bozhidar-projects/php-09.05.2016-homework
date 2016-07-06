<?php 
	$file1 = fopen("database.csv", "r");
	$articles = array();

	$columnn_string = fgets($file1);
	$columnn_names = explode(",", $columnn_string);
	while (!feof($file1)) {
		$current1_line = trim(fgets($file1));
		$element = explode(",",$current1_line);	
		$article = array();
		for ($j=0; $j < count($columnn_names); $j++){
			$key1 = $columnn_names[$j];
			$article[$key1] = $element[$j];
		}
		
		array_push($articles, $article);
	}
	fclose($file1);
 ?>