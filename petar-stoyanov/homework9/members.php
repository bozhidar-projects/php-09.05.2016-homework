<?php
	session_start();

	require_once('functions.php');
	require_once("db.php");

	$a1 = '<li><a href="admin.php" target="_self">Admin page</a></li>';
	$a2 = '<li><a href="new-member.php" target="_self">New Member</a></li>';
	$a3 = '<li><a href="logout.php" target="_self">Logout</a></li>';
	$a4 = '';
	if(isset($_SESSION['admin'])) {
	$a3 = '<li><a href="delete-member.php" target="_self">Delete Member</a></li>';
	$a4 = '<li><a href="logout.php" target="_self">Logout</a></li>';
	}
	include("header.php");
	//added this, because this is shown in the main page as well.
	if(isset($_SESSION['user'])||isset($_SESSION['admin'])) {
		include("left-sidebar.php");
	}
	display_content($member_array,0);
	
	include("footer.php");
?>