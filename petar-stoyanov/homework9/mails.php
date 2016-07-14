<?php
	session_start();
	include("auth.php");
	$a1 = '<li><a href="admin.php" target="_self">Admin Page</a></li>';
	$a2 = '<li><a href="mails.php" target="_self">List Messages</a></li>';
	$a3 = '<li><a href="logout.php" target="_self">Logout</a></li>';
	$a4 = '';
	if(isset($_SESSION['admin'])) {
	$a3 = '<li><a href="delete-mail.php" target="_self">Delete Message</a></li>';
	$a4 = '<li><a href="logout.php" target="_self">Logout</a></li>';
	}
	include("header.php");
	include("left-sidebar.php");
	require_once("functions.php");
	display_content($email_array);
	include("footer.php");	
?>