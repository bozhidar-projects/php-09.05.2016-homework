<?php
	session_start();

	if (!isset($_SESSION['user'])) {
		header("Location: index.php");
	}
	
	include("db_travelling.php");
	include("header.php");
	include("left-sidebar-admin.php");
?>
<form class="add-travelling" action="add-travelling.php" method="post">
	<label for="title">Title:</label>
	<input id="title" type="text" name="title"><br>
	<label for="id">ID:</label>
	<input id="id" type="number" name="id"><br>
	<label for="author">Author:</label>
	<input id="author" type="text" name="author"><br>
	<label for="date">Date:</label>
	<input id="date" type="date" name="date"><br>
	<label for="content">Insert text:</label>
	<textarea id="content" rows="4" cols="50" name="main-article"></textarea><br>
	<label for="additional-information">Insert additional information:</label>
	<textarea id="additional-information" rows="4" cols="50" name="additional-information"></textarea><br>
	
	<button type="submit">Add</button>
</form>
<?php
	include("footer.php");
?>