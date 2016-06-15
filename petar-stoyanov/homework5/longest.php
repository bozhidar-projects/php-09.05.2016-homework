<!DOCTYPE html>
<html>
<head>
	<title>Check the longest name</title>
	<link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
<header>
	<h1>Check who has the longest firstname and lastname</h1>
</header>
<main>
	<div class="table">
	<?php
		$students = array(
			array("fname" => "Vladimir", "lname" => "Trifonov", "GSM" => "0886674688", "school" => "UNSS"),
			array("fname" => "Mihaela", "lname" => "Etropolska", "GSM" => "0885665446", "school" => "unknown"),
			array("fname" => "Anton", "lname" => "Melqkov", "GSM" => "0896225356", "school" => "SU"),
			array("fname" => "Spas", "lname" => "Bozhanov", "GSM" => "0886652826", "school" => "unknown"),
			array("fname" => "Veselinka", "lname" => "Blajeva", "GSM" => "0875228325", "school" => "Unibit"),
			array("fname" => "Nikolai", "lname" => "Ivanov", "GSM" => "0887328827", "school" => "TU"),
			array("fname" => "Tihomir", "lname" => "Dimitrov", "GSM" => "0884667775", "school" => "unknown"),
			array("fname" => "Alex", "lname" => "Sofroniev", "GSM" => "0887453583", "school" => "unknown"),
			array("fname" => "Petia", "lname" => "Spasova", "GSM" => "0882728757", "school" => "unknown"),
			array("fname" => "Amir", "lname" => "Plugarov", "GSM" => "0878257528", "school" => "unknown"),
			array("fname" => "Tihomir", "lname" => "Todorov", "GSM" => "0878635344", "school" => "unknown"),
			array("fname" => "Petar", "lname" => "Stoyanov", "GSM" => "0898437837", "school" => "MG"),
		);
		
		$l_fname = "t";
		$v_fname = 0;
		$l_lname = "t";
		$v_lname = 0;
		foreach ($students as $val) {
			foreach ($val as $k => $v) {
				if ($k == "fname") {
					if (strlen($v) > $v_fname ) {
						$v_fname = strlen($v);
						$l_fname = $v;
					}
				}
				elseif ($k == "lname") {
					if (strlen($v) > $v_lname) {
						$v_lname = strlen($v);
						$l_lname = $v;
					}	
				}
			}
		}
		echo "<br>";
		//echo "Longest firstname is " . $l_fname . ", longest lastname is " . $l_lname;
		unset($val1, $k, $v);
		foreach ($students as $val) {
			if ($val["fname"] == $l_fname) {
				$lfname = $val["fname"] . " " . $val["lname"];				
			}
			elseif ($val["lname"] == $l_lname) {
				$llname = $val["fname"] . " " . $val["lname"];
			}

		}
		echo $lfname . " has the longest firstname, while " . $llname . " has the longest lastname.";
	?>
	</div>
</main>
</body>
</html>