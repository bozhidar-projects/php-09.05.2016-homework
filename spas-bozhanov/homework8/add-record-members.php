<?php
	include("db_members.php");
	include("header.php");
	include("left-sidebar-members.php");
	include("content-members.php");
?>
<form class="add-members" action="add-members.php" method="post">
	<label for="firstname">First name:</label>
	<input id="firstname" type="text" name="Firstname"><br>
	<label for="lastname">Last name:</label>
	<input id="lastname" type="text" name="Lastname"><br>
	<label for="phone">Phone:</label>
	<input id="phone" type="text" name="Phone"><br>
	<label for="university">University:</label>
	<input id="university" type="text" name="University"><br>
	
	<button type="submit">Add</button>
</form>
<?php
	include("footer.php");
?>