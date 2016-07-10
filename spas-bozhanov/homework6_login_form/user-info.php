<!DOCTYPE html>
<html>
<head>
	<title>User info</title>
	<link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
	<table>
		<?php
			$firstname = "";
			$lastname = "";
			$email = "";
			$password = "";
			$gender ="";
			$countries= isset($_POST['countries']) ? $_POST['countries'] : ""; 

			if (isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['gender']) && isset($_POST['countries'])) {
				$firstname = $_POST['firstname'];
				$lastname = $_POST['lastname'];
				$email = $_POST['email'];
				$password = $_POST['password'];
				$gender = $_POST['gender'];
				$countries = $_POST['countries'];
			
			}

			if ($_POST['password'] != $_POST['password-check']) {
				echo '<a href="login-form-homework.php">The password and submit password does not match. Go to Registration form and retype the data</a>';
				exit();
			} else {
				$password = $_POST['password'];
			}

			echo "<tr>";
			echo "<td><strong>The submitted data is: </strong></td><br>";
			echo "</tr>";
			echo "<tr>";
			echo "<td>First name: " . $firstname . "</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td>Last name: " . $lastname . "</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td>Email address: " . $email . "</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td>Password: " . $password . "</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td>Gender: " . $gender . "</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td>Country: " . $countries . "</td>";
			echo "</tr>";
		?>
	</table>
</body>
</html>