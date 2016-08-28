<DOCTYPE html>
<html>
	<head>
		<title>Table of Studentfs</title>
		<link href="https://fonts.googleapis.com/css?family=Questrial" rel="stylesheet">
    </head>


    <style>
    .container{
    	width:420px;
    	margin:0 auto;
    }
    table{
    	font-family: 'Questrial', sans-serif;
        width:100%;
    	border-collapse:collapse;
    }
     
    body .container table thead tr td{
        text-align: center;
        font-size: 24px;
        background-color: #ff6f68;
        color: #fff;

    } 

    table tr td{
        color: #000;
        border: 1px solid #20364c;
        padding: 10px 20px;
    } 

    table tr:nth-child(even) td{    
        background-color: #ededed;
    } 

    table tr:nth-child(odd) td{
            
        background-color:#fdfdfd;
   
    } 

    </style>


    <body>
    <div class="container">
    <table>
    	
        <thead>
        <tr>
            <td>#</td>
    		<td>Ime</td>
            <td>Familiq</td>
            <td>Nomer</td>
            <td>Universitet</td>
        </tr>
    	</thead>
   
    <?php 
      $i=0;
      $students = array(
            array("Ivan", "Ivanov", "0888145131", "Tu-Sofia"),
            array("Milen", "Stanimirov", "0888145131", "UNSS"),
            array("Vasil", "Miroslavov", "0898214124", "Unibit"),
            array("Petko", "Ivanov", "0888145131", "Tu-Sofia"),
            array("Mira", "Stanimirov", "0888145131", "VINS"),
            array("Daniela", "Grigorova", "0898214124", "NBU")
  
        );
     foreach ($students as $student) {
        $i+=1;
        echo '<tr><td>' .$i. '</td><td>'. $student[0]. '</td><td>'.$student[1] . '</td><td>'.$student[2] . '</td><td>'.$student[3] . '</td></tr>' ;
     }

    ?>
    </table>
    </div>

    </body>


</html>    