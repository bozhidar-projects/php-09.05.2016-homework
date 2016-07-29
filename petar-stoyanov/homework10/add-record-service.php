<?php
	require_once("db.php");

	if (isset($_POST["Firstname"]) &&
		isset($_POST["Lastname"]) &&
		isset($_POST["Age"]) &&
		isset($_POST["University"]) &&
		isset($_POST["Phone"])) {

		$member = array('Firstname' => $_POST["Firstname"],
						'Lastname' => $_POST["Lastname"],
						'Age' => $_POST["Age"],
						'University' => $_POST["University"],
						'Phone' => $_POST["Phone"]);

		array_push($members, $member);
		add_member($_POST['Firstname'],$_POST['Lastname'],$_POST['Age'],$_POST['University'],$_POST['Phone'], $_POST['ID']);
		
		header("Location: home.php?page=members");
	}
?>