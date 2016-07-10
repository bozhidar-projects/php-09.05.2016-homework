<?php
	$i = 0;
	foreach ($msection as $marticle) {
		foreach ($column_names as $column_name) {
			echo "<p><h4>" . $column_name . "</h4></p>";
			echo "<p>" . $marticle[$column_name] . "</p>";
		}
	}
?>