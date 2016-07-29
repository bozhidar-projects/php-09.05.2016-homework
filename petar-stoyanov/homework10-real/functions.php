<?php
	require_once("db.php");
	###Get array of indexes from table
	function get_table_fields($table,$id="") {
		global $database_connection;

		$columns = array();
		$result = $database_connection->query("SELECT * FROM `".$table."` limit 1");
		$fields = $result->fetch_fields();
		foreach ($fields as $value) {
			if ($value->name == "ID") {
				if ($id == "") {
					continue;
				} else {
					$column_name = $value->name;
				}
			}
			$column_name = $value->name;
			array_push($columns, $column_name);
		}
		return $columns;
	}
		
	####Display Form
	function new_entry_form($label,$table,$action="") {
		$array_indexes = get_table_fields($table,$id="");
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

	#delete entry
	function delete_from_database($table,$id) {
		$sql = "DELETE FROM `".$table."` WHERE `ID` = ".$id;
		execute_sql_query($sql);
	}

	function unset_by_id($array,$id) {
		foreach ($array as $value) {
			if($value['ID'] == $id) {
				unset($value);
			}
		}
	}	

	#### delete entry form
	function delete_entry_form($label,$action="") {
		echo '<div class="container">';
		echo '<form method="post" action="'.$action.'">';
		echo '<fieldset>';
		echo '<legend>'.$label.'</legend>';
		echo '<label for="ID">ID</label>';
		echo '<input id="ID" type="number" name="ID"><br>';
		echo '<button type="submit">Submit</button>';
		echo '</fieldset>';
		echo '</form>';
		echo '</div>';
	}	
	
	function display_article($title, $array, $id) {
		echo "<section id='".$id."'>";
		echo "<header>";
		echo "<h2>".$title."</h2>";
		echo "</header>";
		foreach ($array as $v) {
			echo "<article>";
			echo "<aside>";
			echo "<header>";
			echo "<h4>".$v['Aside']."</h4>";
			echo "</header>";
			echo "<ul>";
			echo "<li>".$v['e1']."</li>";
			echo "<li>".$v['e2']."</li>";
			echo "<li>".$v['e3']."</li>";
			echo "<li>".$v['e4']."</li>";
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
		echo "<div class='container'>";
		foreach ($array as $value) {
			echo "<div class='members'>";
			foreach ($value as $k => $v) {
				echo "<b>".$k.": </b>".$v."<br>";
			}
			echo "</div>";
		}
		echo "</div>";
	}	

	function new_article_entry($table,$values_array,$id="") {
		$fields = get_table_fields($table,$id);
		$columns = implode("`, `",array_values($fields));		
		$data = implode("', '",array_values($values_array));
		if ($id!="") {
			$sql = "INSERT INTO `".$table."` (`ID`, `".$columns."`) VALUES (".$id.", '".$data."')";
		}
		$sql = "INSERT INTO `".$table."` (`".$columns."`) VALUES ('".$data."')";
		echo $sql;
		execute_sql_query($sql);
	}

	function new_article($post,$header="articles.php") {
		if ($post['ID']!="") {
			$new_article = array("ID" => $post['ID']);
			$id = $post['ID'];
		} else {
			$id = "";
		}
		$new_article = array("Title" => $post['title'], 
							"Author" => $post['author'], 
							"Date" => $post['date'], 
							"Content" => $post['content'], 
							"Aside" => $post['aside-title'], 
							"e1" => $post['e1'], 
							"e2" => $post['e2'], 
							"e3" => $post['e3'], 
							"e4" => $post['e4']);

		switch ($post['section']) {
			case 'travelling':
				new_article_entry("Travel",$new_article,$id);
				break;
			case 'sport':
				new_article_entry("Sport",$new_article,$id);
				break;
			case 'makeup':
				new_article_entry("Makeup",$new_article,$id);
				break;
			case 'technology':
				new_article_entry("Technology",$new_article,$id);
				break;
			default:			
				break;
		}
		header("Location: articles.php");
	}

	#### Delete article display
	function display_delete_article($category,$array) {
		echo "<fieldset class='article-short'>";
		echo "<legend>".$category."</legend>";
		foreach ($array as $v) {
			echo "<div class='article-short'>";
			echo "Number: ".$v['ID'];
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
	
	function delete_article($post,$header="articles.php") {
	$section = $post['section'];
	$value = $post['number'];
	switch ($section) {
		case 'travelling':
			delete_from_database("Travel",$value);
			header("Location: ".$header);
			break;
		case 'sport':
			delete_from_database("Sport",$value);
			header("Location: ".$header);
			break;
		case 'makeup':
			delete_from_database("Makeup",$value);
			header("Location: ".$header);
			header("Location: ".$header);			
			break;
		case 'technology':
			delete_from_database("Technology",$value);
			header("Location: ".$header);
			header("Location: ".$header);
			break;
		default:
			break;
		}
	}
?>