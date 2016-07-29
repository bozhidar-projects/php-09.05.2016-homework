<?php
	require_once("db.php");

	if (isset($_POST["ID"])) {
		$value = $_POST["ID"];
		if ($value >= 0) {
			unset($members[$value]);
			delete_member_by_id($value);
		}

		header("Location: home.php?page=members");
	} 
?>