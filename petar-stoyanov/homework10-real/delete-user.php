<?php
	session_start();
	include("auth.php");
	if($_SESSION['user']['group'] != "admins") {
		header("Location: mails.php");
	}
	$a1 = '<li><a href="admin.php" target="_self">Admin page</a></li>';	
	$a2 = '<li><a href="logout.php" target="_self">Logout</a></li>';
	$a3 = '';
	$a4 = '';
	$a5 = '';
	if($_SESSION['user']['group'] == "admins") {
		$a2 = '<li><a href="new-user.php" target="_self">New User</a></li>';
		$a3 = '<li><a href="delete-user.php" target="_self">Delete User</a></li>';
		$a4 = '<li><a href="logout.php" target="_self">Logout</a></li>';
	}
	include("header.php");
	include("left-sidebar.php");
	require_once("functions.php");

	delete_entry_form("Delete User",$action="#");
	display_content($users_array,1);

	if(!empty($_POST)) {
		$id = $_POST['ID'];
		delete_from_database("Users",$id);
	}
	include("footer.php");
?>