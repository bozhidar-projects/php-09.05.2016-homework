<!DOCTYPE html>
<html>
	<head>
		<title>Soft HW</title>

		<link rel="stylesheet" type="text/css" href="main.css">
	</head>
	
	<body style="font-size: 100%">
		<header id="site-header">			
			<img id="index.jpg" src="index.jpg" alt="index">
			<h1 id="main-heading">Soft HW</h1>
			<nav id="top-navigation">
				<a href="homework5.2.php">Team members</a>
				<a href="homework5.3.php">Information</a>
				<a href="homework5.1.php">Dictionary</a>
			</nav>
		</header>
		<main>
			<section>
				<header>
					<h2>Information</h2>
				</header>
				<article>
					<table>
						<tbody>
							<?php
								$students = array(
									array("First name", "Last name", "University", "Mobile"),
									
									array("Amir", "Plugarov", "TU-Sofia", "0887865409"),
									array("Alex", "Sofroniev", "SU-Sofia", "0885986493"),
									array("Anton", "Melqkov", "TU-Sofia", "0883098673"),
									array("Kalina", "Georgieva", "SU-Sofia", "0884873023"),
									array("Mihaela", "Etropolska", "SU-Sofia", "0884973928"),
									array("Nikolai", "Ivanov", "TU-Sofia", "0888666393"),
									array("Petar", "Stoyanov", "TU-Sofia", "0886849303"),
									array("Petya", "Vasileva", "Unibit", "0885832945"),
									array("Spas", "Bozhanov", "IBS", "0887362574"),
									array("Tihomir", "Todorov", "TU-Sofia", "0887398272"),
									array("Vesi", "Blazheva", "Unibit", "0888274656"),
									array("Vladi", "Trifonov", "TU-Sofia", "0886283747")
								);

								for ($i = 0; $i < count($students); $i++) {
									echo "<tr>";
									$row = $students[$i];
									for ($j = 0; $j < count($row); $j++) {
										echo "<td>";
										echo $row[$j];
										echo "</td>";
									}
									echo "</tr>";
								}
							?>
						</tbody>
					</table>
				</article>				
			</section>
			<hr>
		</main>

		<footer>
			Copyright Soft HW
		</footer>
	</body>
</html>
