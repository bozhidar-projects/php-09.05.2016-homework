<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php
$a=13;
$b=5;
$c=5;

if ($a>$b && $a>$c) {
	if ($b>$c) {
		echo $a.">".$b.">".$c;
		echo"<br>";

		echo "a>b>c";
	}
	elseif ($b=$c) {
		echo "a>b=c";
	}
	else{
		echo $a.">".$c.">".$b;
	}
}

elseif($b>$a && $b>$c){
	if ($a>$c) {
		echo $b.">".$a.">".$c;

	

	}
	else{
		echo $b.">".$c.">".$a;
	}
}

elseif($c>$a && $c>$b) {
	if ($a>$b) {
		echo $c.">".$a.">".$b;

	
	}
	else{
		echo $c.">".$b.">".$a;
	}
}


elseif($c>$a && $c>$b) {
	if ($a>$b) {
		echo $c.">".$a.">".$b;

	
	}
	else{
		echo $c.">".$b.">".$a;
	}
}




elseif ($a==$b && $a>$c) {
echo "a=b>c";
}
elseif ($a==$c && $a>$b) {
echo "a=c>b";
}
elseif ($b==$c && $b>$a) {
echo "b=c>a";
 }

else{
echo "a=b=c";
 }

 ?>
 </body>
 </html>