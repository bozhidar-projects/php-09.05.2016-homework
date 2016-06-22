<?php
	include("header.php");
	include("db.php");
	echo "<div class='container'>";
	foreach ($members as $v) {
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