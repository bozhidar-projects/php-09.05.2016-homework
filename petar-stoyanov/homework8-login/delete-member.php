<?php
	session_start();
	include("auth.php");
	if(!isset($_SESSION['admin'])) {
		header("Location: members.php");
	}
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
<form method="post" action="#">
	<fieldset>
		<legend>Delete Member</legend>
			<label for="number">Number</label>
			<input id="number" type="number" name="number"><br>
			<button type="submit">Submit</button>
	</fieldset>
	</form>
	</div>
<?php
	$i=0;
	echo "<div class='container'>";
	foreach ($member_array as $v) {
		echo "<div class='members'>";
		//echo "<img class='members-pic' src='img/".$v['image']."' alt='".$v['fname']."-logo'>";
		echo "<b>Number:</b> [".$i++."]<br>";
		echo "<img class='members-pic' src='img/icon.png' alt='".$v['fname']."-logo'>";
		echo "<h3>".$v['fname']." ";
		echo $v['lname']."</h3>";
		echo "University of ".$v['school']."<br>";
		echo "Mobile: ".$v['GSM'];
		echo "</div>";
	}
	echo "</div>";
	include("footer.php");

	if(isset($_POST['number'])) {
		$new_array = array();
		$value = $_POST['number'];
		for ($i=0;$i<count($member_array);$i++) {
			if ($i!=$value) {
				array_push($new_array, $member_array[$i]);
			}
		}
		$file = fopen("./content/members.csv", "w");
		fwrite($file, implode(",,", $members_indexes)."\n");
		for ($i=0; $i < count($new_array)-1; $i++) { 
			$csv_string = implode(",,", $new_array[$i])."\n";
			fwrite($file, $csv_string);
		}
		$csv_string = implode(",,", $new_array[$i]);
		fwrite($file, $csv_string);
		fclose($file);
		header("Location: members.php");
	}
?>