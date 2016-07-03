<!DOCTYPE html>
<html>
<head>
	<title>User Info</title>
	<link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
<header>
	<h1>User Info</h1>
</header>
<main>
	<?php
		$fname="";
		$lname="";
		$pass="";
		$email="";
		$gender="";
		$country="";
		//assigning variables
		if(isset($_POST['fname']) && 
			isset($_POST['lname']) && 
			isset($_POST['pass1']) && 
			isset($_POST['pass2']) && 
			isset($_POST['email1']) && 
			isset($_POST['email2']) && 
			isset($_POST['gender']) && 
			isset($_POST['country'])) 
		{
			$fname = $_POST['fname'];
			$lname = $_POST['lname'];
			$gender = $_POST['gender'];
			$country = $_POST['country'];
			
			
			//checks for incorrect form fields
			if($_POST['pass1'] != $_POST['pass2']) {
					echo "<h1 class='warn'><a href='register.php'>Passwords don't match, click to return to registration page!</a></h1>";
					exit();
			} else {
				$pass = $_POST['pass1'];
			}

			if($_POST['email1'] != $_POST['email2'])  {
				echo "<h1 class='warn'><a href='register.php'>E-mail addresses don't match, click to return to registration page!</a></h1>";
					exit();
			} else {
				$email = $_POST['email1'];
			}

			if($_POST['gender'] == "trans" || $_POST['gender'] == "gay" || $_POST['gender'] == "vegan" || $_POST['gender'] == "lesbian" || $_POST['gender'] == "all") {
				echo "<h1 class='warn'><a href='register.php'>This is not a real gender, click to return to registration page!</a></h1>";
					exit();
			}
			$cnt=0;
			foreach ($_POST as $k => $v) {
				if($_POST[$k]=="") {				
					$cnt++;
				}
			}
			if($cnt!=0) {
				echo "<h1 class='warn'><a href='register.php'>There are empty fields, clock to return to registration page!</a></h1>";
					exit();
			}
			//end of checks

			if ($gender == "male") {
				$salut = "Mr.";
			} else {
				$salut = "Miss";
			}
			echo "Hello $salut $fname $lname we are happy to have you here. We've recorded you are from $country. The recorded e-mail is $email.";
		} else {
			header("Location: register.php");
		}
	?>
</main>
</body>
</html>