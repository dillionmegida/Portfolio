<?php
$file = 'logo2.png';
$title = 'DEEESIGNS STUDIOS - Web Development and Graphics Designing';
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
			<h3>Services
				<hr class="shortHr">
			</h3>
			<div class='services-list'>
				<div class="service">
					<div class='illustration'>
						<img src='public/img/branding_pic.jpeg' alt='Branding Illustration'>
					</div>
					<p>Branding Design</p>
				</div>
				<div class="service">
					<div class='illustration'>
						<img src='public/img/logo_mockup.jpeg' alt='Logo Mockup'>
					</div>
					<p>Logo Design</p>
				</div>
				<div class="service">
					<div class='illustration'>
						<img src='public/img/flyer-mockup.jpeg' alt='Flyer presentation'>
					</div>
					<p>Flyers and Banners</p>
					</div>
			</div>
		</section>

		<section id='gallery-section' style='margin-top:30px !important'>
			<h3>My Gallery
				<hr class="shortHr"/>
			</h3>
			<div class="galleryLg">
				<img src="public/img/gallery/flyer_flyer1.jpeg" alt="Branding Design">
			</div>
			<div class="galleryLg">
				<img src="public/img/gallery/logo_shidah.jpeg" alt="Branding Design">
			</div>
			<div class="galleryLg">
				<img src="public/img/gallery/toon_lady.jpeg" alt="Branding Design">
			</div>
		</section>
		<br/>
		<a class='view-more' href='gallery' title='View more Gallery pictures'>View More</a>

		<?php require 'public/common/testimonials.php' ?>

		<?php require_once 'public/common/sub-footer.php' ?>

		

	</section>
	


<?php
require 'public/common/footer.php';
?>	