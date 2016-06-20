<!DOCTYPE html>
<html>
<head>
	<title>User-info</title>
	<style type="text/css">
		body{
			background: rgb(229,235,238);
			background: -moz-linear-gradient(top, rgba(229,235,238,1) 50%, rgba(215,222,227,1) 88%, rgba(246,248,249,1) 90%, rgba(246,248,249,1) 90%, rgba(245,247,249,1) 100%);
			background: -webkit-linear-gradient(top, rgba(229,235,238,1) 50%,rgba(215,222,227,1) 88%,rgba(246,248,249,1) 90%,rgba(246,248,249,1) 90%,rgba(245,247,249,1) 100%);
			background: linear-gradient(to bottom, rgba(229,235,238,1) 50%,rgba(215,222,227,1) 88%,rgba(246,248,249,1) 90%,rgba(246,248,249,1) 90%,rgba(245,247,249,1) 100%);
			filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#e5ebee', endColorstr='#f5f7f9',GradientType=0 );
			color:   saddlebrown;
		}
	</style>
</head>
<body>
	<?php 
		$firstname = "";
		if (isset($_POST["firstname"])) {
			$firstname = $_POST["firstname"];
		}

		$lastname = "";
		if (isset($_POST["lastname"])) {
			$lastname = $_POST["lastname"];
		}

		$email = "";
		if (isset($_POST["Email"])) {
			$email = $_POST["Email"];
		}

		$password = "";
		if (isset($_POST["password"])) {
			$password = $_POST["password"];
		}

		$password2= "";
		if (isset($_POST["password2"])) {
			$password2 = $_POST["password2"];
		}

		$gender= "";
		if (isset($_POST["gender"])) {
			$gender = $_POST["gender"];
		}

		$country= "";
		if (isset($_POST["country"])) {
			$country = $_POST["country"];
		}

		echo "Firstname: ".$firstname."<br>"."Lastname: ".$lastname."<br>"."Email: ".$email."<br>"."Password: ".$password."<br>"."Password (again): ".$password2."<br>"."Gender: ".$gender."<br>"."Country: ".$country."<br>";
	 ?>
</body>
</html>