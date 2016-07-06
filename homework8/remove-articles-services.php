<?php 
	require_once("db.php");

	if (isset($_POST['ID'])) {
		$value1 = $_POST['ID'];
		if ($value1 >= 0 && $value1 < count($articles)) {
			$new_articles = array();
			for($j = 0; $j <count($articles); $j++){
				if($j != $value1){
					array_push($new_articles, $articles[$j]);
				}
			}
		}
		$file1 = fopen("database.csv","w");
		fwrite($file1,$columnn_string);

		for($j = 0; $j< count($new_articles)-1; $j++) {
			$articles_csv = implode(",", $new_articles[$j]);
			$articles_csv .= "\n";
			fwrite($file1, $articles_csv);
		}
		$articles_csv = implode(",", $new_articles[$j]);
		fwrite($file1, $articles_csv);
		fclose($file1);
		header("Location: index.php");
	}
 ?>