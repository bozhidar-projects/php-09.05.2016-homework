<!DOCTYPE html>
<html>
	<head>
		<title>Quadratic equation</title>
    </head>
	<body>  
	 <?php 
		$a=17;
		$b=2;
		$c=-4;
		$disc;  
		echo 'a = ' . $a . '     b = ' . $b . '    c = ' . $c . '<br>';  
		if ($a==0) {
			echo 'Uravnenieto ne e kvadratno';
		} else {
			$disc = $b*$b-4*$a*$c;
			if ($disc<0){
				echo 'Nqma realni koreni';
			} elseif($disc==0) {
				echo 'X<sub>1</sub> = X<sub>2</sub> = '.-$b/2*$a;
			  } else {
			  	echo 'X<sub>1</sub> = '. -($b+sqrt($disc))/(2*$a) .'<br>';
			  	echo 'X<sub>2</sub> = '.-($b-sqrt($disc))/(2*$a).'<br>';
			  }
		}
	 ?>
	</body>
</html>

