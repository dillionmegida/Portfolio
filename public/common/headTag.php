<!DOCTYPE html>
<html lang="en-US">
<head>
	<title><?= $title ?></title>

	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" type="text/css" href="public/assets/css/style.css">
	<link rel="stylesheet" type="text/css" href="public/assets/css/home.css">
	<link rel="stylesheet" type="text/css" href="public/assets/css/mediaQs.css">
	<link rel="icon" href="public/img/<?= isset($file) ? $file : 'icon.png'; ?>" type="image/png" sizes="16x16">
	<!-- For fontawesome -->
	<script src="https://use.fontawesome.com/ec33c661f9.js"></script> 

	<!-- Prism js For highlighting source code -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/prism/1.5.0/themes/prism.min.css"/>


	<!-- SEO Meta Tags-->
    <meta name="keywords" content="<?= isset($keywords) ? $keywords.', ' : ''; ?>branding, design, deeesigns, studios, dillion megida, dillion, megida, deeesign, web developer, web development">
    <meta name="author" content="Dillion Megida">

    <meta name="description" content="Dillion is a front end developer and a graphics designer. He founded Deeesigns Studios which deals in Web Development, Graphics Designs such as Branding Identity with Logo Design and advertisements with flyers and posters"/>
	<link rel="canonical" href="http://dillionmegida.com/" />

	<!-- Open Graph -->
	<meta property="og:locale" content="en_US" />
	<meta property="og:type" content="website" />
	<meta property="og:title" content="Dillion Megida - Deeesigns | Branding and Web Development" />
	<meta property="og:image" content="public/img/deee.png">
	<meta property="og:description" content="Deeesigns Studios deals in Graphics Designs and Web Development Services" />
	<meta property="og:url" content="https://www.dillionmegida.com/" />
	<meta property="og:site_name" content="Dillion Megida" />

	<meta property="og:image:width" content="1200">
  	<meta property="og:image:height" content="630">

  	<!-- Twitter Tags -->
	<meta name="twitter:card" content="summary" />
	<meta name="twitter:site" content="@iamdillion">
	<meta name="twitter:description" content="Dillion Megida - Front End Developer and a Graphics Designer."/>
	<meta name="twitter:title" content="Dillion Megida - FE Developer and Graphics Designer" />
	<meta name="twitter:creator" content="iamdillion" />

	<link rel="manifest" href="manifest.json" />
	 <meta name="theme-color" content="#333" />

 	<style>
 		/* width */
		::-webkit-scrollbar {
		  width: 7px;
		}

		/* Track */
		::-webkit-scrollbar-track {
		  background: #0f0d33;
		  border-radius: 0;
		}
		 
		/* Handle */
		::-webkit-scrollbar-thumb {
		  background: #f9cb3e; 
		  border-top-left-radius: 10px;
		  border-bottom-left-radius: 10px;
		}
 	</style>
</head>

