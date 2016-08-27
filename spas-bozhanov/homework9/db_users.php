<?php
$users_file = fopen("database_users.csv", "r");
	$user_data = array();

	while (!feof($users_file)) {
		$line = trim(fgets($users_file));
		$user_record = explode(",", $line);
		$username = $user_record[0];
		$password = $user_record[1];
		$user_data[$username] = $password;
	}

	fclose($users_file);
?>