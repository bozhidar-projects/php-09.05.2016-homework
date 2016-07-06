<?php 
	include("header1.php");
	include("left-sidebar.php");
	include("members-list.php");
 ?>
<form class="add-form" action="add-member-service.php" method="post">
	<label for="firstname">Firstname:</label>
	<input id="firstname" type="text" name="Firstname"></input><br>
	<label for="lastname">Lastname:</label>
	<input id="lastname" type="text" name="Lastname"></input><br>
	<label for="image">Image:</label>
	<input id="image" type="file" name="Image"></input><br>
	<label for="university">University:</label>
	<input id="university" type="text" name="University"></input><br>
	<label for="phone">Phone:</label>
	<input id="phone" type="number" name="Phone"></input><br>
	<button type="submit">Add</button>

</form>
 <?php 
 	include("footer.php");
  ?>