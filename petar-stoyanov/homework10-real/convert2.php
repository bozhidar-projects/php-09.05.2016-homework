<form method="post">
	<fieldset>
		<legend>Interconnect the contents of two files</legend>
		<label for="filename1">filename1</label>
		<select id="filename1" name="filename1">
			<?php
				require_once("db.php");			
				$filelist = glob("./content/*content.csv");
				foreach($filelist as $v) {
					$string = str_replace("./content/", "", $v);
					echo '<option value="'.$string.'">'.$string.'</option>';
				}				
			?>
		</select><br>
		<label for="filename2">filename2</label>
		<select id="filename2" name="filename2">
			<?php
				require_once("db.php");			
				$filelist = glob("./content/*aside.csv");
				foreach($filelist as $v) {
					$string = str_replace("./content/", "", $v);
					echo '<option value="'.$string.'">'.$string.'</option>';
				}				
			?>
		</select><br>
		<label for="new-file">new_file name</label>
		<input type="text" name="new-file"><br>
		<label for="delimiter">Delimiter</label>
		<input type="text" name="delimiter"><br>
		<button type="submit">Import</button>
	</fieldset>
</form>
<?php
	function get_indexes($filename,$delimiter) {
		$file = fopen("./content/".$filename, "r");
		$indexes = trim(fgets($file));
		$index_array = explode($delimiter, $indexes);
		fclose($file);
		return $index_array;		
	}

	function get_content($filename,$delimiter) {
		$file = fopen("./content/".$filename, "r");
		fgets($file); // ignore indexes
		$data = array();
		while(!feof($file)) {
			$current_line = trim(fgets($file));
			$current_array = explode($delimiter,$current_line);
			array_push($data, $current_array);
		}
		fclose($file);
		return $data;
	}
	function combine_file_content($filename1,$filename2,$delimiter,$new_file) {
		$index1 = get_indexes($filename1,$delimiter);
		$index2 = get_indexes($filename2,$delimiter);
		$index = array_merge($index1, $index2);
		$content1 = get_content($filename1,$delimiter);
		$content2 = get_content($filename2,$delimiter);
		$content = array();
		if(count($content1) == count($content2)) {
			for($i=0;$i<count($content1);$i++) {
				$merge = array_merge($content1[$i],$content2[$i]);
				array_push($content, $merge);
			}
		} else {
			echo "Files are incompatible";
		}

		$write_file = fopen("./content/".$new_file, "w+");
		$index_string = implode($delimiter, $index);
		fwrite($write_file, $index_string);
		for($i=0;$i<count($content);$i++) {
			$current_line = implode($delimiter, $content[$i]);
			fwrite($write_file,"\n".$current_line);
		}
		fclose($write_file);
	}
	
	if (!empty($_POST)) {
		$new_content = combine_file_content($_POST['filename1'],$_POST['filename2'],$_POST['delimiter'],$_POST['new-file']);
	}	
?>