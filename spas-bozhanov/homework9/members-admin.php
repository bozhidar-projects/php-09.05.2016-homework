<?php
	session_start();

	if (!isset($_SESSION['user'])) {
		header("Location: members.php");
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>User home</title>
</head>
<body>
	<p>Hello, <?php echo $_SESSION['user']['username']?></p>
	<form method="post" action="logout.php">
		<button type="submit">Logout</button>
	</form>

<?php
	include("db_members.php");
	include("header.php");
	include("left-sidebar-members-admin.php");
	include("content-members.php");
	include("footer.php");
?>