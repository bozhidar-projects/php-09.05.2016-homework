<?php
if(!isset($_SESSION['admin']) && !isset($_SESSION['user'])) {
	header("Location: index.php");
}
?>