<!-- start of slider -->
<div class="container">
	<div id="slideshow" class="slideshow">
		<ul>
			<li>
				<div class="slide">
					<?php
						if (isset($_SESSION['isLogin'])) {
							if ($_SESSION['isLogin'] == true) {
								echo '
									<div class="codrops-links">
										<a href="searchHospital.php"><span>Find nearby hospitals here</span></a>
									</div>
								';
						}
						} else {
							echo '
								<div class="codrops-links">
									<a href="login.php"><span>Create an account here</span></a>
								</div>
							';
						}
					?>
					<img class="icon" src="images/home/home-slider1.png" id = "header-logo" alt="Welcome to MediTect"/>
					<h1 style = "color: #3184E4!important; font-weight: bold!important; font-family: Fixed, monospace;">WELCOME</h1>
					<h1 style = "color: #ffffff!important; font-weight: bold!important; font-family: Fixed, monospace;">TO MEDITECT</h1>
				</div>
			</li>
		<li>

				<div class="slide">
					<img class="icon" src="images/home/icons/heart.svg" alt="Heart Icon"/>
					<blockquote>
						<p></i>MediTect is a website that informs users where the nearest, available, and most equipped clinic, health
							center, and hospital is.</i></p>
					</blockquote>
				</div>
			</li>
		<li>

				<div class="slide">
					<img class="icon" src="images/home/icons/letter.svg" alt="Letter Icon"/>
					<blockquote>
						<p>Our mission is to provide Filipinos an accessible platform in order to raise awareness regarding
							healthcare facilities for updated health information.</p>
						</blockquote>
				</div>
			</li>
		<li>

				<div class="slide">
					<div class="codrops-links">
						<?php
							if (isset($_SESSION['isLogin'])) {
								if ($_SESSION['isLogin'] == true) {
									echo '
										<a href="searchHospital.php"><span>Health facilities</span></a>
									';
							}
							} else {
								echo '
									<a href="login.php"><span>Create an account here</span></a>
								';
							}
						?>
						<a href="index.php"><span>Back to start</span></a>
					</div>

					<div class="related">
						<p>To know more about MediTect:</p>
						<a href="about-us.php" target="_blank">
							<img src="images/home/related/aboutus.png" />
							<h3>MediTect and the Team</h3>
						</a>
						<a href="contact-us.php" target="_blank">
							<img src="images/home/related/contactus.png" />
							<h3>Contact the team</h3>
						</a>
					</div>
				</div>
			</li>
		</ul>
	</div>
</div>
	
<!--js for slider-->

<script src="js/classie.js"></script>
<script src="js/sliderFx.js"></script>
<script>

	(function() {
		new SliderFx( document.getElementById('slideshow'), {
			easing : 'cubic-bezier(.8,1,.2,1)'
		} );
	})();
	
</script>
	<!--js for slider-->

<!-- end of slider -->

</body>
</html>                            