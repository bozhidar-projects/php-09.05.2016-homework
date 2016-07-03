<table>
	<tr>
		<th>First Name</th>
		<th>Last Name</th>
		<th>Picture</th>
		<th>Phone</th>
		<th>University</th>
	</tr>
	<?php
		foreach ($members as $member) {
			echo "<tr>";
			echo "<td>" . $member['firstname']. "</td>";
			echo "<td>" . $member['lastname']. "</td>";
			echo '<td><img src="' . $member['image']. '"></td>';
			echo "<td>" . $member['phone']. "</td>";
			echo "<td>" . $member['university']. "</td>";
			echo "</tr>";
		}
	?>
</table>