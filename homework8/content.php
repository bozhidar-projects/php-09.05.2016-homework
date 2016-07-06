	 	 <table>
	 <tr>
	 	<th>ID</th>
	 		<?php
	 			foreach ($columnn_names as $columnn_name) {
	 				echo "<th>" . $columnn_name ."</th>";
	 			}
	 		  ?>
	 	</tr>
	 	<?php 
	 		$j = 0;
	 		foreach ($articles as $article) {
	 			echo "<tr>";
	 			echo "<td>" . $j++ . "</td>";
	 			foreach($columnn_names as $columnn_name){
	 			echo "<td>" . $article[$columnn_name] . "</td>";
	 			}
	 			echo "</tr>";
	 		}
	 	 ?>
	 </table>


	 	<!-- <h1>ID:</h1>
	 		<?php
	 			foreach ($column_names as $column_name) {
	 				echo "<h1>" . $column_name . ":" ."</h1>";
	 			}
	 		 $i = 0;
	 		foreach ($members as $member) {
	 			echo "<h2>" . $i++ . "</h2>"; 
	 			foreach($column_names as $column_name){
	 			echo "<h2>" . $member[$column_name] . "</h2>";
	 			 }
	 		}
	 	 ?> -->
	 	 
	 