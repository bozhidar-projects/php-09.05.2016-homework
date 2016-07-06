<?php 
	include("header.php");
	include("left-sidebar.php");
	include("content.php");
 ?>
 <form action="remove-articles-services.php" method="post">
 	<label for="articles-id">Articles ID:</label>
 	<input id="articles-id" type="number" name="ID">
 	<button type="submit">Remove</button>
 </form>
 <?php 
 	include("footer.php");
  ?>