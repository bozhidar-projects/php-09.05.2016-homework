<!DOCTYPE html>
<html>
	<head>
		<title>Prime numbers</title>
    </head>
	<body>  
	 <?php 
		$start=2;
		$end = 35;
        echo 'Prime numbers from '. $start . ' to ' . $end. '<br>';

		for ($i=$start; $i<$end; $i++) {
            $m = sqrt($i);
            $prime = true;
			for($j =2; $j<=$m; $j++) {
				if (($i%$j) == 0) {
					$prime = false;
					break;
				}
			}
			echo $prime ? '<span style="color:red">'.$i.' is prime </span><br>' : '<span style="color:#676767">'.$i.'</span><br>';
			
		}
		
	 ?>
	</body>
</html>

