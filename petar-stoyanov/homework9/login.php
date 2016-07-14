<?php
include("header.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
</head>
<body>
<form method="POST" action="#">
	<fieldset>
		<legend>Login:</legend>
		<label for="user">Username:</label>
		<input id="user" type="text" name="user"><br>
		<label for="pass">Password:</label>
		<input id="pass" type="password" name="pass"><br>
		<button type="subtmit">Login</button>
	</fieldset>
</form>

<?php
	session_start();
	require_once("db.php");
	if(isset($_SESSION['user']) || isset($_SESSION['admin'])) {
		header("Location: admin.php");
	}
	//Bobby, the password for the "Admin" user is "admin313", the Guest - "1234". Decided to learn to use password encryption.
	//Decided to use simplified passwrds, because I can forget them as well, and prefer not to use the ones I remember :)

	function user_validation($username, $password, $users) {
		global $group;
		foreach($users as $user) {
			if ($user['Username'] == $username && password_verify($password,$user['Password'])) {
				if($user['Group'] == "admins") {
					$group = "admin";
				} elseif($user['group'] == "users") {
					$group = "user";
				}
				return true;
			}
		}
		return false;
	}

	if(!empty($_POST)) {
		$user = $_POST['user'];
		$pass = $_POST['pass'];
		if(user_validation($user,$pass,$users)) {
			$_SESSION[$group] = array("username" => $user, "password" => password_hash($pass));
			header("Location: admin.php");
		} else {
			echo "<div class='conteiner'><div class='member'><b><font color='red'>Incorrect user/pass</font></b></div></div>";
		}
	}
?>
</body>
</html>
<?php
include("footer.php");
?>