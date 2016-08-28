<!DOCTYPE html>
<html>
<head>
	<title>OR Logic Operator</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="index_table_css.css">
</head>
<body>
	<table>
		<caption>I'll have money to go on a summer vacation if I</caption>
		<thead>
			<tr>
				<th class="width">borrow from a friend</th>
				<th class="width">get a money bonus</th>
				<th class="width">Result</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<?php 
					$x = "false";
					$y = "false";
					$result = "false";
				?>
				<td>
					<?php echo $x;?>
				</td>
				<td>
					<?php echo $y;?>
				</td>
				<td>
					<?php echo $result;?> 
				</td>
			</tr>
			<tr>
				<?php 
					$x = "false";
					$y = "true";
					$result = "true";
				?>
				<td>
					<?php echo $x;?>
				</td>
				<td>
					<?php echo $y;?>
				</td>
				<td>
					<?php echo $result;?>
				</td>
			</tr>
			<tr>
				<?php 
					$x = "true";
					$y = "false";
					$result = "true";
				?>
				<td>
					<?php echo $x;?>
				</td>
				<td>
					<?php echo $y;?>
				</td>
				<td>
					<?php echo $result;?>
				</td>
			</tr>
			<tr>
				<?php 
					$x = "true";
					$y = "true";
					$result = "true";
				?>
				<td> 
					<?php echo $x;?>
				</td>
				<td>
					<?php echo $y;?>
				</td>
				<td>
					<?php echo $result;?>
				</td>
			</tr>
		</tbody>
	</table>

</body>
</html>