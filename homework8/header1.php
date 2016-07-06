<?php 
	require_once("db1.php");
 ?>
<!DOCTYPE html>
<html>
	<head>
			<title>PHP Master's Blog</title>
		<link rel="stylesheet" type="text/css" href="index.css/main.css">
		<style type="text/css">
			#body{
				background-image: url("image.jpg");
				background-repeat: no-repeat;
				background-attachment: fixed;
				background-size: 90em;
			}
			.add-form>label {
							display:inline-block;
							width: 150px;
							margin: 5px;
							}
		</style>
	</head>

	<body id="body" style="font-size: 100%">
		<header id="site-header">
			<img id="logo" src="logo.gif" alt="team-logo">
			<h1 id="main-heading">PHP Master's Blog</h1>
			<nav id="top-navigation">
				<a href="index.php">Index</a>
				<a href="members.php">Team Members</a>
				<a href="contacts.php">Contact Us</a>
			</nav>
		</header>