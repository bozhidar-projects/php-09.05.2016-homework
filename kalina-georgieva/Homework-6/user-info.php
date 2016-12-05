<DOCTYPE html>
<html>
	<head>
		<title>Login</title>
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    </head>


    <body>
    <style>
        body {
            font-family: 'Roboto', sans-serif;
        }
        ul{
            list-style:none;
            width:420px;
            margin:0 auto;
        }

        ul li{
            padding:10px;
            border-bottom:1px solid pink;
        }

    </style>

    <?php 

        $fname = "";
        if (isset($_POST['fname'])) {
            $fname = $_POST['fname'];
        }
        
        $lname = "";
        if (isset($_POST['lname'])) {
            $lname = $_POST['lname'];
        }

        $password = "";
        if (isset($_POST['password'])) {
            $password = $_POST['password'];
        }

        $gender = "";
        if (isset($_POST['gender'])) {
            $gender = $_POST['gender'];
        }

        $country = "";
        if (isset($_POST['country'])) {
            $country = $_POST['country'];
        }

    ?>

        <ul>
            <li><h2>User Info</h2></li>
           <li>FIRST NAME: <?php echo $fname?></li>
           <li>LAST NAME: <?php echo $lname?></li>
           <li>PASS: <?php echo $password?></li>
           <li>GENDER: <?php echo $gender?></li>
           <li>COUNTRY: <?php echo $country?></li>
        </ul>

    </body>


</html>    