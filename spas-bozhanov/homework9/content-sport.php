<?php
	$i = 0;
	foreach ($ssection as $sarticle) {
		foreach ($column_names as $column_name) {
			echo "<p><h4>" . $column_name . "</h4></p>";
			echo "<p>" . $sarticle[$column_name] . "</p>";
		}
	}
?>