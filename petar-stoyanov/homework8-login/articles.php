<?php
	session_start();
	include("auth.php");	
	$a1 = '<li><a href="admin.php" target="_self">Admin page</a></li>';
	$a2 = '<li><a href="new-article.php" target="_self">New Article</a></li>';
	$a3 = '<li><a href="logout.php" target="_self">Logout</a></li>';
	$a4 = '';
	if(isset($_SESSION['admin'])) {
	$a3 = '<li><a href="delete-article.php" target="_self">Delete Article</a></li>';
	$a4 = '<li><a href="logout.php" target="_self">Logout</a></li>';
	}
	include("header.php");
	include("left-sidebar.php");
	include("db.php");
	?>
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
include("footer.php");
?>