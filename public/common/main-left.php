<body>
	<main class="home">	
		<section class="left">
			<header class="dillion">
				<div class="dp">
					<img src="public/img/deee.jpeg" alt='Profile Picture'/>
				</div>
				<h4 style='margin:10px 0 0;' align="center">Dillion Megida &#128640;</h4>
				<p style='padding: 10px; margin: 0;' align='center'>Front End Developer and Technical Writer.</p>
			</header>
			<section class="links">
				<ul>
					<a href='/' title="Dillion Megida's Blog"><li class="<?= $active == 'home' ? 'active' : '' ?>">BLOG</li></a>
					<a href='about' title="About Dillion"><li class="<?= $active == 'about' ? 'active' : '' ?>">ABOUT</li></a>
					<a href='contact' title='Contact Dillion'><li class="<?= $active == 'contact' ? 'active' : '' ?>">CONTACT</li></a>
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
				<div class='smallScreenNav'>
					<a href='home' title="Dillion Megida"><b>Dillion Megida</b></a>
					<p class='toggle' onclick="
						navToggle.style.display === 'none' ? navToggle.style.display = 'block' : navToggle.style.display = 'none'; 
						// if(navToggle.style.display == 'none') navToggle.style.display = 'block';
					"><i class="fa fa-bars"></i></p>
				</div><br/>
				
				<div style="margin: 60px 0 10px">
					<?php require 'public/common/social-media.php'; ?>
				</div>
				<a href="https://twitter.com/iamdillion?ref_src=twsrc%5Etfw" class="twitter-follow-button" data-show-count="true" title='Follow @iamdillion on twitter'>
				Follow @iamdillion
				</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script><br/>
			</div>
			
			<div id='nav-links-toggle'>

			</div>
			<script>

				// To select the links to be displayed in smaller screens
				var NavLinks = document.getElementById('nav-links-toggle');
				NavLinks.innerHTML = '';
				document.querySelectorAll('.links').forEach(link => 
					{
						NavLinks.innerHTML += `
							${link.innerHTML}
						`;
					}
				);
			</script>