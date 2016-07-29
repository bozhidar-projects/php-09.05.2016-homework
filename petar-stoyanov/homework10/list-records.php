<table>
	<tr>
		<th>ID</th>
		<?php 
			foreach ($column_names as $column_name) {
				echo "<th>" . $column_name . "</th>";
			}
		?>
	</tr>
	<?php
		$i = 0;
		foreach ($members as $member) {
			echo "<tr>";
			echo "<td>" . $i++ . "</td>";
			foreach ($column_names as $column_name) {
				echo "<td>" . $member[$column_name] . "</td>";
			}
			echo "</tr>";
		}
	?>
</table>