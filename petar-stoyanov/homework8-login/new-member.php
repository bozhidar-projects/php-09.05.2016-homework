<?php
	session_start();
	include("auth.php");
	$a1 = '<li><a href="admin.php" target="_self">Admin page</a></li>';
	$a2 = '<li><a href="new-member.php" target="_self">New Member</a></li>';
	$a3 = '<li><a href="delete-member.php" target="_self">Delete Member</a></li>';
	$a4 = '<li><a href="logout.php" target="_self">Logout</a></li>';
	include("header.php");
	//if($user=admin) { //to be added later, when login functionality is added
	include("left-sidebar.php");
	//}
	require_once("db.php");
?>
<div class="container">
<form method="post">
	<fieldset>
		<legend>New member</legend>
		<div class='form'>
			<label for="fname">First Name</label>
			<input id="fname" type="text" name="fname"><br>
			<label for="lname">Last Name</label>
			<input id="lname" type="text" name="lname"><br>
			<label for="phone">Phone Number</label>
			<input id="phone" type="text" name="phone"><br>
			<label for="school">University</label>
			<input id="school" type="text" name="school"><br>
			<label for="image">Image URL</label>
			<input id="image" type="text" name="image"><br>
			<button type="submit">Submit</button>
		</div>
	</fieldset>
</form>
</div>
<?php
	//fname,,lname,,GSM,,school,,image
	if(isset($_POST['fname']) &&
		isset($_POST['lname']) &&
		isset($_POST['image']) &&
		isset($_POST['phone']) &&
		isset($_POST['school'])) {
		$member_string = array($_POST['fname'], $_POST['lname'], $_POST['phone'], $_POST['school'], $_POST['image']);
		$new_member = array("fname" => $_POST['fname'], "lname" => $_POST['lname'], "phone" => $_POST['phone'], "school" => $_POST['school'], "image" => $_POST['image']);
		array_push($member_array, $new_member);
		$string = implode(",,", $member_string);
		$file = fopen("./content/members.csv", "a");
		fwrite($file, "\n".$string);
		fclose($file);
		header("Location: members.php");
	}

include("footer.php");
?>