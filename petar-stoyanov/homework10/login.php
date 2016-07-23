<?php
	session_start();
	require_once("db.php");
	
	$username = isset($_POST["username"]) ? $_POST["username"]: '';
	$password = isset($_POST["password"]) ? $_POST["password"]: ''; 

	function is_valid_user($username, $password, $users) {
		foreach ($users as $user) {
			if ($user['username'] == $username && $user['password'] == $password) {
				return true;
			}
		}

		return false;
	}

	if (is_valid_user($username, $password, $users)) {
		$_SESSION['user'] = array(
				'username' => $username,
				'password' => $password
			);
		header("Location: home.php");
	} else {
		header("Location: index.php");
	}
?>