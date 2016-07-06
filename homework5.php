<!DOCTYPE html>
<html>
<head>
	<title>exercises</title>
	<link rel="stylesheet" type="text/css" href="css.css">
</head>
<body>
	<header>
		<h1>Homework5</h1>
	</header>
	<main>
		<section id="List of Students">
			<div>
				<header>
					<h2>Dynamic List of Students</h2>
				</header>
						<ol>
							<?php  
								$colleagues = array("Nikolay Ivanov", "Tihomir Dimitrov", "Vladimir Trifonov", "Mihaela Etropolska","Anton Melqkov","Spas Bozhanov","Veselinka Blajeva","Alex Sofroniev","Petia Vasileva","Amir Plugarov","Petar Stoyanov","Kalina Georgieva",);
								for ($i=0; $i < count($colleagues); $i++) { 
									$colleague = $colleagues[$i];
									echo "<li>" . $colleague . "</li>";
								}
							?>
						</ol>
			</div>
		</section>
		<section id="Students table	">
			<div>
				<header>
					<h2>Table</h2>
				</header>
						<table>
							<tr>
						 	<th colspan='4'>Students table</th>
						 	</tr>
							<th>First Name</th>
					 		<th>Last Name</th>
					 		<th>Mobile Number</th>
					 		<th>University</th>
							<?php
								$colleagues = array(
									array("Nikolay","Ivanov","0878990123","TU-Sofia"),
									array("Tihomir","Dimitrov","0895463980","TU-Sofia"),
									array("Vladimir","Trifonov","0890430250","UNSS"),
									array("Mihaela","Etropolska","0978245678","Unknown"),
									array("Anton","Melqkov","0877555320","Sofia University"),
									array("Spas","Bozhanov","0999111222","Unknown"),
									array("Veselinka","Blajeva","0885124789","Unibit" ),
									array("Alex","Sofroniev","0888999000","Caxton College"),
									array("Petia","Vasileva","0899123321","Unknown"),
									array("Amir","Plugarov","0987654321","Unknown"),
									array("Petar","Stoyanov","0884849400","MG"),
									array("Kalina","Georgieva","0884849401","Unknown"),
									);
								for ($i=0; $i < count($colleagues); $i++) { 
									$row = $colleagues[$i];
									echo "<tr>";
									for($j = 0; $j<count($row); $j++) {
										echo "<td>";
										echo $row[$j]. "<br>";
										echo "</td>";
									}
									echo "</tr>";
								}
						  	?>
						</table>	
			</div>
		</section>
		<section id="dictionary">
			<div>
				<header>
					<h2>Dictionary</h2>
				</header>
					<div class="dictionary">
						<?php
							$dictionary = array("Hello" => "Hallo",
											"Good morning" => "guten Morgen",
											"One" => "eins",
											"Hospital" => "Krankenhaus",
											"Factory" => "Fabrik");
						foreach ($dictionary as $key => $value) {
							echo $key . " in German is " . $value ."<br>";
						}
					    ?>
				    </div>
			</div>
		</section>
	</main>
</body>
</html>
