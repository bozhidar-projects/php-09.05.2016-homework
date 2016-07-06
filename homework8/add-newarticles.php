<?php 
	include("header.php");
	include("left-sidebar.php");
	include("content.php");
 ?>
<form class="add-form" action="add-newarticles-services.php" method="post">
	<label for="title">Title:</label>
	<input id="title" type="text" name="Title"></input><br>
	<label for="author">Author:</label>
	<input id="author" type="text" name="Author"></input><br>
	<label for="date">Date:</label>
	<input id="date" type="date" name="Date"></input><br>
	<label for="content">Content:</label>
	<textarea id="content" name="content"></textarea><br>
	<label for="additional-information">Additional-information:</label>
	<textarea id="additional-information" name="additional-information"></textarea>
	<button type="submit">Add</button>
</form>
 <?php 
 	include("footer.php");
  ?>