<?php
	session_start();
	include("auth.php");
	require_once("functions.php");
	$a1 = '<li><a href="admin.php" target="_self">Admin page</a></li>';
	$a2 = '<li><a href="new-member.php" target="_self">New Member</a></li>';
	$a3 = '<li><a href="logout.php" target="_self">Logout</a></li>';
	$a4 = '';
	if(isset($_SESSION['admin'])) {
		$a3 = '<li><a href="delete-member.php" target="_self">Delete Member</a></li>';
		$a4 = '<li><a href="logout.php" target="_self">Logout</a></li>';
	}
	include("header.php");
	include("left-sidebar.php");

	new_entry_form("New Member","./content/members.csv",$action="");
	if(!empty($_POST)) {
		new_entry("./content/members.csv",$_POST,$member_array,"members.php");
	}

include("footer.php");
?>