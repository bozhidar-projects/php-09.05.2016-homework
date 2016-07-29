<?php
	session_start();
	include("auth.php"); 
	include("header.php");
	$a1 = '<li><a href="admin.php" target="_self">Admin page</a></li>';
	$a2 = '<li><a href="new-article.php" target="_self">New Article</a></li>';
	$a3 = '<li><a href="delete-article.php" target="_self">Delete Article</a></li>';
	$a4 = '<li><a href="logout.php" target="_self">Logout</a></li>';
	include("left-sidebar.php");
	require_once("db.php"); ?>
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
	$string = array($_POST['title'], $_POST['author'], $_POST['date'], $_POST['content']);
	$aside_string = array($_POST['aside-title'], $_POST['e1'], $_POST['e2'], $_POST['e3'], $_POST['e4']);
	$new_article = array("Title" => $_POST['title'],"Author" => $_POST['author'], "Date" => $_POST['date'], "Content" => $_POST['content']);
	$new_article['aside'] = array("Title" => $_POST['aside-title'], "e1" => $_POST['e1'], "e2" => $_POST['e2'], "e3" => $_POST['e3'], "e4" => $_POST['e4']);

	switch ($_POST['section']) {
		case 'travelling':
			array_push($travelling_array, $new_article);
			$text_string = implode(",,", $string);
			$string_aside = implode(",,", $aside_string);
			$file = fopen("./content/travel_content.csv", "a");
			$aside = fopen("./content/travel_aside.csv", "a");
			fwrite($file, "\n".$text_string);
			fwrite($aside, "\n".$string_aside);
			fclose($file);
			fclose($aside);
			break;
		case 'sport':
			array_push($sport_array, $new_article);
			$text_string = implode(",,", $string);
			$string_aside = implode(",,", $aside_string);
			$file = fopen("./content/sport_content.csv", "a");
			$aside = fopen("./content/sport_aside.csv", "a");
			fwrite($file, "\n".$text_string);
			fwrite($aside, "\n".$string_aside);
			fclose($file);
			fclose($aside);
			break;
		case 'makeup':
			array_push($makeup_array, $new_article);
			$text_string = implode(",,", $string);
			$string_aside = implode(",,", $aside_string);
			$file = fopen("./content/makeup_content.csv", "a");
			$aside = fopen("./content/makeup_aside.csv", "a");
			fwrite($file, "\n".$text_string);
			fwrite($aside, "\n".$string_aside);
			fclose($file);
			fclose($aside);
			break;
		case 'technology':
			array_push($technology_array, $new_article);
			$text_string = implode(",,", $string);
			$string_aside = implode(",,", $aside_string);
			$file = fopen("./content/technology_content.csv", "a");
			$aside = fopen("./content/technology_aside.csv", "a");
			fwrite($file, "\n".$text_string);
			fwrite($aside, "\n".$string_aside);
			fclose($file);
			fclose($aside);
			break;
		default:			
			break;
	}
	header("Location: articles.php");
}



	include("footer.php");
?>