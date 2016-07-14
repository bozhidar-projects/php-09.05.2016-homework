<?php	
	####Read article function
	function read_article($filename,$aside_file="") {
		$file = fopen($filename, "r");
		$array_indexes = explode(",,", trim(fgets($file)));
		$array = array();
		while (!feof($file)) {
			$cur_line = trim(fgets($file));
			$array_element = explode(",,", $cur_line);			
			for($i=0;$i<count($array_indexes);$i++) {
				$k = $array_indexes[$i];
				$element[$k] = $array_element[$i];
			}
			array_push($array, $element);
		}
		fclose($file);

		if ($aside_file!="") {
			$file = fopen($aside_file, "r");
			$array_aside = read_article($aside_file);
			for($i=0;$i<count($array_aside);$i++) {
				$array[$i]['aside'] = $array_aside[$i];
			}
		}
		return $array;
	}
	global $travelling_array;
	$travelling_array = read_article("./content/travel_content.csv","./content/travel_aside.csv");
	$sport_array = read_article("./content/sport_content.csv","./content/sport_aside.csv");
	$makeup_array = read_article("./content/makeup_content.csv","./content/makeup_aside.csv");	
	$technology_array = read_article("./content/technology_content.csv","./content/technology_aside.csv");
	$email_array = read_article("./content/mails.csv");
	$member_array = read_article("./content/members.csv");
	$users = read_article("./content/users.csv");
?>