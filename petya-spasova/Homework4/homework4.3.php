<?php

$a=10;
$b=15;
$c=20;



    if(isset($_POST['a'])){ $a = $_POST['a']; } 
    if(isset($_POST['b'])){ $b = $_POST['b']; } 
    if(isset($_POST['c'])){ $c = $_POST['c']; }

    $d = $b*$b - 4*$a*$c;
    echo $d;

    if($d < 0) {
        echo "The equation has no real solutions!";
    } elseif($d = 0) {
        echo "x = ";
        echo (-$b / 2*$a);
    } else  {
        echo "x1 = ";
        echo ((-$b + sqrt($d)) / (2*$a));
        echo "<br>";
        echo "x2 = ";
        echo ((-$b - sqrt($d)) / (2*$a));
    }
?>