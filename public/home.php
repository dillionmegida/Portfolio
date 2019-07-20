 <?php
$title = 'Dillion Megida - Front End Developer & Graphics Designer';
require_once 'public/common/headTag.php';

?>
		<?php
			$active = 'about';
			require 'public/common/main-left.php'
		?>
			<section class="home-welcome">
				<section class="abt-me">
					<h1>Hi, I am Dillion Megida.</h1>
					<p>
					I am a Front-End Developer and a Graphics Deeesigner. <b>CEO of Deeesigns Studios</b>, living in Kogi State, Nigeria.<br/><br/>
					I also write articles related to Web Development. <a href="blog_1" title="Blog" style="text-decoration:underline">Read about my Dev / Designs Story here</a><br/>
					In order to challenge myself and also add value to the community, I'd be posting articles (or tutorials) at least once on my blog every week. Stay tuned! <a href="blog" title="Blog" style="text-decoration:underline">Check out articles I've written on my blog here</a><br/><br>
					I aim to be a Full Stack Web Developer and to create (or be part of) many teams who would greatly greatly impact the world.<br/>
					<a href='deeesigns' title='Deeesigns Page' style="text-decoration: underline;">Check out my studio</a>
					</p>

				</section>
				<section class="services">
					<h3>SERVICES</h3>
					<div>
						<div class="service">
							<h4>Web Development</h4>
							<p>Conversant with HTML5 & CSS3, JS, Node.js and React.js. Added to this, I'm quite efficient in ensuring Responsive Web Designs</p>
						</div>
						<div class="service">
							<h4>Branding Identity</h4>	
								<p>Logo Designs, Complimentary Cards, Letterheads, Flyers as well as Banners.</p>
						</div>
					</div>
				</section>
				<section class="timeline">
					<h3>TIMELINE</h3>
					<p><span class="date">2019: </span>July 19th, I launched <b>dillionmegida.com</b> which is my portolio / blogging platform.</p>
					<p><span class="date">2019: </span>June 27, finished @freecodecamp Responsive Web Design Curriculum and attained my certificate  Responsive Web Design Curriculum and attained my certificate.</p>
					<p><span class="date">2018: </span>January, I founded Deeesigns Studios offering Graphics and Web Development Services.</p>
					
					<p><span class="date">2018: </span>June, published my first completed website project.</p>
					<p><span class="date">2017: </span>October, introduced to graphics design (HTML and CSS) by a course mate, Alex Adepetu, who also helped me with the basics of creating cartoons.</p>
					<p><span class="date">2017: </span>February, introduced to web design (HTML and CSS) by a hostel mate, Abraham. He also helped me with the basics of designing static pages with little or no styles.</p>
				</section>
				<section class="connect">
					<p class="right-social">Connect With Me: <?php require 'public/common/social-media.php' ?>
					</p>
				</section>
			</section>
		<?php require 'public/common/body-rem.php' ?>