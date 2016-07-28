<?php
	session_start();
	include("auth.php"); 
	include("header.php");
	$a1 = '<li><a href="admin.php" target="_self">Admin page</a></li>';
	$a2 = '<li><a href="new-article.php" target="_self">New Article</a></li>';
	$a3 = '<li><a href="logout.php" target="_self">Logout</a></li>';
	$a4 = '';
	if($_SESSION['user']['group'] == "admins") {
		$a3 = '<li><a href="delete-article.php" target="_self">Delete Article</a></li>';
		$a4 = '<li><a href="logout.php" target="_self">Logout</a></li>';
	}
	$a5 = '';
	include("left-sidebar.php");
	require_once("functions.php"); ?>
<div class="container">
<form method="post">
	<fieldset>
		<legend>New article</legend>
		<div class='form'>
			<label for="title">Title</label>
			<input id="title" type="text" name="title"><br><br>
			<label for="section">Section</label>
			<select id="section" name="section">
				<option value="travelling">Travelling</option>
				<option value="sport">Sports</option>
				<option value="makeup">Make-Up</option>
				<option value="technology">Technology</option>
			</select><br>
			<label for="author">Author</label>
			<input id="author" type="text" name="author"><br>
			<label for="date">Date:</label>
			<input id="date" type="date" name="date"><br>
			<label for="content">Article</label>
			<textarea id="content" name="content" rows="8" cols="100"></textarea><br><br>
			<button type="submit">Submit</button>
		</div>
	</fieldset>
	<fieldset>
		<legend>Side information</legend>
		<div class='form'>
			<label for="aside-title">Title</label>
			<input id="aside-title" type="text" name="aside-title"><br><br>
			<label for="e1">First field</label>
			<input id="e1" type="text" name="e1"><br>
			<label for="e2">Second field</label>
			<input id="e2" type="text" name="e2"><br>
			<label for="e3">Third field</label>
			<input id="e3" type="text" name="e3"><br>
			<label for="e4">Fourth field</label>
			<input id="e4" type="text" name="e4"><br>
		</div>
	</fieldset>
</form>
</div>
<?php
if(isset($_POST['title']) &&
	isset($_POST['author']) &&
	isset($_POST['date']) &&
	isset($_POST['content']) &&
	isset($_POST['section']) &&
	isset($_POST['aside-title']) &&
	isset($_POST['e1']) &&
	isset($_POST['e2']) &&
	isset($_POST['e3']) &&
	isset($_POST['e4'])) {

	new_article($_POST);
}
	include("footer.php");
?>