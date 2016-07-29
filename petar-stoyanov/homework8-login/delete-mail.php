<?php
	session_start();
	include("auth.php");
	if(!isset($_SESSION['admin'])) {
	header("Location: mails.php");
	}
	$a1 = '<li><a href="admin.php" target="_self">Admin Page</a></li>';
	$a2 = '<li><a href="mails.php" target="_self">List Messages</a></li>';
	$a3 = '<li><a href="delete-mail.php" target="_self">Delete Message</a></li>';
	$a4 = '<li><a href="logout.php" target="_self">Logout</a></li>';
	include("header.php");
	include("left-sidebar.php");
	require_once("db.php");
?>
<div class="container">
<form method="post" action="#">
	<fieldset>
		<legend>Delete Message</legend>
			<label for="number">Number</label>
			<input id="number" type="number" name="number"><br>
			<button type="submit">Submit</button>
	</fieldset>
	</form>
	</div>
<?php
	echo "<div class='container'>";
	$i=0;
	foreach ($email_array as $v) {
		echo "<div class='members'>";
		echo "<b>Number:</b> [".$i++."]<br>";
		echo "<b>From: </b>".$v['from']."<br>";
		echo "<b>To: </b>".$v['to']."<br>";
		echo "Message: <br>";
		
		echo $v['message']."<br>";
		echo "</div>";
	}
	echo "</div>";

	if (isset($_POST['number'])) {
		$new_array = array();
		$value = $_POST['number'];
		for ($i=0; $i < count($email_array); $i++) { 
			if($i != $value) {
				array_push($new_array, $email_array[$i]);
			}
		}
		$email_array = $new_array;
		$file = fopen("./content/mails.csv", "w");
		fwrite($file, implode(",,", $email_indexes)."\n");
		for($i=0;$i<count($new_array)-1; $i++) {
			$csv_string = implode(",,", $new_array[$i])."\n";
			fwrite($file, $csv_string);
		}
		$csv_string = implode(",,", $new_array[$i]);
		fwrite($file, $csv_string);
		fclose($file);
		header("Location: mails.php");
	}




	include("footer.php");
?>