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
		$result = $database_connection->query($sql);

		if ($database_connection->error) {
			die("Error in execution".$database_connection->error);
		}
		if ($check != 0) {
			return $result;
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
	$query_result = execute_sql_query("SELECT `ID` FROM `Universities` WHERE `Name` = 'TU'",1);
	if ($query_result->num_rows > 0) {
		echo "True";
	} else {
		echo "False";
	}

?>