<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="and-or-not-style.css">
</head>
<body>
<table>
	<caption><h2>AND Logic Operator</h2></caption>
	<thead>
		<tr>
			<th>Argument 1</th>
			<th>Argument 2</th>
			<th>Result</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<?php $x = "false";
				  $y = "false";
				  $result = "false";
			?>
			<td class="false">
				<?php echo $x; ?>
			</td>
			<td class="false">
				<?php echo $y; ?>
			</td>
			<td class="false">
				<?php echo $result; ?> 
			</td>
		</tr>
		<tr>
			<?php $x = "true";
				  $y = "false";
				  $result = "false";
			?>
			<td class="true">
				<?php echo $x; ?>
			</td>
			<td class="false">
				<?php echo $y; ?>
			</td>
			<td class="false">
				<?php echo $result; ?> 
			</td>
		</tr>
		<tr>
			<?php $x = "false";
				  $y = "true";
				  $result = "false";
			?>
			<td class="false">
				<?php echo $x; ?>
			</td>
			<td class="true">
				<?php echo $y; ?>
			</td>
			<td class="false">
				<?php echo $result; ?> 
			</td>
		</tr>
		<tr>
			<?php $x = "true";
				  $y = "true";
				  $result = "true";
			?>
			<td class="true">
				<?php echo $x; ?>
			</td>
			<td class="true">
				<?php echo $y; ?>
			</td>
			<td class="true">
				<?php echo $result; ?> 
			</td>
		</tr>
	</tbody>
</table>
<table>
	<caption><h2>OR Logic Operator</h2></caption>
	<thead>
		<tr>
			<th>Argument 1</th>
			<th>Argument 2</th>
			<th>Result</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<?php $x = "false";
				  $y = "false";
				  $result = "false";
			?>
			<td class="false">
				<?php echo $x; ?>
			</td>
			<td class="false">
				<?php echo $y; ?>
			</td>
			<td class="false">
				<?php echo $result; ?>
			</td>
		</tr>
		<tr>
			<?php $x = "true";
				  $y = "false";
				  $result = "true";
			?>
			<td class="true">
				<?php echo $x; ?>
			</td>
			<td class="false">
				<?php echo $y; ?>
			</td>
			<td class="true">
				<?php echo $result; ?>
			</td>
		</tr>
		<tr>
			<?php $x = "false";
				  $y = "true";
				  $result = "true";
			?>
			<td class="false">
				<?php echo $x; ?>
			</td>
			<td class="true">
				<?php echo $y; ?>
			</td>
			<td class="true">
				<?php echo $result; ?>
			</td>
		</tr>
		<tr>
			<?php $x = "true";
				  $y = "true";
				  $result = "true";
			?>
			<td class="true">
				<?php echo $x; ?>
			</td>
			<td class="true">
				<?php echo $y; ?>
			</td>
			<td class="true">
				<?php echo $result; ?>
			</td>
		</tr>
	</tbody>
	<table>
	<caption><h2>NOT Logic Operator</h2></caption>
	<thead>
		<tr>
			<th>Argument 1</th>
			<th>Result</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<?php $x = "true";
				  $result = "false";
			?>
			<td class="true">
				<?php echo $x; ?>
			</td>
			<td class="false">
				<?php echo $result; ?>
			</td>
		</tr>
		<tr>
			<?php $x = "false";
				  $result = "true";
			?>
			<td class="false">
				<?php echo $x; ?>
			</td>
			<td class="true">
				<?php echo $result; ?>
			</td>
		</tr>
	</tbody>
</table>
</body>
</html>