<!DOCTYPE html>
<html>
<head>
	<title>Registration form</title>
	<link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
<header>
	<h1>Registration Form</h1>
</header>
<main>
	<?php
		$add="";
		$rem="";
		$countries = array();
		$file = fopen("countries.csv", "r");
		$countries = explode(",", fgets($file));
		fclose($file);
		if(isset($_GET['remove']) && isset($_GET['country'])) {
			$add = $_GET['country'];
			$rem = $_GET['remove'];		
			if($add != "") {
				array_push($countries, $add);				
				$file = fopen("countries.csv", "w");
				fwrite($file, implode(",", $countries));
				fclose($file);
			}
			if($rem != "none") {
				for ($i=0; $i < count($countries); $i++) { 
					if($countries[$i] == $rem) {
						unset($countries[$i]);
						echo "cntr = ".$countries[$i]."<br>";
						echo "rem = ".$rem;
					}					
				}
				echo "<pre>".print_r($countries)."</pre>";
				$file = fopen("countries.csv", "w");
				fwrite($file, implode(",", $countries));
				fclose($file);
				header("Location: register.php");
			}
		}
	?>
	<div class="container">
		<form action="user-info.php" method="POST">	
		<fieldset>
		<legend>Registration Form</legend>
			<div class="allign">			
			<label for="fname">First Name</label><br>
			<label for="lname">Last Name</label><br>
			<label for="email1">E-mail Adress</label><br>
			<label for="email2">Retype e-mail</label><br>
			<label for="pass1">Password</label><br>
			<label for="pass2">Retype pass</label><br>
			<label for="gender">Gender:</label><br>
			<label for="country">Country:</label><br>
			<button type="submit">Submit</button>			
			</div>

			<div class="allign">
				<input id="fname" type="name" name="fname"><br>
				<input id="lname" type="name" name="lname"><br>
				<input id="email1" type="email" name="email1"><br>
				<input id="email2" type="email" name="email2"><br>
				<input id="pass1" type="password" name="pass1"><br>
				<input id="pass2" type="password" name="pass2"><br>
				<!-- sorry, just had to do it this way :) -->
				<!--
				<input type="radio" name="gender" value="male">Male<br>
 				<input type="radio" name="gender" value="female"> Female<br>
 				-->
				<select id="gender" name="gender">
				<optgroup label="legacy">
					<option value="male">male</option>
					<option value="female">female</option>
				</optgroup>
				<optgroup label="modern">
					<option value="trans">Transgender</option>
					<option value="lesbian">Lesbian</option>
					<option value="gay">Gay</option>
					<option value="vegan">Vegan</option>
					<option value="all">Transgender Gay Vegan</option>
				</optgroup>
			</select><br>
				<select id="country" name="country">
				<?php 
					foreach ($countries as $value) {
						echo '<option value="'.$value.'">'.$value.'</option>';
					}
				?>
			</select>
			</div>

		</fieldset>		
		</form>
	</div>
	</div>

	<div class="container">
	<form action="#" method="get">
		<fieldset>
			<legend>Add/Remove a country from the list</legend>
			<div class="allign">
			<label for="add">Add a country</label><br>
			<label for="remove">Remove a country</label><br>
			<button type="submit">Add/Remove</button>
			</div>

			<div class="allign">			
			<input id="add" type="name" name="country"><br>			
			<select id="remove" name="remove">
			<?php 
			foreach ($countries as $value) {
				if ($value=="Bulgaria") {
					continue;
				}
				echo "<option value='".$value."'>".$value."</option>";
			}
			?>
			<option value="none" selected="None">None</option>
			</select><br>
			
		</fieldset>
	</form>
	</div>
	</div>

</main>
</body>
</html>