<?php
	session_start();
	require_once('db_users.php');

	$username = isset($_POST['username']) ? $_POST['username'] : ''; //ako e setnata promenliva, vurni promenlivata, ako ne e vqrno, vurni prazno
	$password = isset($_POST['password']) ? $_POST['password'] : '';

	if (isset($user_data[$username]) && $user_data[$username] == $password) {
		$_SESSION['user'] = array('username' => $username,
									'password' => $password);
		header('Location: members-admin.php');
	} else {
		header('Location: members.php');
	}
?>