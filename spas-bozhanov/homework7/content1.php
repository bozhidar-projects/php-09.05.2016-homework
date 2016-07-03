<?php
	foreach ($travelling as $travel_section) {
		echo '<div class = "travelling">';
		echo '<header>';
		echo '<h3>' . $travel_section['title'] . '</h3>';
		echo '</header>';
		echo '<h4>' . $travel_section['author'] . '</h4>';
		echo '<p>' . $travel_section['date'] . '</p>';
		echo '<aside>' . $travel_section['additional-information'] . "</aside>";
		echo '<p>' . $travel_section['content'] . "</p>";
		echo '</div>';
	}
?>