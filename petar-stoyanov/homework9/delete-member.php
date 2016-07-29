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
	include("left-sidebar.php");
	require_once("functions.php");

	delete_entry_form("Delete Member",$action="#");
	display_content($member_array,1);
	include("footer.php");

	if(!empty($_POST)) {
		delete_entry("./content/members.csv", $member_array, $_POST['number'], "members.php");
	}
	// if(isset($_POST['number'])) {
	// 	$new_array = array();
	// 	$value = $_POST['number'];
	// 	for ($i=0;$i<count($member_array);$i++) {
	// 		if ($i!=$value) {
	// 			array_push($new_array, $member_array[$i]);
	// 		}
	// 	}
	// 	$file = fopen("./content/members.csv", "w");
	// 	fwrite($file, implode(",,", $members_indexes)."\n");
	// 	for ($i=0; $i < count($new_array)-1; $i++) { 
	// 		$csv_string = implode(",,", $new_array[$i])."\n";
	// 		fwrite($file, $csv_string);
	// 	}
	// 	$csv_string = implode(",,", $new_array[$i]);
	// 	fwrite($file, $csv_string);
	// 	fclose($file);
	// 	header("Location: members.php");
	// }
?>