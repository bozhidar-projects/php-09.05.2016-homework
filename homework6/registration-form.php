<!DOCTYPE html>
<html>
<head>
	<title>User-info</title>
	<link rel="stylesheet" type="text/css" href="registration-form.css">
</head>
<body>
<?php
	$simple_array = array("Turkey", "Greece", "Macedonia", "Serbia", "Romania",);
  ?>
<form action="user-info.php" method="post">
	<fieldset>
		<legend>Login Form</legend>
	<label for="firstname">Firstname:</label>
	<input id="firstname" type="text" name="firstname"><br>
	<label for="lastname">Lastname:</label>
	<input id="lastname" type="text" name="lastname"><br>
	<label for="form-email">E-mail:	</label>
	<input id="form-email" type="email" name="Email"><br>
	<label for="password">Password:</label>
	<input id="password" type="password" name="password"><br>
	<label for="password2">Password (again):</label>
	<input id="password2" type="password" name="password2"><br>
	<label for="form-gender-female">Female</label>
	<input id="form-gender-female" name="gender" type="radio" value="female"></input>
	<label for="form-gender-male">Male</label>
	<input id="form-gender-male" name="gender" type="radio" value="male"></input><br>
	<label for="form-country">Country:</label>
	<select id="form-country" name="country">
		<option >Bulgaria</option>
		<?php
		for ($i=0; $i <count($simple_array); $i++) {
			$student = $simple_array[$i];
			echo "<option>". $student . "</option>";
		}
		?>	
	</select><br>
	<button type="submit">Login</button>
	</fieldset>
</form>
</body>
</html>