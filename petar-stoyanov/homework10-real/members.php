<?php
	session_start();
	include("header.php");
	require_once('functions.php');
	$a1 = '<li><a href="admin.php" target="_self">Admin page</a></li>';
	$a2 = '<li><a href="new-member.php" target="_self">New Member</a></li>';
	$a3 = '<li><a href="logout.php" target="_self">Logout</a></li>';
	$a4 = '';
	$a5 = '';
	if(isset($_SESSION['user'])) {		
		if($_SESSION['user']['group'] == "admins") {
			$a3 = '<li><a href="delete-member.php" target="_self">Delete Member</a></li>';
			$a4 = '<li><a href="logout.php" target="_self">Logout</a></li>';
		}
		include("left-sidebar.php");
	}
	$a5 = '';	
	display_content($member_array,0);	
	include("footer.php");
?>