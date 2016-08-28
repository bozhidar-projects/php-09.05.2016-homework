<DOCTYPE html>
<html>
	<head>
		<title>User Registration Form</title>
        <link href="https://fonts.googleapis.com/css?family=Questrial" rel="stylesheet">
    </head>


    <body>
       <style>

       body{
         font-family: 'Questrial', sans-serif;

       }
       .user-form{
        width:430px;
        
       }

       ul{


            list-style:none;
       }
       ul li{
            margin:10px 0;
       }
       label{

                min-width: 122px;
            display:block;
       }

       input, select{
        width:100%;
            padding:2px 10px;
            line-height:22px;

       }
       input[type=radio] {
            width:auto;

       }
       button {
        font-family: 'Questrial', sans-serif;
        font-size:16px;
        width:100%;
        padding:15px;
        background:#e91e63;
        transition: background 2s;
        color:#fff;
        border:none;
        
    box-shadow: 2px 3px 0px #c3c3c3;
        margin-top:10px;

       }

       button:hover {
         background:darkblue;

       }
       </style>

        <?php 
        	$countries = array ("Bulgaria", "Denmark", "UK", "Germany", "France");
    
    	?>   


    	<form action="user-info.php" method="post" class="user-form">
    		<ul>
                <li>USER REGISTRATION</li>
                
                <li><label for="username">First Name</label>
                <input id="fname" name="fname" type="text"></li>

                <li><label for="username">Last Name</label>
                <input id="lname" name="lname" type="text"></li>

                <li><label for="password">Password</label>
                <input id="password" name="password" type="password"</li>

                <li><label for="password2">Password again</label>
                <input id="password2" name="password2" type="password"></li>

                <li><label for="gender">Gender</label>
                <input type="radio" name="gender" value="male"> Male
                <input type="radio" name="gender" value="female"> Female</li>

                <li><label for="country">Country</label>
                 <select name="country">
                    <option value="" disabled selected hidden>Please Choose...</option>

                    <?php
                       for($i=0;$i<count($countries);$i++) {

                        echo '<option value="' .$countries[$i]. '">' . $countries[$i]. '</option>';
                       }

                     ?>
                    
                </select>
                </li>

                <button type="Submit">REGISTER</button>


    

    			
    			


    		</ul>
    	</form>

    <?php 


    ?>

    </body>


</html>    