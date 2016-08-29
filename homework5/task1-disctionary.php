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
				<th>English</th>
				<th>Bulgarian</th>
			</tr>
		</thead>
		<tbody>


<?php
        $dictionary = array(
                "Hello" => "Здрасти",
                "Goodbye" => "Довиждане",
                "Have a nice day" => "Лек ден",
                "Friend" => "Приятел",
                "Programmer" => "Програмист",
                "Music" => "Музика",
                "Cat" => "Котка",
                "Dog" => "Куче",
                "Etc." => "И т.н."
            );
foreach ( $dictionary as $key => $value ) {
    echo "<tr><td>".$key . "</td><td>" . $value . "</td></tr>";
}
    ?>
    </tbody>
    </table>
</body>
</html>