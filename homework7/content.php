<?php
	foreach ($articles as $article) {
		echo '<div class="articles">';
		echo '<header>';
		echo '<h2>' . $article['Title'] . '</h2>';
		echo '</header>';
		echo '<details>';
		echo '<h4>'.'Author is ' . $article['Author'] . '</h4>';
		echo '<h4>'.'Date is ' . $article['Date'] . '</h4>';
		echo '</details>';
		echo $article['Content'];
		echo '<aside>' . $article['Adition Information'] . '</aside>';
		echo '</div>';
	}
  ?> 