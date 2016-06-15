<!DOCTYPE html>
<html>
<head>
	<title>NOT Logic Operator</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="index_table_css.css">
</head>
<body>
	<table>
		<caption>I'll have more time to go on a summer vacation if I</caption>
		<thead>
			<tr>
				<th class="more-width">work more</th>
				<th class="more-width">Result</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<?php 
					$x = "false";
					$result = "true";
				?>
				<td>
					<?php echo $x;?>
				</td>
				<td>
					<?php echo $result;?> 
				</td>
			</tr>
			<tr>
				<?php 
					$x = "true";
					$result = "false";
				?>
				<td>
					<?php echo $x;?>
				</td>
				<td>
					<?php echo $result;?>
				</td>
			</tr>
		</tbody>
	</table>

</body>
</html>