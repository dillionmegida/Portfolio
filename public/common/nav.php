<body style="background-image: url(public/img/bg.jpeg)">
	<nav class='main-nav'>
		<header class="brand">
			<h2><a href="deeesigns">
                <img class="logo" src='public/img/logo.png'>
                DEEESIGNS STUDIOS</a></h2>
		</header>
		<ul class='nav-links' id='nav-links'>
            <li class="links"><a href="deeesigns" <?php if($active == 'home') echo 'class="active"'; else echo '' ?>>HOME</a></li>
            <li class="links"><a href="portfolio" <?php if($active == 'portfolio') echo 'class="active"'; else echo '' ?>>PORTFOLIO</a></li>
            <li class="links"><a href="about" <?php if($active == 'about') echo 'class="active"'; else echo '' ?>>ABOUT</a></li>
            <li class="links"><a href="contact" <?php if($active == 'contact') echo 'class="active"'; else echo '' ?>>CONTACT</a></li>
        </ul>

        
        
        <button class='toggle' onclick="
            navToggle.style.display === 'none' ? navToggle.style.display = 'block' : navToggle.style.display = 'none'; 
            // if(navToggle.style.display == 'none') navToggle.style.display = 'block';
        ">Open</button>
    </nav>
 
    <main tabindex="1" id='main'>
    
    
    

    
