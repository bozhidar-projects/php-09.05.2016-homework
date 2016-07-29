<?php
require_once("db.php");

	if (isset($_POST["username"]) &&
		isset($_POST["password"])) {
		add_user($_POST['username'],$_POST['password'],$_POST['ID']);

		// $users_data = get_users();
		// $users = $users_data["data"];
		// $column_names2 = $users_data["columns"];

		header("Location: home.php?page=users");
	}

?>