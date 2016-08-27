<!DOCTYPE html>
<html>
	<head>
		<title>Soft HW</title>

		<link rel="stylesheet" type="text/css" href="main.css">
	</head>
	
	<body style="font-size: 100%">
		<!-- This is the main heading of the blog-->
		<header id="site-header">			
			<img id="index.jpg" src="index.jpg" alt="index-logo">
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
					<h2>Team Members</h2>
				</header>
				<article>
					<ol>
						<?php
							$students = array("Amir",  "Alex", "Anton", "Kalina", "Mihaela","Nikolai","Petar", "Petya", "Spas" , "Tihomir","Vesi","Vladi");

							for ($i = 0; $i < count($students); $i++){
								$student = $students[$i];
								echo "<li>" . $student . "</li>";
							}
						?>
					</ol>
				</article>				
			</section>
			<hr>
		</main>

		<footer>
			Copyright Soft HW
		</footer>
	</body>
</html>
