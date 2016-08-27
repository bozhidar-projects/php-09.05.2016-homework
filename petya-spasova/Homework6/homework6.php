<!DOCTYPE html>
<html>
<head>

<title>Soft HW</title>

    <link rel="stylesheet" type="text/css" href="homework6.css">
</head>

<body>
  <form action="login.php" method="post">
  <div class="container">
    <fieldset>
      <legend>Вход в Soft HW</legend>
      <label for="username">Firstname : </label>
        <input  id="firstname" name="firstname"  type="text"/><br>
        <label for="username">Lastname : </label>
        <input id="lastname" name="lastname" type="text"/><br>
        <label for="username">Email : </label>
        <input id="email" name="email" type="text" /><br>
        <label for="password">Password: </label>
        <input name="password" id="password" type="text"  /><br>
        <label for="password">Repeat password: </label>
        <input name="password" id="password" type="text"  /><br>

        <input name="gender" type="radio" value="male">Male
        <input name="gender" type="radio" value="female">Female<br>   



<?php
session_start();
$firstname=isset($_POST['firstname']) ? $_POST['firstname'] : '';
$lastname=isset($_POST['lastname']) ? $_POST['lastname'] : '';
$email=isset($_POST['email']) ? $_POST['email'] : '';
$password=isset($_POST['password']) ? $_POST['password'] : '';
$repeat_password=isset($_POST['repeat_password']) ? $_POST['repeat_password'] : '';


if($firstname=='Admin'&& $password=='1234'){

  $_SESSION['user']= array('firstname'=> $firstname,
            'password'=> $password);


  }
  ?>



        <select id="country" name="country">
        <optgroup label="Europe">
        <option>Bulgaria</option>
        <option> Romania</option>
        <option> France</option>
        <option> Germany</option>
        <option>Spain</option>
        <option>Russia</option>
        <option>Italy</option>
        <option>Greece</option>
        </optgroup>
      </select><br>


      <button type="submit">Login</button>
    </fieldset>
  </form>
  </div>
</body>
</html>

