<?php 
	include("header1.php");
	include("left-sidebar.php");
	include("members-list.php");
 ?>
 <form action="remove-member-service.php" method="post">
 	<label for="record-id">Member ID:</label>
 	<input id="record-id" type="number" name="ID">
 	<button type="submit">Remove</button>
 </form>
 <?php 
 	include("footer.php");
  ?>