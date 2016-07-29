<?php
include("header.php");
include("left-sidebar.php");

$page = isset($_GET['page']) ? $_GET['page'] : "members"; 

switch ($page) {
	case 'members':
		manage_records($column_names, $members, "add-record-service.php", "remove-record-service.php");
		break;
	case 'users':
		manage_records($column_names2, $users, "add-user-service.php", "remove-user-service.php");
		break;
	case 'database':
		include("convert.php");
		break;
	default:
		echo "Error";
		break;
}

include("footer.php");
?>