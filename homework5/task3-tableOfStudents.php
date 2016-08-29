<!DOCTYPE html>
<html>
<head>
	<title>Table of Students</title>
</head>
<style type="text/css">
	table{
		width: 350px;
		margin: auto;
		border:1px dotted grey;
	}
	th{
		background-color: #3399ff;
		text-align: center;
		font-size: 20px;
	}
	tr{
		background-color:#e6f2ff;
	}
	td{
		text-align: left;
		padding-left: 10px;
		font-size: 16px;
	}
</style>
<body>
	<table>
		<thead>
			<tr>
				<th>First name</th>
				<th>Last name</th>
				<th>University</th>
			</tr>
		</thead>
		<tbody>
			<?php 
			$students=array(
				array("Veselinka","Blazheva","Tu-Sofia/Unibit"),
				array("Petya","Spasova","Unibit"),
				array("Nikolai","Ivanov","Tu-Sofia"),
				array("Tihomir","Todorov","Tu-Sofia"),
				array("Mihaela","Etropolska","SU"),
				array("Bozhidar","Dimitrov","Tu-Sofia"),
				array("Ognqn","Nakov","Tu-Sofia"),
				array("Oshte","Edin","UNSS"),
				array("Poreden","Studentkov","UNSS")
				);
			for ($i=0; $i < count($students); $i++) {
				echo "<tr>";
				$row=$students[$i];
				for ($j=0; $j <count($row) ; $j++) { 
					echo "<td>";
					echo $row[$j];
					echo"</td>";
				}
				echo"</tr>";
			}




			?>
		</tbody>
	</table>
</body>
</html>