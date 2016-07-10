<?php
	include("db_travelling.php");
	include("header.php");
	include("left-sidebar.php");
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