<?php
	session_start();
	include("auth.php");
	$a1 = '<li><a href="articles.php" target="_self">Articles</a></li>';
	$a2 = '<li><a href="mails.php" target="_self">Messages</a></li>';
	$a3 = '<li><a href="members.php" target="_self">Members</a></li>';
	$a4 = '<li><a href="logout.php" target="_self">Logout</a></li>';
	include("header.php");
	include("left-sidebar.php");
	include("content.php");
	include("footer.php");
?>