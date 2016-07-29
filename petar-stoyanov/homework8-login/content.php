			<?php include('db.php');?>
			<!-- Here starts the "travelling" section of the blog -->
			<?php
			echo "<section id='travelling-section'>";
			echo "<header>
					<h2>Travelling</h2>
				</header>";
					foreach ($travelling_array as $v) {
					echo "<article>";
					echo "<aside>";
						echo "<header>
							<h4>".$v['aside']['Title']."</h4>
						</header>";
						echo "<ul>
							<li>".$v['aside']['e1']."</li>
							<li>".$v['aside']['e2']."</li>
							<li>".$v['aside']['e3']."</li>
							<li>".$v['aside']['e4']."</li>";
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
				unset($v);
				?>
			</section>

			<!-- Here starts the "sports" section of the blog -->
			<section id="sport-section">
				<header>
					<h2>Sport</h2>
				</header>
				<?php
				foreach ($sport_array as $v) {
				echo "<article>";				
					echo "<aside>";
					//echo "Had no idea how to do this";
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
					echo "Date: ".$v['Date']."
						</h4>
					</details>
					</header>";
					echo "<p>".$v['Content']."</p>

				</article>";
				}
				unset($v);
				?>
			</section>


			<!-- Here starts the "makeup" section of the blog -->
			<section id="makeup-section">
				<header>
					<h2>Make up</h2>
				</header>
				<?php
				foreach($makeup_array as $v) {
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
				echo "<summary>Details</summary>
						<h4>Author: ".$v['Author']."<br>
							Date: ".$v['Date']."
						</h4>
					</details>";
				echo "</header>";
				echo "<p>".$v['Content']."</p>
				</article>";
				unset($v);
				}
				?>
			</section>


			<!-- Technology section -->
			<section id="technology-section">
				<header>
					<h2>Technology</h2>
				</header>
				<?php
				foreach($technology_array as $v) {
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
				echo "<summary>Details</summary>
						<h4>Author: ".$v['Author']."<br>
							Date: ".$v['Date']."
						</h4>
					</details>";
				echo "</header>";
				echo "<p>".$v['Content']."</p>
				</article>";
				unset($v);
				}
				?>
			</section>
		</main>