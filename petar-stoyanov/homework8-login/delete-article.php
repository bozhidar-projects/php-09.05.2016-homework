<?php
session_start();
include("auth.php");
if(!isset($_SESSION['admin'])) {
	header("Location: articles.php");
}
$a1 = '<li><a href="admin.php" target="_self">Admin page</a></li>';
$a2 = '<li><a href="new-article.php" target="_self">New Article</a></li>';
$a3 = '<li><a href="delete-article.php" target="_self">Delete Article</a></li>';
$a4 = '<li><a href="logout.php" target="_self">Logout</a></li>';
include("header.php");
include("left-sidebar.php");
require_once("db.php");
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

<div class='container'>
	<fieldset class='article-short'>
		<legend>Traveling</legend>
		<?php
			$i=0;
			foreach ($travelling_array as $v) {
			echo "<div class='article-short'>";
			echo "Number: ".$i++;
			echo "<h3>".$v['Title']."</h3>";
			echo "Author: ".$v['Author'];
			echo "<details>";
			echo "<summary>Details</summary>";
			echo "<b>Author: </b>".$v['Author']."<br>".$v['Content'];
			echo "</details>";			
			echo "</div>";
			}
		?>
	</fieldset>

	<fieldset class='article-short'>
		<legend>Sport</legend>
		<?php
			$i=0;
			foreach ($sport_array as $v) {
			echo "<div class='article-short'>";
			echo "Number: ".$i++;
			echo "<h3>".$v['Title']."</h3>";
			echo "Author: ".$v['Author'];
			echo "<details>";
			echo "<summary>Details</summary>";
			echo "<b>Author: </b>".$v['Author']."<br>".$v['Content'];
			echo "</details>";			
			echo "</div>";
			}
		?>
	</fieldset>

	<fieldset class='article-short'>
		<legend>Makeup</legend>
		<?php
			$i=0;
			foreach ($makeup_array as $v) {
			echo "<div class='article-short'>";
			echo "Number: ".$i++;
			echo "<h3>".$v['Title']."</h3>";
			echo "Author: ".$v['Author'];
			echo "<details>";
			echo "<summary>Details</summary>";
			echo "<b>Author: </b>".$v['Author']."<br>".$v['Content'];
			echo "</details>";			
			echo "</div>";
			}
		?>
	</fieldset>

	<fieldset class='article-short'>
		<legend>Technology</legend>
		<?php
			$i=0;
			foreach ($technology_array as $v) {
			echo "<div class='article-short'>";
			echo "Number: ".$i++;
			echo "<h3>".$v['Title']."</h3>";
			echo "Author: ".$v['Author'];
			echo "<details>";
			echo "<summary>Details</summary>";
			echo "<small>".$v['Content']."</small>";
			echo "</details>";			
			echo "</div>";
			}
		?>
	</fieldset>
