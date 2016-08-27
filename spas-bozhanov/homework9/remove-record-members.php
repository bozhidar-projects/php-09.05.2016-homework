<?php
	session_start();

	if (!isset($_SESSION['user'])) {
		header("Location: members.php");
	}

	include("db_members.php");
	include("header.php");
	include("left-sidebar-members-admin.php");
	include("content-members.php");
?>	
<form action="remove-members.php" method="post">
	<label for="record-id">Remove member with ID:</label>
	<input id="record-id" type="number" name="ID">
	<button type="submit">Remove</button>
</form>
<?php
	include("footer.php");
?>