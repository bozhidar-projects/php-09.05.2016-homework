<?php
	$server_name = "localhost";
	$username = "root";
	$password = "";
	$schema_name = "Blog";

	$database_connection = new mysqli($server_name, $username, $password, $schema_name);

	if ($database_connection->connect_errno) {
		die("Connection to database failed: ".$database_connection->connect_errno."<br>");
	}
	function execute_sql_query($sql,$check=0) {
		global $database_connection;
		$database_connection->query($sql);

		if ($check!=0) {
			$res = $database_connection->query($sql);
			return $res;
		}
	}

	function get_data_from_database($sql) {
		global $database_connection;

		$column_names = array();
		$data = array();
		$db_result = $database_connection->query($sql);
		$data = array();
		while ($row = $db_result->fetch_assoc()) {
			array_push($data,$row);
		}	
		return $data;
	}

	function get_article($table) {
		$sql = "SELECT * FROM `".$table."`";

		$result = get_data_from_database($sql);
		return $result;
	}

	#################################################
	#################### OLD ########################
	#################################################

	$travelling_array = get_article("Travel");
	$sport_array = get_article("Sport");
	$makeup_array = get_article("Makeup");
	$technology_array = get_article("Technology");
	$email_array = get_article("Mails");
	$member_array = get_article("Members");
	$users_array = get_article("Users");
?>