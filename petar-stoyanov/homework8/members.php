<?php
	$a1 = '<li><a href="admin.php" target="_self">Admin page</a></li>';
	$a2 = '<li><a href="new-member.php" target="_self">New Member</a></li>';
	$a3 = '<li><a href="delete-member.php" target="_self">Delete Member</a></li>';
	$a4 = "";
	include("header.php");
	//if($user=admin) { //to be added later, when login functionality is added
	include("left-sidebar.php");
	//}
	require_once("db.php");
	echo "<div class='container'>";
	foreach ($member_array as $v) {
		echo "<div class='members'>";
		//echo "<img class='members-pic' src='img/".$v['image']."' alt='".$v['fname']."-logo'>";
		echo "<img class='members-pic' src='img/icon.png' alt='".$v['fname']."-logo'>";
		echo "<h3>".$v['fname']." ";
		echo $v['lname']."</h3>";
		echo "University of ".$v['school']."<br>";
		echo "Mobile: ".$v['GSM'];
		echo "</div>";
	}
	echo "</div>";
	include("footer.php");
?>