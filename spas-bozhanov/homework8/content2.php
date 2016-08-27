<?php
	foreach ($sports as $sport) {
		echo '<div class = "sports">';
		echo '<header>';
		echo '<h3>' . $sport['title'] . '</h3>';
		echo '</header>';
		echo '<h4>' . $sport['author'] . '</h4>';
		echo '<p>' . $sport['date'] . '</p>';
		echo '<aside>' . $sport['additional-information'] . "</aside>";
		echo '<p>' . $sport['content'] . "</p>";
		echo '</div>';
	}
?>