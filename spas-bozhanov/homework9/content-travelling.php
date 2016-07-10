<?php
	$i = 0;
	foreach ($tsection as $tarticle) {
		foreach ($column_names as $column_name) {
			echo "<p><h4>" . $column_name . "</h4></p>";
			echo "<p>" . $tarticle[$column_name] . "</p>";
		}
	}
?>
