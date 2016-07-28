<form method="post">
	<fieldset>
		<legend>Import a csv file into a directory</legend>
		<label for="filename">Filename</label>
		<select id="filename" name="filename">
			<?php
				require_once("db.php");			
				$filelist = glob("./content/*.csv");
				foreach($filelist as $v) {
					$string = str_replace("./content/", "", $v);
					echo '<option value="'.$string.'">'.$string.'</option>';
				}				
			?>
		</select><br>
		<label for="table">Table name</label>
		<input type="name" name="table"><br>
		<label for="delimiter">Delimiter</label>
		<input type="name" name="delimiter"><br>
		<button type="submit">Import</button>
	</fieldset>
</form>
<?php
	function create_table($filename,$delimiter,$table_name) {
		$file = fopen("./content/".$filename, "r");
		$indexes = trim(fgets($file));
		$index_array = explode($delimiter, $indexes);
		$create_query = "CREATE TABLE IF NOT EXISTS `".$table_name."` (`ID` int primary key auto_increment, ";
		for($i=0;$i < count($index_array)-1;$i++) {
			$create_query .= '`'.$index_array[$i].'` varchar(50), ';
		}
		$create_query .= '`'.$index_array[$i].'` varchar(50))';
		execute_sql_query($create_query);
		fclose($file);
	}
	function insert_content($filename,$delimiter,$table_name) {
		$file = fopen("./content/".$filename,"r");
		$indexes = trim(fgets($file));
		$index_array = explode($delimiter, $indexes);
		$sql = 'INSERT INTO `'.$table_name.'` (';
		for($i=0;$i < count($index_array)-1;$i++) {
			$sql .= '`'.$index_array[$i].'`, ';
		}
		$sql .= '`'.$index_array[$i].'` )
		values (';
		while(!feof($file)) {
			$current_line = trim(fgets($file));
			$current_array = explode($delimiter,$current_line);
			$sql_query = $sql;
			for($i=0;$i<count($current_array)-1;$i++) {
				$sql_query .= "'".$current_array[$i]."', ";
			}
			$sql_query .= "'".$current_array[$i]."')";
			execute_sql_query($sql_query);
		}

		fclose($file);
	}
	function import_file_content($filename,$table_name,$delimiter) {
		create_table($filename,$delimiter,$table_name);
		insert_content($filename,$delimiter,$table_name);
	}

	if (isset($_POST['filename']) && isset($_POST['table']) && isset($_POST['delimiter'])) {
		import_file_content($_POST['filename'],$_POST['table'],$_POST['delimiter']);
	}	
?>