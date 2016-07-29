<?php 
	require_once("authentication.php");
	require_once("db.php");
	require_once("functions.php"); 
?>
<!DOCTYPE html>
<html>
<head>
	<title>Working With Files</title>
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
<header>
	<span>Logged as <span><?php echo $_SESSION['user']['username']?></span></span>
	<form id="logout-form" action="logout.php" method="post"><button type="submit">Logout</button></form>
</header>