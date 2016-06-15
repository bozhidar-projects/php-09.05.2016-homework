<!DOCTYPE html>
<html>
	<head>
		<title>PHP Master's Blog</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="main.css">
	</head>
	
	<body style="font-size: 100%">
		<header id="site-header">			
			<img id="logo" src="team-logo.jpg" alt="team-logo">
			<h1 id="main-heading">PHP Master's Blog</h1>
			<nav id="top-navigation">
				<a href="blog_members.php">Team members</a>
				<a href="#">Additional information</a>
				<a href="blog_dictionary.php">Dictionary</a>
			</nav>
		</header>
		<main>
			<section>
				<header>
					<h2>Additional information</h2>
				</header>
				<article>
					<table>
						<tbody>
							<?php
								$students = array(
									array("First name", "Last name", "University", "Mobile"),
									array("Spas", "Bozhanov", "IBS", "088xxxxxxx"),
									array("Vesi", "Blazheva", "Unibit", "088xxxxxxx"),
									array("Petar", "Stoyanov", "TU-Sofia", "088xxxxxxx"),
									array("Nikolai", "Ivanov", "TU-Sofia", "088xxxxxxx"),
									array("Tihomir", "Todorov", "TU-Sofia", "088xxxxxxx"),
									array("Alex", "Sofroniev", "SU-Sofia", "088xxxxxxx"),
									array("Anton", "Melqkov", "TU-Sofia", "088xxxxxxx"),
									array("Petya", "Vasileva", "Unibit", "088xxxxxxx"),
									array("Kalina", "Georgieva", "SU-Sofia", "088xxxxxxx"),
									array("Mihaela", "Etropolska", "SU-Sofia", "088xxxxxxx"),
									array("Vladi", "Trifonov", "TU-Sofia", "088xxxxxxx"),
									array("Amir", "Plugarov", "TU-Sofia", "088xxxxxxx")
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
			Copyright PHP Masters - All rights reserved!
		</footer>
	</body>
</html>
