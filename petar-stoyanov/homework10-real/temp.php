<?php
	require_once("functions.php");
	//This was used for temporary tests.
	echo "The has for 1234 is ".password_hash("1234",PASSWORD_DEFAULT)."<br>";
	echo (password_verify("1234","$2y$10$3MmuNBhAzWlsu5dMQJFN8eCKrLZXwR5C41NKzQoWIMS5hkm9VcSHK")) ? "true" : "false";
?>