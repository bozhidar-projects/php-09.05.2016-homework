<DOCTYPE html>
<html>
	<head>
		<title>Dictiopnary</title>
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
    table thead tr td{
        text-align:center;
        font-size:24px;

    }
    table tr td{
    	    width: 50%;
    background-color: #445875;
    color: #fff;
    border: 1px solid #20364c;
    padding: 10px 20px;
    } 

    .row_2 td{

    	background-color:#ce435c;
    	color: #ffff8c;
    }




    </style>


    <body>
    <div class="container">
    <table>
    	
    
    		<thead>
    			<td colspan="2">English French Dictionary</td>
    			

    	    </thead>
    
    	<tr class="row_2">
    			<td>Word in English</td>
    			<td>Translation</td>

    	    </tr>
    

    <?php 

     $dictionary = array(
                "Hello" => "Bounjour",
                "Good evening" => "Bonsoir!",
                "Welcome" => "Bienvenu",
                "Thanks" => "Merci",
                "cat" => "chat",
                "wine" => "vin"
                
            );

     foreach ($dictionary as $word=>$translation) {

     	echo '<tr><td>' .$word. '</td><td>'. $translation. '</td></tr>' ;
     }

    

       


    ?>

    </table>
    </div>

    </body>


</html>    