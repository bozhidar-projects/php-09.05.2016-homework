<!DOCTYPE html>
<html>
<head>
	<title>Registration Form</title>
</head>
<body>
	<form action="user-info.php" method="post">
		<fieldset>
			<legend>Registation Form</legend>
			<label for="username">Username:</label>
			<input id="username" name="username" type="text"/><br>

			<label for="firstname">Firstname:</label>
			<input id="firstname" name="firstname" type="text"/><br>

			<label for="lastname">Lastname:</label>
			<input id="lastname" name="lastname" type="text"/><br>

			<label for="email">E-mail:</label>
			<input id="email" type="email" name="email" placeholder="mail@abv.bg"><br>

			<label for="password">Password:</label>
			<input id="password" name="password" type="password"/><br>

			<label for="repassword">RePassword:</label>
			<input id="repassword" name="repassword" type="password"/><br>

			<label for="male-gender">Gender</label>
			<input id="male-gender" type="radio" name="gender" value="male"> Male<br>
			<label for="male-gender">Gender</label>
			<input id="male-gender" type="radio" name="gender" value="female"> Female<br>

			<label for="country">Country:</label>
			<?php 
			$selection=array(
				"BG" => 'Bulgaria',
				"UK" => 'United Kingdom',
				"USA" => 'USA', 
				"AZB" => 'Azerbaijan'
				);
				?>
				<select name="country">
					<option value="country">Select:</option>
					<?php
					asort($selection);
					reset($selection); 
					foreach($selection as $key => $value):
						echo '<option value="'.$key.'">'.$value.'</option>';
					endforeach;
					?>
				</select>
				<button type="submit">Register</button>
			</p>
		</p>
	</p>
</fieldset>
</form>
</body>
</html>


