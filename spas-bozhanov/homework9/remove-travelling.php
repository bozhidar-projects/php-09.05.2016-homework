<?php
	require_once("db_travelling.php");

	if (isset($_POST["ID"])) {
		$value = $_POST["ID"];
		if ($value > 0 && $value < count($tsection)) {
			$new_tsection = array();
			for ($i = 0; $i < count($tsection); $i++) {
				if ($i != $value) {
					array_push($new_tsection, $tsection[$i]);
				}
			}

			$file = fopen("database-travelling.csv", "w");
			fwrite($file, $column_string);

			for ($i=0; $i < count($new_tsection)-1; $i++) { 
				$tsection_csv = implode(",,", $new_tsection[$i]);
				$tsection_csv .= "\n";
				fwrite($file, $tsection_csv);
			}

			$tsection_csv = implode(",,", $new_tsection[$i]);
			fwrite($file, $tsection_csv);
			fclose($file);

			header("Location: admin.php");
		}	
	}
?>