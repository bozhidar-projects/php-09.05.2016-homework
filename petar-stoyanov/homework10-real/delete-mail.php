<?php
	session_start();
	include("auth.php");
	if($_SESSION['user']['group'] != "admins") {
		header("Location: mails.php");
	}
	$a1 = '<li><a href="admin.php" target="_self">Admin Page</a></li>';
	$a2 = '<li><a href="mails.php" target="_self">List Messages</a></li>';
	$a3 = '<li><a href="delete-mail.php" target="_self">Delete Message</a></li>';
	$a4 = '<li><a href="logout.php" target="_self">Logout</a></li>';
	$a5 = '';
	include("header.php");
	include("left-sidebar.php");
	require_once("functions.php");

	delete_entry_form("Delete Message",$action="#");
	display_content($email_array,1);

	if(!empty($_POST)) {
		$id = $_POST['ID'];
		delete_from_database("Mails",$id);
	}
	include("footer.php");
?>