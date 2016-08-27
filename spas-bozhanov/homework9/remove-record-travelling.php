<?php
	session_start();

	if (!isset($_SESSION['user'])) {
		header("Location: index.php");
	}
	
	include("db_travelling.php");
	include("header.php");
	include("left-sidebar-admin.php");
	include("content-travelling.php");
?>	
<form action="remove-travelling.php" method="post">
	<label for="record-id">Remove article with ID:</label>
	<input id="record-id" type="number" name="ID">
	<button type="submit">Remove</button>
</form>
<?php
	include("footer.php");
?>