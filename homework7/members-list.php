<!DOCTYPE html>
<html>
<head>
	<title>Members</title>
	<style type="text/css">
	body{
		background-image: url("image.jpg");
		background-size: 90em;
	}
	table{
		background-color: blue;
		border: 1px solid grey;
			border-spacing: 3px;
		}
		td{
			background-color: yellow;
			border: 1px solid grey;
		}
		
		tr{
			background-color: white;
		}
		
	</style>
</head>
<body>
	<header>
		<h2 id="h2">Table</h2>
	</header>
	<table id="table">
		<tr>
			<th colspan="5">Students table</th>
		</tr>
		<th>Firstname</th>
		<th>Lastname</th>
		<th>Image-url</th>
		<th>Phone </th>
		<th>University </th>
		<?php 
	foreach ($members as $member) {
		echo '<div class="members">';
		
		
		
		echo '<tr>';
		echo '<td>'.$member['firstname']. '</td>';
		echo '<td>'.$member['lastname']. '</td>';
		echo '<td>'.$member['image-url']. '</td>';
		echo '<td>'.$member['phone']. '</td>';
		echo '<td>'.$member['university']. '</td>';
		echo '</tr>';
		
		echo '</div>';
	}
 ?>
	</table>
</body>
</html>
<!-- <?php 
	foreach ($members as $member) {
		echo '<div class="members">';
		
		echo '<tr>';
		echo '<th>Students table</th>';
		echo '</tr>';
		echo '<th>'.'Firstname'. '</th>'.'<th>'.'Lastname '.'</th>'.'<th>'. 'Image-url '.'</th>'.'<th>'. 'Phone '.'</th>'.'<th>'.'University'. '</th>';
		echo '<tr>';
		echo '<td>'.$member['firstname']. '</td>';
		echo '<td>'.$member['lastname']. '</td>';
		echo '<td>'.$member['image-url']. '</td>';
		echo '<td>'.$member['phone']. '</td>';
		echo '<td>'.$member['university']. '</td>';
		echo '</tr>';
		
		echo '</div>';
		echo '<tr>';
		echo '<th>Students table</th>';
		echo '</tr>';
		echo '<th>'.'Firstname'. '</th>'.'<th>'.'Lastname '.'</th>'.'<th>'. 'Image-url '.'</th>'.'<th>'. 'Phone '.'</th>'.'<th>'.'University'. '</th>';
	}
 ?> -->
<!--  echo '<header>';
		echo '<h2>'.'Table'.'</h2>';
		echo '</header>';
		echo '<table>';
		echo '</table>'; -->