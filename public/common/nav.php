<body style="background-image: url(public/img/bg.jpeg)">
	<nav class='main-nav'>
		<header class="brand">
			<h2><a>
                <img class="logo" src='public/img/logo.png' alt="Brand Logo">
                DEEESIGNS STUDIOS</a></h2>
		</header>
		<ul class='nav-links' id='nav-links'>
            <li class="links"><a href="deeesigns" <?php if($active == 'home') echo 'class="active"'; else echo '' ?> title="Homepage">HOME</a></li>
            <li class="links"><a href="portfolio" <?php if($active == 'portfolio') echo 'class="active"'; else echo '' ?> title="Portfolio">PORTFOLIO</a></li>
            <li class="links"><a href="about" <?php if($active == 'about') echo 'class="active"'; else echo '' ?> title="About">ABOUT</a></li>
        </ul>

        
        
        <p class='toggle' onclick="
            navToggle.style.display === 'none' ? navToggle.style.display = 'block' : navToggle.style.display = 'none'; 
            // if(navToggle.style.display == 'none') navToggle.style.display = 'block';
        "><i class="fa fa-bars"></i></p>
    </nav>
 
    <main tabindex="1" id='main' class="main-section">

    <a href="/" class="toDillion" title='Dillion Megida'>DILLION <span style="color:#f9cb3e">M.</span></a>
    
    
    

    
