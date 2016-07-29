<?php
	session_start();
	include("header.php");
	require_once('functions.php');
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
	include("left-sidebar.php");
	display_content($users_array,0);
	include("footer.php")
?>