<!DOCTYPE html>
<html>
<head>
	<title>Homework4</title>
</head>
<body>
	<header>
		<h2>Homework4</h2>
	</header>
	<main>
	
		<h3>Excercise1</h3>
	 <?php 
	 $a = 10;
	 $b = 5;
	 $c = 3;
	 $x=-$b/2*$a;
	 $d = $b**2 - 4*$a*$c;
	 $x1=(-$b+sqrt($d))/(2*$a);
	 $x2=(-$b-sqrt($d))/(2*$a);
	echo "<h4>".$a."x<sup>2</sup> + ".$b."x + ".$c." = 0</h4>";
	 if($d<0){
	 	echo "no radical!";
	 }
	 elseif ($d==0) {
	 	echo "With 1 radicals:<br>";
	 	echo $x;
	 }
	 else{
	 	echo "With 2 radicals:<br>";
	 	echo $x1."<br>";
	 	echo $x2;
	 }
	 
	 ?>
	 </main>
</body>
</html>