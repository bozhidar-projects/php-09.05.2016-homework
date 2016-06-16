<!DOCTYPE html>
<html>
<head>	
	<title> bvc</title>
	<link rel="stylesheet" type="text/css" href="logic_operators.css">
</head>
<body>
<table>
	<caption>And Logic Operator</caption>
	<thead bgcolor="#e6ffe6">
		<tr>
			<th>Argument 1</th>
			<th>Argument 2</th>
			<th>Result</th>
		</tr>
	</thead>
	<tbody>
		<tr bgcolor="#ff704d">
			<?php
				$x = "true";
				$z = "false";
			?>
			<td>
				<?php echo $z;?>
			</td>
			<td>
				<?php echo $z;?>
			</td>
			<td>
				<?php echo $z;?>
			</td>
		</tr>
		<tr>
			<td bgcolor="#ff704d">
				<?php echo $z;?>
			</td>
			<td bgcolor="#00FF00">
				<?php echo $x;?>
			</td>
			<td bgcolor="#ff704d">
				<?php echo $z;?>
			</td>
		</tr>
		<tr>
			<td bgcolor="#00FF00">
				<?php echo $x;?>
			</td>
			<td bgcolor="#ff704d">
				<?php echo  $z;?>
			</td>
			<td bgcolor="#ff704d">
				<?php echo  $z;?>
			</td>
		</tr>
		<tr bgcolor="#00FF00">
			
			<td>
				<?php echo $x;?>
			</td>
			<td>
				<?php echo  $x;?>
			</td>
			<td>
				<?php echo  $x;?>
			</td>
		</tr>
	</tbody>
</table>
<table>
	<caption class="color1">OR Logic Operator</caption>
	<thead bgcolor="#e6ffe6">
		<tr>
			<th>Argument 1</th>
			<th>Argument 2</th>
			<th>Result</th>
		</tr>
	</thead>
	<tbody>
		<tr bgcolor="#ff704d">
			<?php
				$x = "true";
				$z = "false";
			?>
			<td>
				<?php echo $z;?>
			</td>
			<td>
				<?php echo $z;?>
			</td>
			<td>
				<?php echo $z;?>
			</td>
		</tr>
		<tr>
			<td bgcolor="#ff704d">
				<?php echo $z;?>
			</td>
			<td bgcolor="#00FF00">
				<?php echo $x;?>
			</td>
			<td bgcolor="#00FF00">
				<?php echo $x;?>
			</td>
		</tr>
		<tr>
			<td bgcolor="#00FF00">
				<?php echo $x;?>
			</td>
			<td bgcolor="#ff704d">
				<?php echo  $z;?>
			</td>
			<td bgcolor="#00FF00">
				<?php echo  $x;?>
			</td>
		</tr>
		<tr bgcolor="#00FF00">
			
			<td>
				<?php echo $x;?>
			</td>
			<td>
				<?php echo  $x;?>
			</td>
			<td>
				<?php echo  $x;?>
			</td>
		</tr>
	</tbody>
</table>
<table>
	<caption class="color2">NOT Logic Operator</caption>
	<thead bgcolor="#e6ffe6">
		<tr>
			<th>Argument 1</th>
			<th>Argument 2</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<?php
				$x = "true";
				$z = "false";
			?>
			<td bgcolor="#00FF00">
				<?php echo $x;?>
			</td>
			<td bgcolor="#ff704d">
				<?php echo $z;?>
			</td>
		</tr>
		<tr>
			<td bgcolor="#ff704d">
				<?php echo $z;?>
			</td>
			<td bgcolor="#00FF00">
				<?php echo $x;?>
			</td>
		</tr>
	</tbody>
</table>
</body>
</html>
