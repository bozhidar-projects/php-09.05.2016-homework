<?php
	require_once("db_makeup.php");

	if (isset($_POST["ID"])) {
		$value = $_POST["ID"];
		if ($value > 0 && $value < count($msection)) {
			$new_msection = array();
			for ($i = 0; $i < count($msection); $i++) {
				if ($i != $value) {
					array_push($new_msection, $msection[$i]);
				}
			}

			$file = fopen("database-makeup.csv", "w");
			fwrite($file, $column_string);

			for ($i=0; $i < count($new_msection)-1; $i++) { 
				$msection_csv = implode(",,", $new_msection[$i]);
				$msection_csv .= "\n";
				fwrite($file, $msection_csv);
			}

			$msection_csv = implode(",,", $new_msection[$i]);
			fwrite($file, $msection_csv);
			fclose($file);

			header("Location: index.php");
		}	
	}
?>