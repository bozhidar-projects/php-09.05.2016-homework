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
				echo "<h1 class='warn'><a href='register.php'>Passwords don't match, redirecting to registration page</a></h1>";
				header("refresh:5;url=register.php");
				exit();
			} else {
				$pass = $_POST['pass1'];
			}

			if($_POST['email1'] != $_POST['email2'])  {
				echo "<h1 class='warn'><a href='register.php'>E-mails don't match, redirecting to registration page</a></h1>";
				header("refresh:5;url=register.php");
				exit();
					exit();
			} else {
				$email = $_POST['email1'];
			}

			if($_POST['gender'] == "trans" || $_POST['gender'] == "gay" || $_POST['gender'] == "vegan" || $_POST['gender'] == "lesbian" || $_POST['gender'] == "all") {
				echo "<h1 class='warn'><a href='register.php'>This is not a real gender, don't embarass yourself!<br> Redirecting to registration page!</a></h1>";
				header("refresh:5;url=register.php");
				exit();
			}
			$cnt=0;
			foreach ($_POST as $k => $v) {
				if($_POST[$k]=="") {				
					$cnt++;
				}
			}
			if($cnt!=0) {
				echo "<h1 class='warn'><a href='register.php'>There are empty fields, redirecting to registration page!</a></h1>";
				header("refresh:5;url=register.php");
				exit();
			}
			//end of checks

			if ($gender == "male") {
				$salut = "Mr.";
			} else {
				$salut = "Miss";
			}
			echo "Hello $salut $fname $lname we are happy to have you here. We've recorded you are from $country. The recorded e-mail is $email.<br>";
			echo "The list of currrent users can be seen bellow: <br><br>";
			$users = array();
			$file = fopen("users.csv", "r");
			if (file_get_contents("users.csv")) {
				while(!feof($file)) {
					$string = trim(fgets($file));
					$temp_array = explode(",", $string);
					$new_array = array();
					$new_array['salut'] = $temp_array[0];
					$new_array['fname'] = $temp_array[1];
					$new_array['lname'] = $temp_array[2];
					$new_array['email'] = $temp_array[3];
					$new_array['country'] = $temp_array[4];
					array_push($users, $new_array);
				}
			}
			fclose($file);
			$new_array = array('salut' => $salut, 'fname' => $fname, 'lname' => $lname, 'email' => $email, 'country' => $country);
			array_push($users, $new_array);
			$file = fopen("users.csv", "w");
			for ($i=0; $i < count($users)-1; $i++) { 
				$string = implode(",", $users[$i])."\n";
				fwrite($file, $string);
			}
			$string = implode(",", $users[$i]);
			fwrite($file, $string);
			fclose($file);
			echo "<table>";
			echo "<tr rowspan='5'>";
			echo "<th>List of Users</th>";
			echo "<tr>";
			echo "<th></th>";
			echo "<th>First Name</th>";
			echo "<th>Last Name</th>";
			echo "<th>E-mail</th>";
			echo "<th>Country</th>";
			echo "</tr>";
			foreach ($users as $value) {
				echo "<tr>";
				echo "<td>".$value['salut']."</td>";
				echo "<td>".$value['fname']."</td>";
				echo "<td>".$value['lname']."</td>";
				echo "<td>".$value['email']."</td>";
				echo "<td>".$value['country']."</td>";
				echo "</tr>";
			}
			echo "</table>";


		} else {
			header("Location: register.php");
		}
	?>
</main>
</body>
</html>