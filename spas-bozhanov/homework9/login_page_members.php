<?php
	include("db_members.php");
	include("header.php");
	include("left-sidebar-members.php");
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Login Page</title>
	</head>
	<body>
		<form id="login-form" method="post" action="login_members.php">
			<fieldset>
				<legend>Login</legend>
				<label for="username">Username:</label>
				<input id="username" type="text" name="username"><br>
				<label for="password">Password:</label>
				<input id="password" type="password" name="password"><br>
				<button type="submit">Login</button>
			</fieldset>
		</form>
	</body>
</html>