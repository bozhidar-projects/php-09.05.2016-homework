<!DOCTYPE html>
<html>
	<head>
		<title>Soft HW</title>

		<link rel="stylesheet" type="text/css" href="main.css">
	</head>
	
	<body style="font-size: 100%">
		<!-- This is the main heading of the blog-->
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
					<h2>Dictionary of capital in Europe</h2>
				</header>
				<article>
					<table>
						<tbody>
							<?php
								$dictionary = array(
												"Амстердам" =>"એમ્સ્ટર્ડમ",
												"Андора ла Веля" => "આંડૉરા લા વેલ્લા",
												"Анкара" => "અન્કારા",
												"Астана" => "અસતના",
												"Атина" => "એથેના",
												"Баку" => "બાકૂ",
												"Белград" => "બેલગ્રેડ",
												"Берлин" => "બર્લિન",
												"Берн" => "બર્ન",
												"Братислава" => "બરેટિસ્લાવા",
												"Брюксел" => "બ્રસેલ્સ",
												"Будапеща" => "બુડાપેસ્ટ",
												"Букурещ" => "બુકારેસ્ટ",
												"Вадуц" => "વડુઝ",
												"Валета" => "વડુઝ",
												"Варшава" => "વૉર્સા",
												"Ватикан" => "વેટિકન",
												"Виена" => "વિયેના",
												"Вилнюс" => "વિલ્નીયસ",
												"Дъблин" => "ડબલિન",
												"Ереван" => "યેરેવન",
												"Загреб" => "જ઼ાગ્રેબ",
												"Киев" => "કિયેવ",
												"Кишинев" => "કિયેવ",
												"Копенхаген" => "કોપનહેગન",
												"Лисабон" => "લિસ્બન",
												"Лондон" => "લન્ડન",
												"Любляна" => "લિયૂબ્લિયના",
												"Люксембург" => "લક્ઝમબર્ગ",
												"Мадрид" => "મેડ્રિડ",
												"Минск" => "મિન્સ્ક",
												"Монако" => "મોનાકો",
												"Москва" => "મોસ્કો",
												"Никозия" => "નિકોસિયા",
												"Осло" => "ઓસ્લો",
												"Париж" => "પોરિસ",
												"Подгорица" => "પોરિસ",
												"Прага" => "પ્રાગ",
												"Прищина" => "પ્રિસટીના",
												"Рейкявик" => "રિકિયવિક",
												"Рига" => "રીગા",
												"Рим" => "રોમા",
												"Сан Марино" => "સૅન મેરિનો",
												"Сараево" => "સારજેયેવો",
												"Скопие" => "સ્કોપજે",
												"София" => "સોફિયા",
												"Стокхолм" => "સ્ટોકહોમ",
												"Талин" => "ટૅલિન",
												"Тбилиси" => "ટબાઇલીસી",
												"Тирана" => "ટિરના"
									);

									foreach ($dictionary as $key => $value) {
										echo "<tr>";
										echo "<td>";
										echo $key . " in gudjarati is " . $value;
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
			Copyright Soft HW
		</footer>
	</body>
</html>