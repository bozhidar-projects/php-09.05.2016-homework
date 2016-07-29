<?php
include("header.php");
require_once("db.php");
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
//Bobby, the password for the admin user is "admin313", the Guest - "1234". Decided to learn to use password encryption.
//Decided to use simplified passwrds, because I can forget them as well, and prefer not to use the ones I remember :)
session_start();
	if(isset($_SESSION['user']) || isset($_SESSION['admin'])) {
		header("Location: admin.php");
	}
	if(isset($_POST['pass']) && isset($_POST['user'])) {
		$user = $_POST['user'];
		$pass = $_POST['pass'];
		$check = 0;
		foreach ($users as $v) {
			if(isset($v[$user])) {
				if(password_verify($pass,$v[$user])) {
					if($v['group']=="admins") {
						$_SESSION['admin'] = array('username' => $user, 'pass' => $pass);
					} elseif($v['group']=="users") {
						$_SESSION['user'] = array('username' => $user, 'pass' => $pass);
					}
					header("Location: admin.php");
				} else {
					$check++;
				}
			} else {
				$check++;
			}
		}
		if($check==count($users)) {
			echo "<div class='conteiner'><div class='member'>Incorrect user/pass</div></div>";
			header( "refresh:3;url=index.php" );
		}
	}
/* //old version, leaving it for reference
if (isset($_SESSION['user'])) {
	header("Location: admin.php");
}
if (isset($_POST['user']) && isset($_POST['pass'])) {
	$user = $_POST['user'];
	$pass = $_POST['pass'];
	if($user == "Admin" && $pass == "1234") {
		$_SESSION['user'] = array('username' => $user, 'pass' => $pass);
		header("Location: admin.php");
	} else {
		header("Location: index.php");
	}
} 
*/
?>
</body>
</html>
<?php
include("footer.php");
?>