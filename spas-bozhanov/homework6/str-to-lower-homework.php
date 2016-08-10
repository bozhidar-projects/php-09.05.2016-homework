<!DOCTYPE html>
<html>
	<head>
		<title>Capital to small letters</title>
		<meta charset="utf-8">
		<style type="text/css">

			body {
				font-family: arial, verdana, sans-serif;
			}

			fieldset {
				/* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#f6f8f9+0,d7dee3+22,d7dee3+22,e5ebee+73,f5f7f9+100 */
				background: #f6f8f9; /* Old browsers */
				background: -moz-linear-gradient(left,  #f6f8f9 0%, #d7dee3 22%, #d7dee3 22%, #e5ebee 73%, #f5f7f9 100%); /* FF3.6-15 */
				background: -webkit-linear-gradient(left,  #f6f8f9 0%,#d7dee3 22%,#d7dee3 22%,#e5ebee 73%,#f5f7f9 100%); /* Chrome10-25,Safari5.1-6 */
				background: linear-gradient(to right,  #f6f8f9 0%,#d7dee3 22%,#d7dee3 22%,#e5ebee 73%,#f5f7f9 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
				filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#f6f8f9', endColorstr='#f5f7f9',GradientType=1 ); /* IE6-9 */

				padding: 10px;
			}

			legend {
				font-size: 1.5em;
			}

			#input-text-capital {
				width: 500px;
			}

			button {
				background-color: grey;
				color: white;
				margin-top: 5px;
				margin-bottom: 5px;			
			}

			output {
				border: 1px solid black;
				width: 500px;
				background-color: grey;
				color: white;
			}

		</style>
	</head>
	<body>
		<?php
			$input_text_capital = 0;
			if (isset($_GET['input-text-capital'])) {
				$input_text_capital = $_GET['input-text-capital'];
			}

			$result = "";
			for ($i = 0; $i < strlen($input_text_capital); $i++) {
				$random_symbol = $input_text_capital{$i};
			
			$start = ord("A");
			$end = ord("Z");
			if (ord($random_symbol) >= $start && ord($random_symbol) <= $end) {
				$difference = ord ($random_symbol) - ord("A");
				$new_value = ord("a") + $difference;
				$random_symbol = chr($new_value);
			}

			$result .= $random_symbol;
		}

		?>

	<form method="get">
		<fieldset>
			<legend>Text input to change its capital letters</legend>
			<label for="input-text-capital">Insert your text here:</label><br>
			<input id="input-text-capital" type="text" name="input-text-capital" value="<?php echo $input_text_capital ?>"><br>

			<button type="Submit">Change</button>	
			<button type="reset">Reset</button><br>
			<label for="changed-text">Changed text with small letters:</label><br>
			<output id="changed-text"><?php echo $result ?></output>
		</fieldset>
	</form>
	</body>
</html>