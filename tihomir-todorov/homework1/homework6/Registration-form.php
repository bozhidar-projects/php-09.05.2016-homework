<!DOCTYPE html>
<html>
<head>
	<title>Registration Form</title>
	<link rel="stylesheet" type="text/css" href="Registration-form.css">
</head>
<body>

	<?php
		$simple_array = array("Bulgaria", "Russia", "Italy", "England", "France");

	?>

	<form action="user-information.php" method="post">

			<fieldset>

					<legend>Registration:</legend>


		<label for="firstname">Firstname:</label>
		<input id="firstame" type="text" name="firstname"></input><br><br>

		<label for="lastname">Lastname:</label>
		<input id="lastame" type="text" name="lastname"></input><br><br>

		<label for="email">E-mail:</label>
		<input id="email" type="email" name="email"></input><br><br>

		<label for="password">Password:</label>
		<input id="password" type="password" name="password"></input><br><br>

		<label for="password2">Password(again):</label>
		<input id="password2" type="password" name="password"></input><br><br>

		<label for="gender">Gender:</label>

		<label for="gender-male">Male</label>
		<input id="gender-male" type="radio" name="gender" value="male"></input>

		<label for="gender-female">Female</label>
		<input id="gender-female" type="radio" name="gender" value="female"></input><br><br>

		<label for="country">Country:</label>
		<select id="country" name="country">

		

			<?php
				for($i= 0 ; $i < count($simple_array);$i++){
					$country = $simple_array[$i];
					echo "<option>".$country."</option>";
				}



			?>

			</select>

			<button type="submit">Login</button>

		</fieldset>

	</form>

</body>
</html>