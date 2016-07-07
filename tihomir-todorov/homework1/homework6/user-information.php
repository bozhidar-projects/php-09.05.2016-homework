<!DOCTYPE html>
<html>
<head>
	<title>Information</title>
</head>
<body>

			<?php
				$firstname = "";
				if(isset($_POST["firstname"])){
					$firstname = $_POST["firstname"];
				}

				$lastname = "";
				if(isset($_POST["lastname"])){
					$lastname = $_POST["lastname"];
				}


				$email = "";
				if(isset($_POST["email"])){
					$email = $_POST["email"];
				}


				$password = "";
				if(isset($_POST["password"])){
					$password = $_POST["password"];
				}


				$password2 = "";
				if(isset($_POST["password2"])){
					$password2 = $_POST["password2"];
				}


				$gender = "";
				if(isset($_POST["gender"])){
					$gender_male = $_POST["gender"];
				}


				

					$country = "";
				if(isset($_POST["country"])){
					$country = $_POST["country"];
				}


				echo "Firstname :".$firstname."<br>"."Lastname :" .$lastname."<br>"."E-mail :" .$email. "<br>"."Password :" .$password."<br>"."Gender :" .$gender_male."<br>" ."Country :" .$country;







			?>

</body>
</html>