<!DOCTYPE html>
<html>
	<head>
		<title>Logic operators</title>
		<style>
			body{
				font-family:'Arial', sans-serif;
				font-size:14px;
				letter-spacing:2px;


			}

		    table { 
		    	border-collapse:collapse;
		    	margin-right:20px;
		    	float:left;

		    }

		    thead td{
		    	background-color:#555;
		    	color:#fff;
		    }
		    thead tr td:last-child{
		    	background-color:#555;
		    	color:#fff;

		    }

			td {
				border:1px solid #ddd;
				background-color:#9C6868;
				color:#fff;
				padding:10px;
				text-transform:capitalize;
				font-family:'Arial', sans-serif;
			}

			tr td:last-child{
				background-color:#751F2E;

			}

			caption{
				padding:20px 0;

			}

			.container{
				width:900px;
				margin:0 auto;
			}
		</style>
    </head>

	<body>  

	<div class="container">

		<table>
		    <caption>AND logic operator</caption>
		    <thead>

		      <tr>
		          <td>Arg1</td>
			      <td>Arg2</td>
			      <td>Result</td>
		      </tr>
		    </thead>
		    <tbody>
			    <tr>
			           <?php $x = true;
			                  $y= true;
			            ?>
			          <td><?php echo $x ? 'true' : 'false'; ?></td>
				      <td><?php echo $y ? 'true' : 'false'; ?></td>
				      <td><?php echo ($x && $y )? 'true' : 'false'; ?></td>
			      </tr>


			      <tr>


			           <?php $x = true;
			                  $y= false;
			            ?>
			          <td><?php echo $x ? 'true' : 'false'; ?></td>
				      <td><?php echo $y ? 'true' : 'false'; ?></td>
				      <td><?php echo ($x && $y) ? 'true' : 'false'; ?></td>
			      </tr>
			      <tr>
			           <?php $x = false;
			                  $y= true;
			            ?>
			          <td><?php echo $x ? 'true' : 'false'; ?></td>
				      <td><?php echo $y ? 'true' : 'false'; ?></td>
				      <td><?php echo ($x && $y) ? 'true' : 'false';?></td>
			      </tr>
				<tr>
		           <?php $x = false;
		                  $y= false;
		            ?>
		          <td><?php echo $x ? 'true' : 'false'; ?></td>
			      <td><?php echo $y ? 'true' : 'false'; ?></td>
			      <td><?php echo ($x && $y)? 'true' : 'false'; ?></td>
		        </tr>
		    </tbody>
		</table>
		<table>
		    <caption>OR logic operator</caption>
		    <thead>

		      <tr>
		          <td>Arg1</td>
			      <td>Arg2</td>
			      <td>Result</td>
		      </tr>
		    </thead>
		    <tbody>
			    <tr>
			           <?php $x = true;
			                  $y= false;
			            ?>
			          <td><?php echo $x ? 'true' : 'false'; ?></td>
				      <td><?php echo $y ? 'true' : 'false'; ?></td>
				      <td><?php echo ($x or $y )? 'true' : 'false'; ?></td>
			    </tr>


			    <tr>
			           <?php $x = true;
			                  $y= true;
			            ?>
			          <td><?php echo $x ? 'true' : 'false'; ?></td>
				      <td><?php echo $y ? 'true' : 'false'; ?></td>
				      <td><?php echo ($x or $y) ? 'true' : 'false'; ?></td>
			    </tr>
			    <tr>
			          <?php $x = false;
			                  $y= true;
			            ?>
			           
			          <td><?php echo $x ? 'true' : 'false'; ?></td>
				      <td><?php echo $y ? 'true' : 'false'; ?></td>
				      <td><?php echo ($x or $y) ? 'true' : 'false';?></td>
			    </tr>
		        <tr>
			           
			            <?php $x = false;
			                  $y= false;
			            ?>
			          <td><?php echo $x ? 'true' : 'false'; ?></td>
				      <td><?php echo $y ? 'true' : 'false'; ?></td>
				      <td><?php echo ($x or $y)? 'true' : 'false'; ?></td>
			    </tr>
		    </tbody>
		</table>
		<table>
		    <caption>NOT logic operator</caption>
		    <thead>
		      <tr>
		          <td>Arg</td>
			     
			      <td>Result</td>
		      </tr>
		    </thead>
		    <tbody>
			    <tr>


			           <?php $x = true;
			                  $y= false;
			            ?>
			          <td><?php echo $x ? 'trus' : 'false'; ?></td>
				      <td><?php echo $y ? 'true' : 'false'; ?></td>
				     
			    </tr>
			    <tr>
			           <?php $x = true;
			                  $y= false;
			            ?>
			          <td><?php echo !$x ? 'true' : 'false'; ?></td>
				      <td><?php echo !$y ? 'true' : 'false'; ?></td>
				     
			    </tr>
		    </tbody>
		</table>
	</div>
	</body>
</html>

