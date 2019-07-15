<?php

$title = 'DEEESIGNS STUDIOS - Graphics Design and Branding';
$active = 'home';
require_once 'public/common/headTag.php';
require_once 'public/common/nav.php';

?>
	
	<?php
		$title = "CREATIVITY AT IT'S BEST";
		$desc = "Let Me Rebrand Your Idea";
		$hire = true;
		require 'public/common/bg.php';
	?>

	<section id='welcome' class='content'>
		<h2>WELCOME TO DEEESIGNS STUDIOS</h2>
		<section class='services'>
			<h3>Our Services
				<hr class="shortHr">
			</h3>
			<div class='services-list'>
				<div class="service">
					<div class='illustration'>
						<img src='public/img/branding_pic.jpeg'>
					</div>
					<p>Branding Design</p>
				</div>
				<div class="service">
					<div class='illustration'>
						<img src='public/img/logo-mockup.jpeg'>
					</div>
					<p>Logo Design</p>
				</div>
				<div class="service">
					<div class='illustration'>
						<img src='public/img/flyer-mockup.jpeg'>
					</div>
					<p>Flyers and Banners</p>
					</div>
			</div>
		</section>

		<section id='portfolio-section' style='margin-top:30px; !important'>
			<h3>My Portfolio
				<hr class="shortHr"/>
			</h3>
			<div class="portfolioLg">
				<img src="public/img/portfolio/branding_shidah.jpg" alt="Branding Design">
			</div>
			<div class="portfolioLg">
				<img src="public/img/portfolio/branding_vee-essence.jpg" alt="Branding Design">
			</div>
			<div class="portfolioLg">
				<img src="public/img/portfolio/branding_shidah.jpg" alt="Branding Design">
			</div>
		</section>
		<br/>
		<a class='view-more' href='portfolio'>View More</a>

		<?php require 'public/common/testimonials.php' ?>

		<?php require_once 'public/common/sub-footer.php' ?>

		

	</section>
	


<?php
require 'public/common/footer.php';
?>	