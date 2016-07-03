<!DOCTYPE html>
<html>
<head>
	<title>Change small/capital letters</title>
	<link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
	<header>
		<h1>Convert text to small or capital letters</h1>
	</header>
<main>
	<?php
		unset($symbol, $start, $end, $diff);
		$result = "";
		$text_string = "";
		$small_or_large = "";
		if (isset($_POST['text-string']) && isset($_POST['type'])) {
			$text_string = $_POST['text-string'];
			$small_or_large = $_POST['type'];			

			if ($small_or_large == "capital") {
				for ($i = 0; $i < strlen($text_string); $i++) {
					$symbol = $text_string{$i};					
					$start = ord("a");
					$end = ord("z");
					if (ord($symbol) >= $start && ord($symbol) <= $end) {
						$diff = ord($symbol) - ord("a");
						$new = ord("A") + $diff;
						$symbol = chr($new);
					}
					$result .= $symbol;
				}
			}
			elseif ($small_or_large == "small") {
				for ($i = 0; $i < strlen($text_string); $i++) {
					$symbol = $text_string{$i};
					$start = ord("A");
					$end = ord("Z");
					if (ord($symbol) >= $start && ord($symbol) <= $end) {
						$diff = ord($symbol) - ord("A");
						$new = ord("a") + $diff;
						$symbol = chr($new);
					}
					$result .= $symbol;
				}
			}
			elseif ($small_or_large == "l33t") {
				for ($i=0; $i < strlen($text_string); $i++) {
					$symbol = $text_string{$i};
					switch ($symbol) {
						case '0':
							$symbol = "o";
							break;
						case '3':
							$symbol = "e";
							break;
						case '7':
							$symbol = "t";
							break;
						case '@':
							$symbol = "a";
							break;
						case '0':
							$symbol = "o";
							break;
						case '1':
							$symbol = "i";
							break;
						default:
							break;
					}
					$result .= $symbol;
				}
			}
		}
	 ?>
	 <div class="container">
	 	<div class="form">
		<form action="#" method="POST">
		 	<fieldset>
		 		<legend>Convert to capital or small letters</legend>
		 		<label for="text">Text to convert</label>
		 		<input id="text" type="text" name="text-string"><br>
		 		<label for="select">Type of conversion</label>
		 		<select id="select" name="type">
		 		<option value="small">small</option>
		 		<option value="capital">CAPITAL</option>
		 		<option value="l33t">1337</option>
		 		</select><br>

		 		<button type="submit">Convert</button>
		 	</fieldset>
		</form>
		</div>
		<div class="display">
			<fieldset class="display">
				<legend>Result</legend>			
			<?php echo $result; ?>
			</fieldset>
		 	
		 </div>
	 </div>
</main>
</body>
</html>