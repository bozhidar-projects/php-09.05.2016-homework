<?php
	require_once("db.php");
	####Get Indexes
	function get_indexes($filename) {
		$file = fopen($filename, "r");
		$array_indexes = explode(",,", trim(fgets($file)));
		fclose($file);
		return $array_indexes;
	}
	
	####Display Form
	function new_entry_form($label,$filename,$action="") {		
		$array_indexes = get_indexes($filename);
		echo '<div class="container">';
		echo '<form method="post" action="'.$action.'">';
		echo '<fieldset>';
		echo '<legend>'.$label.'</legend>';
		echo '<div class="form">';
		foreach($array_indexes as $value) {
			echo '<label for="'.$value.'">'.$value.'</label>';
			echo '<input id="'.$value.'" type="text" name="'.$value.'"><br>';
		}
		echo '<button type="submit">Submit</button>';
		echo '</div>';
		echo '</fieldset>';
		echo '</form>';
		echo '</div>';
	}

	####new_entry
	function new_entry($filename,$post,$array, $location="") {
		$array_indexes = get_indexes($filename);
		$new_entry = array();
		$new_string = array();
		$i = 0;
		foreach($post as $value) {
			$new_string[$i++] = $value;
		}
		unset($i);
		array_push($array, $post);
		$string = implode(",,",$new_string);
		$file = fopen($filename, "a");
		fwrite($file, "\n".$string);
		fclose($file);
		header("Location: ".$location);
	}

	#### delete entry form
	function delete_entry_form($label,$action="") {
		echo '<div class="container">';
		echo '<form method="post" action="'.$action.'">';
		echo '<fieldset>';
		echo '<legend>'.$label.'</legend>';
		echo '<label for="number">Number</label>';
		echo '<input id="number" type="number" name="number"><br>';
		echo '<button type="submit">Submit</button>';
		echo '</fieldset>';
		echo '</form>';
		echo '</div>';
	}

	#### delete entry
	function delete_entry($filename, $array, $value, $location="") {
		$array_indexes = get_indexes($filename);
		$new_array = array();
		for ($i=0;$i<count($array);$i++) {
			if ($i!=$value) {
				array_push($new_array, $array[$i]);
			}
		}
		$file = fopen($filename, "w");
		fwrite($file, implode(",,", $array_indexes)."\n");
		for ($i=0; $i < count($new_array)-1; $i++) { 
			$csv_string = implode(",,", $new_array[$i])."\n";
			fwrite($file, $csv_string);
		}
		$csv_string = implode(",,", $new_array[$i]);
		fwrite($file, $csv_string);
		fclose($file);
		header("Location: ".$location);
	}


	#### display article
	function display_article($title, $array, $id) {
		echo "<section id='".$id."'>";
		echo "<header>";
		echo "<h2>".$title."</h2>";
		echo "</header>";
		foreach ($array as $v) {
			echo "<article>";
			echo "<aside>";
			echo "<header>";
			echo "<h4>".$v['aside']['Title']."</h4>";
			echo "</header>";
			echo "<ul>";
			echo "<li>".$v['aside']['e1']."</li>";
			echo "<li>".$v['aside']['e2']."</li>";
			echo "<li>".$v['aside']['e3']."</li>";
			echo "<li>".$v['aside']['e4']."</li>";
			echo "</ul>";
			echo "</aside>";					
			echo "<header>";
			echo "<h3>".$v['Title']."</h3>";
			echo "<details>";
			echo "<summary>Details</summary>";
			echo "<h4>Author: ".$v['Author']."<br>";
			echo "Date: ".$v['Date'];
			echo "</h4>";
			echo "</details>";
			echo "</header>";

			echo "<p>".$v['Content']."</p>";
			echo "</article>";			
		}
		echo "</section>";
	}


	#### Display content:
	
	function display_content($array,$number="0") {
		$i=0;
		echo "<div class='container'>";
		foreach ($array as $value) {
			echo "<div class='members'>";
			if($number != 0) {
				echo "<b>Number:</b> [".$i++."]<br>";
			}
			foreach ($value as $k => $v) {
				echo "<b>".$k.": </b>".$v."<br>";				
			}
			echo "</div>";
		}
		echo "</div>";
	}

	#### Manage Articles
	function new_article_section($array,$new_article,$filename,$filename_aside,$string,$aside_string) {
		array_push($array, $new_article);
		$text_string = implode(",,", $string);
		$string_aside = implode(",,", $aside_string);
		$file = fopen($filename, "a");
		$aside = fopen($filename_aside, "a");
		fwrite($file, "\n".$text_string);
		fwrite($aside, "\n".$string_aside);
		fclose($file);
		fclose($aside);
	}
	function new_article($post,$header="articles.php") {	
		$string = array($post['title'], $post['author'], $post['date'], $post['content']);
		$aside_string = array($post['aside-title'], $post['e1'], $post['e2'], $post['e3'], $post['e4']);
		$new_article = array("Title" => $post['title'],"Author" => $post['author'], "Date" => $post['date'], "Content" => $post['content']);
		$new_article['aside'] = array("Title" => $post['aside-title'], "e1" => $post['e1'], "e2" => $post['e2'], "e3" => $post['e3'], "e4" => $post['e4']);

		switch ($post['section']) {
			case 'travelling':
				new_article_section($travelling_array,$new_article,"./content/travel_content.csv","./content/travel_aside.csv",$string,$aside_string);
				break;
			case 'sport':
				new_article_section($sport_array,$new_article,"./content/sport_content.csv","./content/sport_aside.csv",$string,$aside_string);
				break;
			case 'makeup':
				new_article_section($makeup_array,$new_article,"./content/makeup_content.csv","./content/makeup_aside.csv",$string,$aside_string);
				break;
			case 'technology':
				new_article_section($travelling_array,$new_article,"./content/technology_content.csv","./content/technology_aside.csv",$string,$aside_string);
				break;
			default:			
				break;
		}
		header("Location: articles.php");
	}

	#### Delete article display
	function display_delete_article($array,$section_title) {
		echo "<fieldset class='article-short'>";
		echo "<legend>".$section_title."</legend>";
		$i=0;
		foreach ($array as $v) {
			echo "<div class='article-short'>";
			echo "Number: ".$i++;
			echo "<h3>".$v['Title']."</h3>";
			echo "Author: ".$v['Author'];
			echo "<details>";
			echo "<summary>Details</summary>";
			echo "<b>Author: </b>".$v['Author']."<br>".$v['Content'];
			echo "</details>";			
			echo "</div>";
		}
		echo "</fieldset>";
	}


	#### Function delete from specific file
	function delete_article_from_file($array,$value,$filename,$aside=0) {
		$array_indexes = get_indexes($filename);
		$new_array = array();
		if ($value >= 0 && $value < count($array)) {
			for ($i=0; $i<count($array); $i++) {
				if ($aside!=0) {
					unset($array[$i]['aside']);
				}
				if($value != $i) {
					array_push($new_array, $array[$i]);						
				}
			}
			//$array = $new_array;
			$file = fopen($filename, "w");
			fwrite($file, implode(",,", $array_indexes));
			for($i=0;$i<count($new_array);$i++) {
				$csv_string = implode(",,", $new_array[$i]);
				fwrite($file, "\n".$csv_string);
			}
			// $csv_string = implode(",,", $new_array[$i]);
			// fwrite($file, $csv_string);
			fclose($file);
		}
	}

	#### Function delete article by section
	function delete_article_section($value,$array,$array_aside,$filename,$filename_aside) {
		delete_article_from_file($array,$value,$filename,1);
		delete_article_from_file($array_aside,$value,$filename_aside);
	}


	#### Function delete article
	function delete_article($post,$header="articles.php") {
	$section = $post['section'];
	$value = $post['number'];
	switch ($section) {
		case 'travelling':
			$travelling_aside = read_article("./content/travel_aside.csv");
			$travelling_array = read_article("./content/travel_content.csv");
			delete_article_section($value,$travelling_array,$travelling_aside,"./content/travel_content.csv","./content/travel_aside.csv");
			header("Location: ".$header);
			break;
		case 'sport':
			$sport_aside = read_article("./content/sport_aside.csv");
			$sport_array = read_article("./content/sport_content.csv");
			delete_article_section($value,$sport_array,$sport_aside,"./content/sport_content.csv","./content/sport_aside.csv");
			header("Location: ".$header);
			break;
		case 'makeup':
			$makeup_aside = read_article("./content/makeup_aside.csv");
			$makeup_array = read_article("./content/makeup_content.csv");
			delete_article_section($value,$makeup_array,$makeup_aside,"./content/makeup_content.csv","./content/makeup_aside.csv");
			header("Location: ".$header);			
			break;
		case 'technology':
			$technology_aside = read_article("./content/technology_aside.csv");
			$technology_array = read_article("./content/technology_content.csv");
			delete_article_section($value,$technology_array,$technology_aside,"./content/technology_content.csv","./content/technology_aside.csv");
			header("Location: ".$header);
			break;
		default:
			break;
		}
	}
?>