<!DOCTYPE html>
<html>
<head>
	<title>Registration Form</title>
	<link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
	<?php
		$contries = array('Bulgaria', 'Serbia', 'Macedonia', 'Turkey', 'Greece', 'Romania');
	?>
	<form id="login-form" action="user-info.php" method="post">
		<fieldset>
			<legend>Registration form</legend>
		
			<label for="firstname">First name</label>
			<input id="firstname" type="text" name="firstname"><br>

			<label for="lastname">Last name</label>
			<input id="lastname" type="text" name="lastname"><br>

			<label for="email-input">Email address</label>
			<input id="email-input" type="email" name="email"><br>

			<label for="password">Password</label>
			<input id="password" type="password" name="password"><br>

			<label for="password-check">Submit password</label>
			<input id="password-check" type="password" name="password-check"><br>

			<label for="gender">Gender</label>
			<input id="gender" type="radio" name="gender" value="male" checked> Male
	  		<input type="radio" name="gender" value="female"> Female<br>

	  		<label for="choose_country">Choose your contry:</label>
	  		<select id="choose_country" name="countries">
	  			<?php
	  				foreach ($contries as $value) {
	  					echo "<option>" . $value . "</option>";
	  				}
	  			?>
	  		</select><br>

			<button type="submit">Login</button>
		</fieldset>
	</form>
</body>
</html>