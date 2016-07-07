<?php
//travelling section
	//read contents from traveling aside file
	$taside = fopen("./content/travel_aside.csv", "r");
	$travel_aside = array(); //define
	$taside_names = explode(",,", trim(fgets($taside)));

	while (!feof($taside)) {
		$cur_line = trim(fgets($taside));
		$taside_elements = explode(",,", $cur_line);
		for($i=0;$i<count($taside_names);$i++) {
			$kk = $taside_names[$i];
			$article_as[$kk] = $taside_elements[$i];
		}
		array_push($travel_aside, $article_as);
	}
	fclose($taside);
	unset($current_line,$k,$article);

	//read contents from traveling file
	$travel = fopen("./content/travel_content.csv", "r");
	$travelling_array = array(); //define, use later
	$travel_names = explode(",,", trim(fgets($travel)));
	while(!feof($travel)) {
		$current_line = trim(fgets($travel));
		$travel_elements = explode(",,",$current_line);
		for($i=0; $i<count($travel_names); $i++) {
			$k = $travel_names[$i];
			$article[$k] = $travel_elements[$i];
		}
		array_push($travelling_array, $article);
	}
	for($i=0;$i<count($travelling_array);$i++) {
		$travelling_array[$i]['aside'] = $travel_aside[$i];
	}
	fclose($travel);
	unset($current_line,$k,$article);

//Sport sections

	//read contents from sports aside file
	$saside = fopen("./content/sport_aside.csv", "r");
	$sport_aside = array(); //define
	$saside_names = explode(",,", trim(fgets($saside)));

	while (!feof($saside)) {
		$cur_line = trim(fgets($saside));
		$saside_elements = explode(",,", $cur_line);
		for($i=0;$i<count($saside_names);$i++) {
			$kk = $saside_names[$i];
			$article[$kk] = $saside_elements[$i];
		}
		array_push($sport_aside, $article);
	}
	fclose($saside);
	unset($current_line,$k,$article);

	//read contents from sports file
	$sports = fopen("./content/sport_content.csv", "r");
	$sport_array = array(); //define, use later
	$sport_names = explode(",,", trim(fgets($sports)));
	while(!feof($sports)) {
		$current_line = trim(fgets($sports));
		$sport_elements = explode(",,",$current_line);
		for($i=0; $i<count($sport_names); $i++) {
			$k = $sport_names[$i];
			$article[$k] = $sport_elements[$i];			
		}
		array_push($sport_array, $article);
	}
	for($i=0;$i<count($sport_array);$i++) {
		$sport_array[$i]['aside'] = $sport_aside[$i];
	}	
	fclose($sports);
	unset($current_line,$k,$article);


//makeup section

	//read contents from makeup aside file
	$maside = fopen("./content/makeup_aside.csv", "r");
	$makeup_aside = array(); //define
	$maside_names = explode(",,", trim(fgets($maside)));

	while (!feof($maside)) {
		$cur_line = trim(fgets($maside));
		$maside_elements = explode(",,", $cur_line);
		for($i=0;$i<count($maside_names);$i++) {
			$kk = $maside_names[$i];
			$article[$kk] = $maside_elements[$i];
		}
		array_push($makeup_aside, $article);
	}
	fclose($maside);
	unset($current_line,$k,$article);

	//read contents from makeup file
	$makeup = fopen("./content/makeup_content.csv", "r");
	$makeup_array = array(); //define, use later
	$makeup_names = explode(",,", trim(fgets($makeup)));
	while(!feof($makeup)) {
		$current_line = trim(fgets($makeup));
		$makeup_elements = explode(",,",$current_line);
		for($i=0; $i<count($makeup_names); $i++) {
			$k = $makeup_names[$i];
			$article[$k] = $makeup_elements[$i];			
		}
		array_push($makeup_array, $article);
	}	
	fclose($makeup);
	for($i=0;$i<count($makeup_array);$i++) {
		$makeup_array[$i]['aside'] = $makeup_aside[$i];
	}
	unset($current_line,$k,$article);

//technology section

	//read contents from technology aside file
	$techaside = fopen("./content/technology_aside.csv", "r");
	$technology_aside = array(); //define
	$teaside_names = explode(",,", trim(fgets($techaside)));

	while (!feof($techaside)) {
		$cur_line = trim(fgets($techaside));
		$teaside_elements = explode(",,", $cur_line);
		for($i=0;$i<count($teaside_names);$i++) {
			$kk = $teaside_names[$i];
			$article[$kk] = $teaside_elements[$i];
		}
		array_push($technology_aside, $article);
	}
	fclose($techaside);
	unset($current_line,$k,$article);

	//read contents from technology file
	$technology = fopen("./content/technology_content.csv", "r");
	$technology_array = array(); //define, use later
	$technology_names = explode(",,", trim(fgets($technology)));
	while(!feof($technology)) {
		$current_line = trim(fgets($technology));
		$technology_elements = explode(",,",$current_line);
		$technology_content = array();
		for($i=0; $i<count($technology_names); $i++) {
			$k = $technology_names[$i];
			$article[$k] = $technology_elements[$i];			
		}
		array_push($technology_array, $article);
	}	
	fclose($technology);
	for($i=0;$i<count($technology_array);$i++) {
		$technology_array[$i]['aside'] = $technology_aside[$i];
	}
	unset($current_line,$k,$article);

//emails

	$email_array = array();
	$mails = fopen("./content/mails.csv", "r");
	$email_indexes = explode(",,", trim(fgets($mails)));
	while (!feof($mails)) {
		$current_line = trim(fgets($mails));
		$email_elements = explode(",,", $current_line);
		for($i=0;$i<count($email_indexes);$i++){
			$k = $email_indexes[$i];
			$article[$k] = $email_elements[$i];
		}
		array_push($email_array, $article);
	}
	fclose($mails);
	unset($current_line,$k,$article);

//members

	$member_array = array();
	$members = fopen("./content/members.csv", "r");
	$members_indexes = explode(",,",trim(fgets($members)));
	while (!feof($members)) {
		$current_line = trim(fgets($members));
		$member_elements = explode(",,", $current_line);
		for($i=0;$i<count($members_indexes); $i++) {
			$k = $members_indexes[$i];
			$article[$k] = $member_elements[$i];
		}
		array_push($member_array, $article);
	}
	fclose($members);
	unset($current_line,$k,$article);

//users
	$users = array();
	$file = fopen("./content/users.csv", "r");
	while (!feof($file)) {
		$user = array();
		$string = trim(fgets($file));
		$current_line = explode(",,", $string);
		$user[$current_line[0]] = $current_line[1];
		$user['group'] = $current_line[2];
		array_push($users, $user);
	}
	fclose($file);
?>