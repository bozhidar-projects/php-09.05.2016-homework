<?php
session_start();
include("auth.php");
if($_SESSION['user']['group'] != "admins") {
	header("Location: articles.php");
}
$a1 = '<li><a href="admin.php" target="_self">Admin page</a></li>';
$a2 = '<li><a href="new-article.php" target="_self">New Article</a></li>';
$a3 = '<li><a href="delete-article.php" target="_self">Delete Article</a></li>';
$a4 = '<li><a href="logout.php" target="_self">Logout</a></li>';
$a5 = '';
include("header.php");
include("left-sidebar.php");
require_once("functions.php");
?>
<div class="container">
<form method="post" action="#">
	<fieldset>
		<legend>Delete Article</legend>
			<label for="number">Number</label>
			<input id="number" type="number" name="number"><br>
			<label for="section">Section</label>
			<select id="section" name="section">
				<option value="travelling">Travelling</option>
				<option value="sport">Sports</option>
				<option value="makeup">Make-Up</option>
				<option value="technology">Technology</option>
			</select><br>
			<button type="submit">Submit</button>
	</fieldset>
	</form>
	</div>
<?php
echo "<div class='container'>";
	display_delete_article("Traveling",$travelling_array);
	display_delete_article("Sport",$sport_array);
	display_delete_article("Makeup",$makeup_array);
	display_delete_article("Technology",$technology_array);
echo "</div>";
?>
<?php
if (isset($_POST['number']) && isset($_POST['section'])) {
	delete_article($_POST);
}
include("footer.php");
?>