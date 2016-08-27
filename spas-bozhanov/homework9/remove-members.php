<?php
	require_once("db_members.php");

	if (isset($_POST["ID"])) {
		$value = $_POST["ID"];
		if ($value > 0 && $value < count($members)) {
			$new_members = array();
			for ($i = 0; $i < count($members); $i++) {
				if ($i != $value) {
					array_push($new_members, $members[$i]);
				}
			}

			$file = fopen("database-members.csv", "w");
			fwrite($file, $column_string);

			for ($i=0; $i < count($new_members)-1; $i++) { 
				$member_csv = implode(",", $new_members[$i]);
				$member_csv .= "\n";
				fwrite($file, $member_csv);
			}

			$member_csv = implode(",", $new_members[$i]);
			fwrite($file, $member_csv);
			fclose($file);

			header("Location: members-admin.php");
		}	
	}
?>