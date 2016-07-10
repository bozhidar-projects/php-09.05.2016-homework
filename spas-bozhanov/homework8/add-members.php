<?php
	require_once("db_members.php");

	if (isset($_POST["Firstname"]) &&
		isset($_POST["Lastname"]) &&
		isset($_POST["Phone"]) &&
		isset($_POST["University"])) {

		$member = array('Firstname' => $_POST["Firstname"],
						'Lastname' => $_POST["Lastname"],
						'Phone' => $_POST["Phone"],
						'University' => $_POST["University"]);

		array_push ($members, $member);

		$csv_string = implode(",", $member);
		$file = fopen("database-members.csv", "a");
		fwrite($file, "\n".$csv_string);
		fclose($file);

		header("Location: members.php");
	}
?>