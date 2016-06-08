<!DOCTYPE html>
<html>
<head>
	<title>Logic operator's table</title>
	<link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
<header>
	<h1>This table describes the logical operators in php</h1>	
</header>

<table class="operator-and">
	<thead>
	<tr>
		<th colspan="3" class="tab-heading">Operator and</th>
	</tr>
	<tr>
			<th>Condition1</th>
			<th>Condition2</th>
			<th>Result</th>
	</tr>
	</thead>
	<tbody>
	<tr>
		<td><?php echo "false"; ?></td>
		<td><?php echo "false"; ?></td>
		<td><?php echo "false"; ?></td>
	</tr>
	<tr>
		<td><?php echo "false"; ?></td>
		<td><?php echo "true"; ?></td>
		<td><?php echo "false"; ?></td>
	</tr>
	<tr>
		<td><?php echo "true"; ?></td>
		<td><?php echo "true"; ?></td>
		<td><?php echo "true"; ?></td>
	</tr>
	</tbody>
</table>

<table class="operator-or">
	<thead>
	<tr>
		<th colspan="3" class="tab-heading">Operator or</th>
	</tr>
	<tr>
		<th>Condition1</th>
		<th>Condition2</th>
		<th>Result</th>
	</tr>
	</thead>
	<tbody>
	<tr>
		<td><?php echo "false"; ?></td>
		<td><?php echo "false"; ?></td>
		<td><?php echo "false"; ?></td>
	</tr>
	<tr>
		<td><?php echo "false"; ?></td>
		<td><?php echo "true"; ?></td>
		<td><?php echo "true"; ?></td>
	</tr>
	<tr>
		<td><?php echo "true"; ?></td>
		<td><?php echo "true"; ?></td>
		<td><?php echo "true"; ?></td>
	</tr>
	</tbody>
</table>


<table class="operator-not">
	<thead>
	<tr>
		<th colspan="2" class="tab-heading">Operator not</th>
	</tr>
	<tr>
		<th>Condition1</th>
		<th>Result</th>
	</tr>
	</thead>
	<tbody>
	<tr>
		<td><?php echo "true"; ?></td>
		<td><?php echo "false"; ?></td>
	</tr>
	<tr>
		<td><?php echo "false"; ?></td>
		<td><?php echo "true"; ?></td>
	</tr>
	</tbody>
</table>


<!--DYNAMIC ALLOCATION -->
<h1>This table displays dynamically the php operators</h1>
<?php 
$condition1 = true;
$condition2 = false;
?>
<table class="operator-and">
	<thead>
	<tr>
		<th colspan="3" class="tab-heading">Operator and</th>
	</tr>
	<tr>
			<th>Condition1</th>
			<th>Condition2</th>
			<th>Result</th>
	</tr>
	</thead>
	<tbody>
	<tr>
		<td><?php 
				if ($condition1) {echo "True";}
				else {echo "False";}
			?>				
			</td>
		<td><?php 
				if ($condition2) {echo "True";}
				else {echo "False";}
			?>				
			</td>
		<td><?php 
				if ($condition1 && $condition2) {
					echo "TRUE";
				}
				else {
					echo "FALSE";
				}
			?>
		</td>
	</tr>
	</tbody>
</table>

<table class="operator-or">
	<thead>
	<tr>
		<th colspan="3" class="tab-heading">Operator or</th>
	</tr>
	<tr>
		<th>Condition1</th>
		<th>Condition2</th>
		<th>Result</th>
	</tr>
	</thead>
	<tr>
		<td><?php 
				if ($condition1) {echo "True";}
				else {echo "False";}
			?>				
			</td>
		<td><?php 
				if ($condition2) {echo "True";}
				else {echo "False";}
			?>				
			</td>
		<td><?php 
				if ($condition1 || $condition2) {
					echo "TRUE";
				}
				else {
					echo "FALSE";
				}
			?>
		</td>
	</tr>		
		</td>
	</tr>
	</tbody>
</table>


<table class="operator-not">
	<thead>
	<tr>
		<th colspan="2" class="tab-heading">Operator not</th>
	</tr>
	<tr>
		<th>Condition1</th>
		<th>Result</th>
	</tr>
	</thead>
	<tbody>
	<tr>
		<td><?php 
				if ($condition1) {echo "True";}
				else {echo "False";}
			?>				
		</td>
		<td><?php
		 	if ($condition1) {echo "False";}
		 	else {echo "True";}
		 ?>		 	
		 </td>
	</tr>
	</tbody>
</table>

</body>
</html>