<?php
	require_once("db.php");

	print_table($column_names, $members);
	print_add_form($column_names, "add-record-service.php");
	remove_record_form("remove-record-service.php");
?>