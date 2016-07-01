<!DOCTYPE html>
<html>
	<head>
		<title>PHP Master's Blog</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="main.css">
	</head>
	
	<body style="font-size: 100%">
		<!-- This is the main heading of the blog-->
		<header id="site-header">			
			<img id="logo" src="team-logo.jpg" alt="team-logo">
			<h1 id="main-heading">PHP Master's Blog</h1>
			<nav id="top-navigation">
				<a href="#">Team members</a>
				<a href="blog_additional_information.php">Additional information</a>
				<a href="blog_dictionary.php">Dictionary</a>
			</nav>
		</header>
		<main>
			<section>
				<header>
					<h2>PHP team members</h2>
				</header>
				<article>
					<ol>
						<?php
							$students = array("Spas", "Vesi", "Petar", "Nikolai", "Tihomir", "Alex", "Anton", "Petya", "Kalina", "Mihaela", "Vladi", "Amir");

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
			Copyright PHP Masters - All rights reserved!
		</footer>
	</body>
</html>
