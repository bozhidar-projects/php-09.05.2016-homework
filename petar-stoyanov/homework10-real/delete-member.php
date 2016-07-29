<?php
	session_start();
	include("auth.php");
	if($_SESSION['user']['group'] != "admins") {
		header("Location: members.php");
	}
	$a1 = '<li><a href="admin.php" target="_self">Admin page</a></li>';
	$a2 = '<li><a href="new-member.php" target="_self">New Member</a></li>';
	$a3 = '<li><a href="delete-member.php" target="_self">Delete Member</a></li>';
	$a4 = '<li><a href="logout.php" target="_self">Logout</a></li>';
	$a5 = '';
	include("header.php");
	include("left-sidebar.php");
	require_once("functions.php");

	delete_entry_form("Delete Member",$action="#");
	display_content($member_array,1);
	include("footer.php");

	if(!empty($_POST)) {
		delete_from_database("Members",$_POST['ID']);
	}
?>