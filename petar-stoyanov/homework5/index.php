<!DOCTYPE html>
<html>
<head>
	<title>Homework for 2016.06.13</title>
	<link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
<header>
	<h1><center>Homework for 2016.06.13</center></h1>
</header>
<main>
<?php
	echo "<div class='container'>";
	echo "<table>
		<tr>
		<th colspan='4'>Students table</th>
		</tr>
		<th>First Name</th>
		<th>Last Name</th>
		<th>Mobile Number</th>
		<th>University</th>" ;
	$students = array(
			array("Vladimir", "Trifonov", "0886674688", "UNSS"),
			array("Mihaela", "Etropolska", "0885665446", "unknown"),
			array("Anton", "Melqkov", "0896225356", "SU"),
			array("Spas", "Bozhanov", "0886652826", "unknown"),
			array("Veselinka", "Blajeva", "0875228325", "Unibit"),
			array("Nikolai", "Ivanov", "0887328827", "TU"),
			array("Tihomir", "Dimitrov", "0884667775", "unknown"),
			array("Alex", "Sofroniev", "0887453583", "unknown"),
			array("Petia", "Spasova", "0882728757", "unknown"),
			array("Amir", "Plugarov", "0878257528", "unknown"),
			array("Tihomir", "Todorov", "0878635344", "unknown"),
			array("Petar", "Stoyanov", "0898437837", "MG"),
		);
	foreach ($students as $value) {
		echo "<tr>";
		foreach ($value as $in_value) {
			echo "<td>";
			echo "<div class='table'>";
			echo $in_value;
			echo "</div>";
			echo "</td>";
		}
		echo "</tr>";
		
	}
	echo "</table></div>";

	$dictionary = array(
			"How are you?" => "kêmon achhish?",
			"What's your name?" => "tor nam ki?",
			"My name is ..." => "amar nam ...",
			"I'm from ..." => "ami ... theke ashchhi",
			"Pleased to meet you" => "āpanāra sāthē paricita haẏē khuśi haẏēchi",
			"Good morning " => "shuprobhat",
			"Good evening" => "shubho shondha",
			"Good luck" => "soubhagya",
			"Have a nice day" => "su din",
			"I don't understand" => "bujhte pari ni",
			"Please speak more slowly" => "aste bolben ki?",
			"Do you speak English?" => "apni Ingreji bolte paren?",
			"Excuse me" => "shunun",
			"Thank you" => "dhonnobad",
			"Help!" => "bãchao!"
		);
	echo "<div class='container'><table>
		<tr>
		<th colspan='2'>Basic phrases in Bengali</th>
		</tr>
		<th>Phrase in English</th>
		<th>Phrase in Bengali</th>";

	foreach ($dictionary as $k => $v) {
		echo "<tr><td><div class='table'>" . $k . "</div></td><td><div class='table'>" . $v . "</div></td></tr>";
	}

	echo "</table></div>";

	//print_r($dictionary);
?>

</main>
</body>
</html>