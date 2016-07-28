<?php
	session_start();
	include("auth.php");
	require_once("functions.php");
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
	include("header.php");
	include("left-sidebar.php");
	
	echo '<div class="container">';
	echo '<form method="post" action="#">';
	echo '<fieldset>';
	echo '<legend>New User</legend>';
	echo '<div class="form">';		
	echo '<label for="user">Username</label>';
	echo '<input id="user" type="text" name="user"><br>';
	echo '<label for="pass">Password</label>';
	echo '<input id="pass" type="password" name="pass"><br>';
	echo '<label for="group">Group</label>';
	echo '<select id="group" name="group">';
	echo '<option value="admins">Admins</option>';
	echo '<option value="users">Users</option>';
	echo '</select><br>';
	echo '<button type="submit">Submit</button>';	
	echo '</div>';
	echo '</fieldset>';
	echo '</form>';
	echo '</div>';
	if(!empty($_POST)) {
		$array = array($_POST['user'],password_hash($_POST['pass'],PASSWORD_DEFAULT),$_POST['group']);
		new_article_entry("Users",$array);		
	}
include("footer.php");
?>