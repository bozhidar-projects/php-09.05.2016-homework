<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
<h1><span>LOGIC OPERATORS<span></h1>
<table id="first-table">
	<caption>
		AND Logic Oparator
	</caption>
	<thead>
	<tr>
		<th>Ar1</th>
	     <th>Ar2</th>
	     <th>Result</th>
	</tr>
	</thead>
	<tbody>
		<tr>
			<?php $x = "true";
			      $y = "true";
			      $result = "true";
			      ?>
			      <td bgcolor="green">
			      	<?php echo  $x;?>
			      </td>
			      <td bgcolor="green">
			      	<?php echo  $y;?>
			      </td>
			      <td bgcolor="green">
			      	<?php echo  $result ;?>
			      </td>
		</tr>
		<tr>
			<?php $x = "true";
			      $y = "false";
			      $result = "false";
			      ?>
			      <td bgcolor="green">
			      	<?php echo  $x;?>
			      </td>
			      <td bgcolor="red">
			      	<?php echo  $y;?>
			      </td>
			      <td bgcolor="red">
			      	<?php echo  $result ;?>
			      </td>
		</tr>
		<tr>
			<?php $x = "false";
			      $y = "true";
			      $result = "false";
			      ?>
			      <td bgcolor="red">
			      	<?php echo  $x;?>
			      </td>
			      <td bgcolor="green">
			      	<?php echo  $y;?>
			      </td>
			      <td bgcolor="red">
			      	<?php echo  $result ;?>
			      </td>
		</tr>
		<tr>
			<?php $x = "false";
			      $y = "false";
			      $result = "false";
			      ?>
			      <td bgcolor="red">
			      	<?php echo  $x;?>
			      </td>
			      <td bgcolor="red">
			      	<?php echo  $y;?>
			      </td>
			      <td bgcolor="red">
			      	<?php echo  $result ;?>
			      </td>
		</tr>
	</tbody>
</table >
<table id="second-table">
	<caption>
		OR Logic Oparator
	</caption>
	<thead>
	<tr>
		<th>Ar1</th>
	     <th>Ar2</th>
	     <th>Result</th>
	</tr>
	</thead>
	<tbody>
		<tr>
			<?php $x = "true";
			      $y = "true";
			      $result = "true";
			      ?>
			      <td bgcolor="green" >
			      	<?php echo  $x;?>
			      </td>
			      <td bgcolor="green">
			      	<?php echo  $y;?>
			      </td>
			      <td bgcolor="green">
			      	<?php echo  $result ;?>
			      </td>
		</tr>
		<tr>
			<?php $x = "true";
			      $y = "false";
			      $result = "true";
			      ?>
			      <td bgcolor="green">
			      	<?php echo  $x;?>
			      </td>
			      <td bgcolor="red">
			      	<?php echo  $y;?>
			      </td>
			      <td bgcolor="green">
			      	<?php echo  $result ;?>
			      </td>
		</tr>
		<tr>
			<?php $x = "false";
			      $y = "true";
			      $result = "true";
			      ?>
			      <td bgcolor="red">
			      	<?php echo  $x;?>
			      </td>
			      <td bgcolor="green">
			      	<?php echo  $y;?>
			      </td>
			      <td bgcolor="green">
			      	<?php echo  $result ;?>
			      </td>
		</tr>
		<tr>
			<?php $x = "false";
			      $y = "false";
			      $result = "false";
			      ?>
			      <td bgcolor="red">
			      	<?php echo  $x;?>
			      </td bgcolor="red">
			      <td bgcolor="red">
			      	<?php echo  $y;?>
			      </td>
			      <td bgcolor="red">
			      	<?php echo  $result ;?>
			      </td>
		</tr>
	</tbody>
</table>
		<table id="third-table">
			<caption>
		NOT Logic Oparator
	</caption>
	<thead>
	<tr>
		<th>Ar1</th>
	    
	     <th>Result</th>
	</tr>
	</thead>
	<tbody>
		<tr>
			<?php $x = "false";
			     
			      $result = "true";
			      ?>
			      <td bgcolor="red">
			      	<?php echo  $x;?>
			      </td>
			      
			      <td  bgcolor="green">
			      	<?php echo  $result ;?>
			      </td>
		</tr>
		<tr>
			<?php $x = "true";
			      $result = "false";
			      ?>
			      <td bgcolor="green">
			      	<?php echo  $x;?>
			      </td>
			     
			      <td bgcolor="red">
			      	<?php echo  $result ;?>
			      </td>
		</tr>
		
		
		
	</tbody>
		</table>

</body>
</html>