</div>
<?php
if (isset($_POST['number']) && isset($_POST['section'])) {
	$section = $_POST['section'];
	switch ($section) {
		//travelling section
		case 'travelling':
			$value = $_POST['number'];
			//remove from content file
			if ($value >= 0 && $value < count($travelling_array)) {
				$new_array = array();
				for ($i=0; $i<count($travelling_array); $i++) {
					if($value != $i) {
						array_push($new_array, $travelling_array[$i]);						
					}
				}
				$travelling_array = $new_array;
				$file = fopen("./content/travel_content.csv", "w");
				fwrite($file, implode(",,", $travel_names)."\n");
				for($i=0;$i<count($new_array)-1;$i++) {
					unset($new_array[$i]['aside']);
					$csv_string = implode(",,", $new_array[$i]);
					$csv_string .= "\n";
					fwrite($file, $csv_string);
				}
				unset($new_array[$i]['aside']);
				$csv_string = implode(",,", $new_array[$i]);
				fwrite($file, $csv_string);
				fclose($file);
			}
			//removve from aside file
			if ($value >= 0 && $value < count($travel_aside)) {
				$new_array = array();
				for ($i=0; $i<count($travel_aside); $i++) {
					if($value != $i) {
						array_push($new_array, $travel_aside[$i]);						
					}
				}
				$travel_aside = $new_array;
				$file = fopen("./content/travel_aside.csv", "w");
				fwrite($file, implode(",,", $taside_names)."\n");
				for($i=0;$i<count($new_array)-1;$i++) {
					$csv_string = implode(",,", $new_array[$i]);
					$csv_string .= "\n";
					fwrite($file, $csv_string);
				}
				$csv_string = implode(",,", $new_array[$i]);
				fwrite($file, $csv_string);
				fclose($file);
				header("Location: admin.php");
			}
			
			break;
		//sports section
		case 'sport':
			$value = $_POST['number'];
			//remove from content file
			if ($value >= 0 && $value < count($sport_array)) {
				$new_array = array();
				for ($i=0; $i<count($sport_array); $i++) {
					if($value != $i) {
						array_push($new_array, $sport_array[$i]);						
					}
				}
				$file = fopen("./content/sport_content.csv", "w");
				fwrite($file, implode(",,", $sport_names)."\n");
				for($i=0;$i<count($new_array)-1;$i++) {
					unset($new_array[$i]['aside']);
					$csv_string = implode(",,", $new_array[$i]);
					$csv_string .= "\n";
					fwrite($file, $csv_string);
				}
				unset($new_array[$i]['aside']);
				$csv_string = implode(",,", $new_array[$i]);
				fwrite($file, $csv_string);
				fclose($file);
			}
			//remove from aside file
			if ($value >= 0 && $value < count($travel_aside)) {
				$new_array = array();
				for ($i=0; $i<count($travel_aside); $i++) {
					if($value != $i) {
						array_push($new_array, $travel_aside[$i]);						
					}
				}
				$file = fopen("./content/sport_aside.csv", "w");
				fwrite($file, implode(",,", $saside_names)."\n");
				for($i=0;$i<count($new_array)-1;$i++) {
					$csv_string = implode(",,", $new_array[$i]);
					$csv_string .= "\n";
					fwrite($file, $csv_string);
				}
				$csv_string = implode(",,", $new_array[$i]);
				fwrite($file, $csv_string);
				fclose($file);
				header("Location: articles.php");
			}
			break;
		//makeup section
		case 'makeup':
			$value = $_POST['number'];
			//remove from content file
			if ($value >= 0 && $value < count($makeup_array)) {
				$new_array = array();
				for ($i=0; $i<count($makeup_array); $i++) {
					if($value != $i) {
						array_push($new_array, $makeup_array[$i]);						
					}
				}
				$file = fopen("./content/makeup_content.csv", "w");
				fwrite($file, implode(",,", $makeup_names)."\n");
				for($i=0;$i<count($new_array)-1;$i++) {
					unset($new_array[$i]['aside']);
					$csv_string = implode(",,", $new_array[$i]);
					$csv_string .= "\n";
					fwrite($file, $csv_string);
				}
				unset($new_array[$i]['aside']);
				$csv_string = implode(",,", $new_array[$i]);
				fwrite($file, $csv_string);
				fclose($file);
			}
			//remove from aside file
			if ($value >= 0 && $value < count($makeup_aside)) {
				$new_array = array();
				for ($i=0; $i<count($makeup_aside); $i++) {
					if($value != $i) {
						array_push($new_array, $makeup_aside[$i]);						
					}
				}
				$file = fopen("./content/makeup_aside.csv", "w");
				fwrite($file, implode(",,", $maside_names)."\n");
				for($i=0;$i<count($new_array)-1;$i++) {
					$csv_string = implode(",,", $new_array[$i]);
					$csv_string .= "\n";
					fwrite($file, $csv_string);
				}
				$csv_string = implode(",,", $new_array[$i]);
				fwrite($file, $csv_string);
				fclose($file);
				header("Location: articles.php");
			}
			break;
		//technology section
		case 'technology':
			$value = $_POST['number'];
			//remove from content file
			if ($value >= 0 && $value < count($technology_array)) {
				$new_array = array();
				for ($i=0; $i<count($technology_array); $i++) {
					if($value != $i) {
						array_push($new_array, $technology_array[$i]);						
					}
				}
				$file = fopen("./content/technology_content.csv", "w");
				fwrite($file, implode(",,", $technology_names)."\n");
				for($i=0;$i<count($new_array)-1;$i++) {
					unset($new_array[$i]['aside']);
					$csv_string = implode(",,", $new_array[$i]);
					$csv_string .= "\n";
					fwrite($file, $csv_string);
				}
				unset($new_array[$i]['aside']);
				$csv_string = implode(",,", $new_array[$i]);
				fwrite($file, $csv_string);
				fclose($file);
			}
			//remove from aside file
			if ($value >= 0 && $value < count($technology_aside)) {
				$new_array = array();
				for ($i=0; $i<count($technology_aside); $i++) {
					if($value != $i) {
						array_push($new_array, $technology_aside[$i]);						
					}
				}
				$file = fopen("./content/technology_aside.csv", "w");
				fwrite($file, implode(",,", $teaside_names)."\n");
				for($i=0;$i<count($new_array)-1;$i++) {
					$csv_string = implode(",,", $new_array[$i]);
					$csv_string .= "\n";
					fwrite($file, $csv_string);
				}
				$csv_string = implode(",,", $new_array[$i]);
				fwrite($file, $csv_string);
				fclose($file);
				header("Location: articles.php");
			}
			break;
		default:
			break;
		}
	}




include("footer.php");
?>