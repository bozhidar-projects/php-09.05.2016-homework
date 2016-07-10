<?php
	require_once("db_sport.php");

	if (isset($_POST["ID"])) {
		$value = $_POST["ID"];
		if ($value > 0 && $value < count($ssection)) {
			$new_ssection = array();
			for ($i = 0; $i < count($ssection); $i++) {
				if ($i != $value) {
					array_push($new_ssection, $ssection[$i]);
				}
			}

			$file = fopen("database-sport.csv", "w");
			fwrite($file, $column_string);

			for ($i=0; $i < count($new_ssection)-1; $i++) { 
				$ssection_csv = implode(",,", $new_ssection[$i]);
				$ssection_csv .= "\n";
				fwrite($file, $ssection_csv);
			}

			$ssection_csv = implode(",,", $new_ssection[$i]);
			fwrite($file, $ssection_csv);
			fclose($file);

			header("Location: admin.php");
		}	
	}
?>