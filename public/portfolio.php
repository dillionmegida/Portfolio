<?php

$title = 'Dillion Megida - Portfolio';
require_once 'public/common/headTag.php';

?>

        <?php
            $active = 'portfolio';
            require 'public/common/main-left.php'
        ?>

        <section class="portfolio-section">
            <h2>ABOUT ME</h2>
            <section class="portfolio-contents">
                <div class="bio">
                    <h3 align='right'>Front End Developer + Graphics Deeesigner</h2>
                    <p align='justify'>Efficient with HTML5 & CSS3, JS and it's frameworks such as ReactJs and jQuery.<br/>
                    I'm a technical writer writing mostly about web development on my blog here and other blog media.<br/>
                    I also ensure Web Responsibility making ease for all screen sizes.<br/><br/>
                    Efficient use of Adobe Photoshop and Adobe Illustrator for graphics designing. These includes photo editing, logo designing and advertisement cards. <br/><br/>
                    Average use of Adobe After Effects and Adobe Premiere Pro for video editing and motion graphics.<br/><br/>
                    Founder, <b>Deeesigns Studios</b>, which deals in Web Development and Graphics Designing. You can check my page <a href='deeesigns' title='Deeesigns Studios'><u>here</u></a>
                    </p>
                </div>
                <div>
                    <div class="p_pic">
                        <img src='public/img/deee.jpeg' />
                    </div>
                    <h1>DILLION MEGIDA &#128640;</h1>
                    <p><i class="fa fa-envelope"></i> dillionmegida@gmail.com<br/>
                        <i class="fa fa-phone"></i> +234 905 896 1095<br/><br/>
                        You can connect with me on my<br/>social media handles &#128512;<br/>
                        <a href='contact' title='Contact Me'><u>Contact Me</u></a>
                    </p>
                </div>
            </section>
            <section>
                <h2>What I do</h2>
                    <section class="services">
                        <div>
                            <img src='public/img/web.png' width='10%'/>
                            <h3>Web Development</h3>
                        </div>
                        <div>
                            <img src='public/img/brand.png' width="10%" />
                            <h3>Branding Identity</h3>
                        </div>
                        <div>
                            <img src='public/img/motion.png' width="10%" />
                            <h3>Motion Graphics</h3>
                        </div>
                        <div>
                            <img src='public/img/flyer.png' width="10%" />
                            <h3>Flyers / Banners</h3>
                        </div>
                    </section>
            </section>
        </section>

    <?php require 'public/common/body-rem.php' ?>