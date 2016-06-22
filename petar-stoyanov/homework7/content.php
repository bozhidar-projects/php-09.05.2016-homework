			<?php include('db.php');?>
			<!-- Here starts the "travelling" section of the blog -->
			<?php
			echo "<section id='travelling-section'>";
			echo "<header>
					<h2>Travelling</h2>
				</header>
				<article>";
				
					foreach ($travelling as $v) {
					echo "<aside>";					
						echo "<header>
							<h4>".$v['aside']['title']."</h4>
						</header>";
						echo "<ul>
							<li>".$v['aside']['e1']."</li>
							<li>".$v['aside']['e2']."</li>
							<li>".$v['aside']['e3']."</li>
							<li>".$v['aside']['e4']."</li>";
					echo "</ul>";
					echo "</aside>";					
					echo "<header>";
					echo "<h3>".$v['title']."</h3>";
					echo "<details>";
					echo "<summary>Details</summary>";
					echo "<h4>Author: ".$v['author']."<br>";
					echo "Date: ".$v['date'];
					echo "</h4>";
					echo "</details>";
					echo "</header>";

					echo "<p>".$v['content']."</p>";
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
				foreach ($sport as $v) {
				echo "<article>";
					echo "<aside>";
					echo "<header>";
					echo "<h4>".$v['aside']['title']."</h4>";
					echo "</header>";
						echo "<ul>";
							echo "<li>".$v['aside']['e1']."</li>";
							echo "<li>".$v['aside']['e2']."</li>";
							echo "<li>".$v['aside']['e3']."</li>";
							echo "<li>".$v['aside']['e4']."</li>
						</ul>
					</aside>";
				
					echo "<header>";
					echo "<h3>".$v['title']."</h3>";
					echo "<details>";
					echo "<summary>Details</summary>";
					echo "<h4>Author: ".$v['author']."<br>
							Date: 12.05.2016
						</h4>
					</details>
					</header>";
					echo "<p>".$v['content']."</p>

				</article>";
				}
				unset($v);
				?>
			</section>


			<!-- Here starts the "makeup" section of the blog -->
			<section id="makeup-section">
				<header>
					<h2> Make up</h2>
				</header>
				<?php
				foreach($makeup as $v) {
				echo "<article>";
				echo "<aside>";
				echo "<header>";
				echo "<h4>".$v['aside']['title']."</h4>";
				echo "</header>";
				echo "<ul>";
				echo "<li>".$v['aside']['e1']."</li>";
				echo "<li>".$v['aside']['e2']."</li>";
				echo "<li>".$v['aside']['e3']."</li>";
				echo "<li>".$v['aside']['e4']."</li>";
				echo "</ul>";
				echo "</aside>";
				
				echo "<header>";
				echo "<h3>".$v['title']."</h3>";
				echo "<details>";
				echo "<summary>Details</summary>
						<h4>Author: ".$v['author']."<br>
							Date: ".$v['date']."
						</h4>
					</details>";
				echo "</header>";
				echo "<p>".$v['content']."</p>
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
				foreach($technology as $v) {
				echo "<article>";
				echo "<aside>";
				echo "<header>";
				echo "<h4>".$v['aside']['title']."</h4>";
				echo "</header>";
				echo "<ul>";
				echo "<li>".$v['aside']['e1']."</li>";
				echo "<li>".$v['aside']['e2']."</li>";
				echo "<li>".$v['aside']['e3']."</li>";
				echo "<li>".$v['aside']['e4']."</li>";
				echo "</ul>";
				echo "</aside>";
				
				echo "<header>";
				echo "<h3>".$v['title']."</h3>";
				echo "<details>";
				echo "<summary>Details</summary>
						<h4>Author: ".$v['author']."<br>
							Date: ".$v['date']."
						</h4>
					</details>";
				echo "</header>";
				echo "<p>".$v['content']."</p>
				</article>";
				unset($v);
				}
				?>
			</section>
		</main>