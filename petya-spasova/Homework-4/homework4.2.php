<!DOCTYPE html>
<html>
	<head>
		<title>Prime numbers</title>
    </head>
	<body>  
	 <?php 
		$start=2;
		$end = 17;
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
			echo $prime ? '<span style="color:green">'.$i.' is prime </span><br>' : '<span style="color:blue">'.$i.'</span><br>';
			
		}
		
	 ?>
	</body>
</html>

