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
				<a href="blog_members.php">Team members</a>
				<a href="blog_additional_information.php">Additional information</a>
				<a href="#">Dictionary</a>
			</nav>
		</header>
		<main>
			<section>
				<header>
					<h2>Dictionary of countries, starting with the letters A and B</h2>
				</header>
				<article>
					<table>
						<tbody>
							<?php
								$dictionary_A = array(
												"Австралия" => "澳大利亚",
												"Австрия" => "奥地利",
												"Азербайджан" => "阿塞拜疆",
												"Албания" => "阿尔巴尼亚",
												"Алжир" => "阿尔及利亚",
												"Америка" => "美国",
												"Ангила" => "安圭拉",
												"Англия" => "英格兰",
												"Ангола" => "安哥拉",
												"Андора" => "安道尔",
												"Антигуа" => "安提瓜",
												"Арабия" => "阿拉伯",
												"Аржентина" => "阿根廷",
												"Армения" => "亚美尼亚",
												"Аруба" => "阿鲁巴",
												"Афганистан" => "阿富汗"
									);

									foreach ($dictionary_A as $key => $value) {
										echo "<tr>";
										echo "<td>";
										echo $key . " in chinese is " . $value;
										echo "</td>";
										echo "</tr>";
									}

								$dictionary_B = array(
												"Бангладеш" => "孟加拉国",
												"Барбейдос" => "巴巴多斯",
												"Барбуда" => "巴布达",
												"Бахами" => "巴哈马",
												"Бахрейн" => "巴林",
												"Беларус" => "白俄罗斯",
												"Белгия" => "比利时",
												"Белийз" => "伯利兹",
												"Бенин" => "贝宁",
												"Бермуда" => "百慕大",
												"Бирма" => "比绍",
												"Бисау" => "阿拉伯",
												"Боливия" => "玻利维亚",
												"Босна" => "波斯尼亚",
												"Ботсуана" => "博茨瓦纳",
												"Бразилия" => "巴西",
												"Бруней" => "文莱",
												"Буркина" => "布基纳法索",
												"Бурунди" => "布隆迪",
												"Бутан" => "不丹",
												"България" => "保加利亚",
									);

									foreach ($dictionary_B as $key => $value) {
										echo "<tr>";
										echo "<td>";
										echo $key . " in chinese is " . $value;
										echo "</td>";
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