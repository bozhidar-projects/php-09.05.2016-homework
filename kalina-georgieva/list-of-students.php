<DOCTYPE html>
<html>
	<head>
		<title>List of Students</title>
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
    		<td colspan="2">List of students</td>
    	</thead>
   
    <?php 
     $i=0;

     $students = array("Ivan Ivanov", "Petur Ivanov","Iliya Petkov","Desi Todorova","Petya Krysteva","Ivaylo Ivanov","Cvetanka Stoyanova","Svetoslava Petkova"
                
            );

     foreach ($students as $student) {
        $i+=1;
     	echo '<tr><td>' .$i. '</td><td>'. $student. '</td></tr>' ;
     }

    ?>
    </table>
    </div>

    </body>


</html>    