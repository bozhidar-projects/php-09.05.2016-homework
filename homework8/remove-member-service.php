<?php 
	require_once("db1.php");

	if (isset($_POST['ID'])) {
		$value = $_POST['ID'];
		if ($value >= 0 && $value < count($members)) {
			$new_members = array();
			for($i = 0; $i <count($members); $i++){
				if($i != $value){
					array_push($new_members, $members[$i]);
				}
			}
		}
		$file = fopen("database1.csv","w");
		fwrite($file,$column_string);

		for($i = 0; $i< count($new_members)-1; $i++) {
			$members_csv = implode(",", $new_members[$i]);
			$members_csv .= "\n";
			fwrite($file, $members_csv);
		}
		$members_csv = implode(",", $new_members[$i]);
		fwrite($file, $members_csv);
		fclose($file);
		header("Location: members.php");
	}
 ?>