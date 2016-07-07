<?php
	session_start();
	include("auth.php");
	$a1 = '<li><a href="admin.php" target="_self">Admin Page</a></li>';
	$a2 = '<li><a href="mails.php" target="_self">List Messages</a></li>';
	$a3 = '<li><a href="logout.php" target="_self">Logout</a></li>';
	$a4 = '';
	if(isset($_SESSION['admin'])) {
	$a3 = '<li><a href="delete-mail.php" target="_self">Delete Message</a></li>';
	$a4 = '<li><a href="logout.php" target="_self">Logout</a></li>';
	}
	include("header.php");
	include("left-sidebar.php");
	require_once("db.php");
	echo "<div class='container'>";
	foreach ($email_array as $v) {				
		echo "<div class='members'>";
		echo "<b>From: </b>".$v['from']."<br>";
		echo "<b>To: </b>".$v['to']."<br>";
		echo "Message: <br>";
		
		echo $v['message']."<br>";
		echo "</div>";
	}
	echo "</div>";
	unset($v);
	include("footer.php");

	if (isset($_POST['from']) &&
		isset($_POST['to']) &&
		isset($_POST['message'])) {
		
		$new_mail = array( 
			"from" => $_POST['from'],
			"to" => $_POST['to'],
			"message" => $_POST['message']);
		array_push($email_array, $new_mail);
		$text_string = implode(",,", $new_mail);
		$file = fopen("./content/mails.csv", "a");
		fwrite($file, "\n".$text_string);
		fclose($file);
		header("Location: mails.php");
	}
	
?>