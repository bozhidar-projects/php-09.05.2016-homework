<!DOCTYPE html>
<html>
<head>
	<title>AND Logic Operator</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="index_table_css.css">
</head>
<body>
	<table>
		<caption>I'm going on a summer vacation if I</caption>
		<thead>
			<tr>
				<th class="width">have money</th>
				<th class="width">have time</th>
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
					$x = "true";
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