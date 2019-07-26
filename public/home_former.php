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
					I also write articles related to Web Development.<br/>
					- <a href="blog_1" title="Blog" style="text-decoration:underline">Read about my Dev / Designs Story here</a><br/>
					- <a href="blog" title="Blog" style="text-decoration:underline">Check out articles I've written on my blog here</a><br>
					- <a href='deeesigns' title='Deeesigns Page' style="text-decoration: underline;">Check out my studio</a>
					</p>

				</section>
				<section class="services">
					<h3>What I do</h3>
					<div>
						<div class="service">
							<h4>Web Development</h4>
							<p>Responsive Web Designs, Conversant with HTML5 & CSS3, JS, Node.js and React.js.
							</p>
						</div>
						<div class="service">
							<h4>Branding Identity</h4>	
								<p>Logo Designs, Complimentary Cards, Letterheads, Flyers as well as Banners.</p>
						</div>
						<div class="service">
							<h4>Motion Graphics</h4>	
								<p>Efficient use of Adobe After Effects and Premiere Pro in Video Editing and Creating Animations.</p>
						</div>
					</div>
				</section>
				<section class="connect">
					<p class="right-social">Connect With Me:<br/> <?php require 'public/common/social-media.php' ?>
					</p>
				</section>						
			</section>
		<?php require 'public/common/body-rem.php' ?>