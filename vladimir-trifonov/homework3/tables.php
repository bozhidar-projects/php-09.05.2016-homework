<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="tables.css">
</head>
<body>
<h1>THE</h1>
<table>
	<thead>
		<th>
			argument 1
		</th>
		<th>
			argument 2
		</th>
		<th id="result_column">
			result
		</th>
	</thead>
	<tbody>
		<tr>
			<?php $x="false";
				  $y="false";
				  $result="false";	
			?>
		<td>
			<?php echo $x;?>
		</td>
		<td>
			<?php echo $y;?>
		</td>
		<td id="result_column">
			<?php echo $result ?>
		</td>

		</tr>
		<tr>
			<?php $x="true";
				  $y="false";
				  $result="false";	
			?>
		<td>
			<?php echo $x;?>
		</td>
		<td>
			<?php echo $y;?>
		</td>
		<td id="result_column">
			<?php echo $result ?>
		</td>

		</tr>
		<tr>
			<?php $x="false";
				  $y="true";
				  $result="false";	
			?>
		<td>
			<?php echo $x;?>
		</td>
		<td>
			<?php echo $y;?>
		</td>
		<td id="result_column">
			<?php echo $result ?>
		</td>

		</tr>
		<tr>
			<?php $x="true";
				  $y="true";
				  $result="true";	
			?>
		<td>
			<?php echo $x;?>
		</td>
		<td>
			<?php echo $y;?>
		</td>
		<td id="result_column">
			<?php echo $result ?>
		</td>

		</tr>
	</tbody>
</table>
<br>
<br> 
<br>

<h1>OR</h1>

<table>
	<thead>
		<th>
			argument 1
		</th>
		<th>
			argument 2
		</th>
		<th id="result_column">
			result
		</th>
	</thead>
	<tbody>
		<tr>
			<?php $x="false";
				  $y="false";
				  $result="false";	
			?>
		<td>
			<?php echo $x;?>
		</td>
		<td>
			<?php echo $y;?>
		</td>
		<td id="result_column">
			<?php echo $result ?>
		</td>

		</tr>
		<tr>
			<?php $x="true";
				  $y="false";
				  $result="true";	
			?>
		<td>
			<?php echo $x;?>
		</td>
		<td>
			<?php echo $y;?>
		</td>
		<td id="result_column">
			<?php echo $result ?>
		</td>

		</tr>
		<tr>
			<?php $x="false";
				  $y="true";
				  $result="true";	
			?>
		<td>
			<?php echo $x;?>
		</td>
		<td>
			<?php echo $y;?>
		</td>
		<td id="result_column">
			<?php echo $result ?>
		</td>

		</tr>
		<tr>
			<?php $x="true";
				  $y="true";
				  $result="true";	
			?>
		<td>
			<?php echo $x;?>
		</td>
		<td>
			<?php echo $y;?>
		</td>
		<td id="result_column">
			<?php echo $result ?>
		</td>

		</tr>
	</tbody>
</table>
<br>
<br>

<h1>NOT</h1>

<table>
	<thead>
		<th>
			argument 1
		</th>
		
		<th id="result_column">
			result
		</th>
	</thead>
	<tbody>
		<tr>
			<?php $x="false";	 
				  $result="true";	
			?>
		<td>
			<?php echo $x;?>
		</td>
		
		<td id="result_column">
			<?php echo $result ?>
		</td>

		</tr>
		<tr>
			<?php $x="true";
				 				  $result="false";	
			?>
		<td>
			<?php echo $x;?>
		</td>
		
		<td id="result_column">
			<?php echo $result ?>
		</td>

		</tr>
		<tr>
			<?php $x="false";
				  $y="true";
				  $result="true";	
			?>
		
	</tbody>
</table>
</body>
</html>