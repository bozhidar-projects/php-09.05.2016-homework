<?php
	foreach ($makeup as $make_up) {
		echo '<div class = "make-up">';
		echo '<header>';
		echo '<h3>' . $make_up['title'] . '</h3>';
		echo '</header>';
		echo '<h4>' . $make_up['author'] . '</h4>';
		echo '<p>' . $make_up['date'] . '</p>';
		echo '<aside>' . $make_up['additional-information'] . "</aside>";
		echo '<p>' . $make_up['content'] . "</p>";
		echo '</div>';
	}
?>