<?php 
	require_once('db.php');
	require_once('functions.php');
	display_article("Travelling", $travelling_array, "travelling-section");
	display_article("Sports", $sport_array, "sport-section");
	display_article("Make Up", $makeup_array, "makeup-section");
	display_article("Technology", $technology_array, "technology-section");
?>