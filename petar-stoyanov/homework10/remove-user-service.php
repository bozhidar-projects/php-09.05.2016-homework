<?php
	require_once("db.php");

	if (isset($_POST["ID"])) {
		$value = $_POST["ID"];
		if ($value >= 0) {
			unset($users[$value]);
			delete_user_by_id($value);
		}

		header("Location: home.php?page=users");
	}
?>