<?php
	session_start();

	if (!isset($_SESSION['user'])) {
		header("Location: index.php");
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
	include("db_travelling.php");
	include("db_sport.php");
	include("db_makeup.php");
	include("header.php");
	include("left-sidebar-admin.php");
	include("content-travelling.php");
	include("section2.php");
	include("content-sport.php");
	include("section3.php");
	include("content-makeup.php");
	include("footer.php");
?>

</body>
</html>