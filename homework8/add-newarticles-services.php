<?php 
	require_once("db.php");

	if(isset($_POST["Title"])&&
		isset($_POST["Author"])&&
		isset($_POST["Date"])&&
		isset($_POST["content"])&&
		isset($_POST["additional-information"])){
		$article = array('Title' => $_POST['Title'],
						'Author' => $_POST['Author'],
						'Date' => $_POST['Date'],
						'content' => $_POST['content'],
						'additional-information' => $_POST['additional-information']);
			
			array_push($articles, $article);
				$csv_string1 = implode(",", $article);
				$file1 = fopen("database.csv", "a");
				
				fwrite($file1,"\n". $csv_string1);
			
			fclose($file1);
			header("Location: index.php");
	}
		
 ?>