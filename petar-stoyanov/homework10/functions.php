<?php
	function print_table($column_names, $records) {
		echo "<table>";
		echo "<tr>";

		foreach ($column_names as $column_name) {
			echo "<th>" . $column_name . "</th>";
		}

		echo "</tr>";
		foreach ($records as $record) {
			echo "<tr>";
			foreach ($column_names as $column_name) {
				echo "<td>" . $record[$column_name] . "</td>";
			}
			echo "</tr>";
		}
		
		echo "</table>";
	}

	function print_add_form($column_names, $action) {
		echo '<form class="add-form" action="' . $action . '" method="post">';
		foreach ($column_names as $column_name) {
			echo '<label for="'.$column_name.'">' . $column_name . ':</label>';
			echo '<input id="' . $column_name . '" name="'. $column_name . '" type="text"><br>';
		}

		echo '<button type="submit">Add</button>';
		echo '</form>';
	}

	function remove_record_form($action) {
		echo '<form action="' . $action . '" method="post">';
		echo	'<label for="record-id">Record ID:</label>';
		echo	'<input id="record-id" name="ID" type="number"><br>';
		echo	'<button type="submit">Remove</button>';
		echo '</form>';
	}

	function manage_records($columns, $records, $add_action, $remove_action) {
		print_table($columns, $records);
		print_add_form($columns, $add_action);
		remove_record_form($remove_action);
	}
?>