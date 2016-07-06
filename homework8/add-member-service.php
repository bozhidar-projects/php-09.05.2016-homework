<?php 
	require_once("db1.php");

	if(isset($_POST["Firstname"])&&
		isset($_POST["Lastname"])&&
		isset($_POST["Image"])&&
		isset($_POST["University"])&&
		isset($_POST["Phone"])){
		$member = array('Firstname' => $_POST['Firstname'],
						'Lastname' => $_POST['Lastname'],
						'Image' => $_POST['Image'],
						'University' => $_POST['University'],
						'Phone' => $_POST['Phone']);
			
			array_push($members, $member);
			
			
				$csv_string = implode(",", $member);
				$file = fopen("database1.csv", "a");
				
				fwrite($file,"\n". $csv_string);
			
			fclose($file);
			header("Location: members.php");
	}
		
 ?>