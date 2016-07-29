<?php
	$server_name = "localhost";
	$username = "root";
	$password = "";
	$schema_name = "blog";

	$database_connection = new mysqli($server_name, $username, $password, $schema_name);

	if ($database_connection->connect_errno) {
		die("Connection to database failded " . $database_connection->connect_errno);
	}

	function execute_sql_query($sql,$check=0) {
		global $database_connection;
		$database_connection->query($sql);

		if ($database_connection->error) {
			die("Error in execution".$database_connection->error);
		}
		if ($check != 0) { // added this, because wanted to have the option of having output from the query
			$rez = $database_connection->query($sql);
			return $rez;
		}
	}

	function get_data_from_database($sql) {
		global $database_connection;

		$column_names = array();
		$database_result = $database_connection->query($sql);
		$fields = $database_result->fetch_fields();

		foreach ($fields as $value) {
			$column_name = $value->name;
			array_push($column_names, $column_name);	
		}

		$data = array();
		if ($database_result->num_rows > 0) {
			while ($row = $database_result->fetch_assoc()) {
				array_push($data, $row);
			}						
		}

		$result = array("columns" => $column_names,
						"data" => $data);
		return $result;
	}
	//Members' section
	function get_members() {
		$sql = "SELECT `Members`.`ID`, `Firstname`, `Lastname`, `Age`,
		`Universities`.`Name` as `University`, `Phone`
		FROM `Members`
		JOIN
		`Universities`
		ON `Members`.`University_ID` = `Universities`.`ID`";
		$result = get_data_from_database($sql);
		return $result;
	}

	function delete_member_by_id($id) {
		$sql = "DELETE FROM `Members` WHERE `ID` = ".$id;
		execute_sql_query($sql);
	}

	function add_member($firstname,$lastname,$age,$university,$phone,$id=NULL) {
		global $database_connection;

		$query_result = execute_sql_query("SELECT `ID` FROM `Universities` WHERE `Name` = '".$university."'",1);
		if ($query_result->num_rows > 0) {
			$uid = $query_result->fetch_assoc()['ID'];
		} else {
			$uni = "INSERT INTO `Universities` (`Name`) VALUES ('".$university."')";
			execute_sql_query($uni);
			$uid = $database_connection->insert_id;
		}		
		if ($id == NULL || $id == "" ) {
			$sql = "INSERT INTO `Members` (`Firstname`,`Lastname`,`Phone`,`University_ID`,Age) 
					VALUES ('".$firstname."','".$lastname."','".$phone."',".$uid.",".$age.")";
		} else {
			$sql = "INSERT INTO `Members` (`ID`,`Firstname`,`lastname`,`phone`,`university_id`,Age)
					VALUES (".$id.",'".$firstname."','".$lastname."','".$phone."',".$uid.",".$age.")";
		}
		execute_sql_query($sql);
	}	


	//Users section
	function get_users() {
		$sql = "SELECT * FROM `Users`";

		$result = get_data_from_database($sql);
		return $result;
	}
	
	function add_user($username,$password, $id = NULL) {
		if ($id == NULL || $id == "" ) {
			$sql = "INSERT INTO `Users` (`username`,`password`) 
					VALUES ('".$username."','".$password."')";
		} else {
			$sql = "INSERT INTO `Users` (`ID`,`username`,`password`) 
					VALUES (".$id.",'".$username."','".$password."')";
		}
		execute_sql_query($sql);
	}

	function delete_user_by_id($id) {
		$sql = "DELETE FROM `Users` WHERE `ID` = ".$id;
		execute_sql_query($sql);
	}


	///OLD

	function get_data($file_name) {
		$file = fopen($file_name, "r");
		$data = array();

		$column_string = trim(fgets($file));
		$column_names = explode(",", $column_string);
		while (!feof($file)) {
			$current_line = trim(fgets($file));
			$elements = explode(",", $current_line);
			$member = array();
			for ($i = 0; $i < count($column_names); $i++) {
				$key = $column_names[$i];
				$member[$key] = $elements[$i];
			}
			array_push($data, $member);
		}
		fclose($file);
		$result = array("columns" => $column_names,
						"data" => $data);
		return $result;
	}

	function add_record($file_name, $record) {
		$csv_string = implode(",", $record);
		$file = fopen($file_name, "a");
		fwrite($file, "\n".$csv_string);
		fclose($file);
	}

	function remove_record($file_name, $record_index) {
		$data = get_data($file_name);
		$column_names = $data["columns"];
		$records = $data["data"];
		unset($records[$record_index]);
		print_r($records);
		$file = fopen($file_name, "w");
		$column_string = implode(",", $column_names);
		fwrite($file, $column_string);

		foreach ($records as $record) {
			$record_csv = implode(",", $record);
			fwrite($file, "\n".$record_csv);
		}

		fclose($file);
	}

	$members_data = get_members();
	$members = $members_data["data"];
	$column_names = $members_data["columns"];

	$users_data = get_users();
	$users = $users_data["data"];
	$column_names2 = $users_data["columns"];
?>