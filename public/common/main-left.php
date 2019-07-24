<body>
	<main class="home">	
		<section class="left">
			<header class="dillion">
				<div class="dp">
					<img src="public/img/deee.png" alt='Profile Picture'/>
				</div>
				<h4 align="center">Dillion Megida</h4>
			</header>
			<section class="links">
				<ul>
					<a href='/'><li class="<?= $active == 'about' ? 'active' : '' ?>" title='About Dillion Megida'>ABOUT</li></a>
					<a href='blog'><li class="<?= $active == 'blog' ? 'active' : '' ?>" title="Dillion Megida's Blog">BLOG</li></a>
					<a href='contact'><li class="<?= $active == 'contact' ? 'active' : '' ?>" title='Contact Dillion'>CONTACT</li></a>
					<a href='deeesigns' title="Deeesigns Studios"><li>DEEESIGNS</li></a>
				</ul>
			</section>
				
			<section class="footer">

				<a href="https://twitter.com/iamdillion?ref_src=twsrc%5Etfw" class="twitter-follow-button" data-show-count="true" title='Follow @iamdillion on twitter'>Follow @iamdillion</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script><br/>
				<div style="margin-top: 20px">
					<?php require 'public/common/social-media.php'; ?>
		    	</div>
				<p>Copyright <span class='year'></span></p>
			</section>
		</section>

        <section class="right">
			<div class="smallScreen">
				<a href='home' title="Dillion Megida"><b>Dillion Megida</b></a>
				<p class='toggle' onclick="
					navToggle.style.display === 'none' ? navToggle.style.display = 'block' : navToggle.style.display = 'none'; 
					// if(navToggle.style.display == 'none') navToggle.style.display = 'block';
				"><i class="fa fa-bars"></i></p>
			</div>
			
			<div id='nav-links-toggle'>
				<a href='home' title="About Dillion Megida">ABOUT</a>
				<a href='blog' title="Dillion Megida's Blog">BLOG</a>
				<a href='contact' title="Contact Dillion">CONTACT</a>
				<a href='deeesigns' title="Deeesigns Studios">DEEESIGNS</a>
			</div>