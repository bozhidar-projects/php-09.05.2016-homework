<?php
	session_start();
	include("auth.php");	
	$a1 = '<li><a href="admin.php" target="_self">Admin page</a></li>';
	$a2 = '<li><a href="new-article.php" target="_self">New Article</a></li>';
	$a3 = '<li><a href="logout.php" target="_self">Logout</a></li>';
	$a4 = '';
	if($_SESSION['user']['group'] == "admins") {
	$a3 = '<li><a href="delete-article.php" target="_self">Delete Article</a></li>';
	$a4 = '<li><a href="logout.php" target="_self">Logout</a></li>';
	}
	$a5 = '';
	include("header.php");
	include("left-sidebar.php");
	require_once("functions.php");
	?>
<div class='container'>
	<?php
		display_delete_article("Traveling",$travelling_array);
		display_delete_article("Sport",$sport_array);
		display_delete_article("Makeup",$makeup_array);
		display_delete_article("Technology",$technology_array);
	?>
</div>
<?php
include("footer.php");
?>