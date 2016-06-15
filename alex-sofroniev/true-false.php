<!DOCTYPE html>
<html>
<head>
<style>

#td1 {
	background-color: red;
	border: 3px solid black;
	font-size: 30px;
}

#td2 {
	background-color: green;
	border: 3px solid yellow;
	font-size: 30px;
}

#td3 {
	background-color: blue;
	border: 3px solid red;
	font-size: 30px;
}

</style>




	<title></title>
</head>
<body>
<table>
	<caption>Go to the fitness</caption>
	<thead>
		<tr>
			<th>Friends</th>
			<th>Music</th>
			<th>Result</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<?php 
				$x = "false";
				$y = "false";
				$result = "false";
			 ?>
			 <td id="td1">
			 	<?php echo $x;?>
			 </td>
			 <td id="td2">
			 	<?php echo $y;?>
			 </td>
			 <td id="td3">
			 	<?php echo $result;?>
			 </td>
		</tr>
		<tr>
			<?php 
				$x = "false";
				$y = "true";
				$result = "false";
			 ?>
			 <td id="td1">
			 	<?php echo $x;?>
			 </td>
			 <td id="td2">
			 	<?php echo $y;?>
			 </td>
			 <td id="td3">
			 	<?php echo $result;?>
			 </td>
		</tr>
		<tr>
			<?php 
				$x = "true";
				$y = "false";
				$result = "false";
			 ?>
			 <td id="td1">
			 	<?php echo $x;?>
			 </td>
			 <td id="td2">
			 	<?php echo $y;?>
			 </td>
			 <td id="td3">
			 	<?php echo $result;?>
			 </td>
		</tr>
		<tr>
			<?php 
				$x = "true";
				$y = "true";
				$result = "true";
			 ?>
			 <td id="td1">
			 	<?php echo $x;?>
			 </td>
			 <td id="td2">
			 	<?php echo $y;?>
			 </td>
			 <td id="td3">
			 	<?php echo $result;?>
			 </td>
		</tr>
	</tbody>
</table>

</body>
</html>