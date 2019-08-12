<?php

$title = 'Dillion Megida - Contact Me';
require_once 'public/common/headTag.php';

?>
        <?php
            $active = 'contact';
            require 'public/common/main-left.php'
        ?>
    <section class="contact">
        <h1 style="margin-top: 100px" align='center'>Need a Website, Graphic Design(s) or Just to say Hi?</h1>
        <p align='center'>Kindly fill in your informations</p>
        <section class="form">
            <form action="https://formspree.io/dillionmegida@gmail.com" method="POST" >
                <div class="name_and_email">
                    <div>
                        <label for="name">Name:</label><br/>
                        <input name='name' type="text" placeholder="Enter your fullname..."><br/>
                    </div>
                    <div>
                        <label for="name">Email Address:</label><br/>
                        <input name='email' type="email" placeholder="Enter your email address..."><br/>
                    </div>
                </div>
                <label for="name">Message:</label><br/>
                <textarea name="message" cols="30" rows="10" placeholder="Enter your message..."></textarea>
                <input type="submit" class="submit_btn" value="Send Message">
            </form>
        </section>

        <p align="center">Contact Me:<br/>
            <i class='fa fa-phone'></i> +234 905 986 1095<br/>+234 813 033 6474</p>
        <p align="center"><i class="fa fa-envelope"></i> dillionmegida@gmail.com</p>
        <p align="center" class="right-social">Connect with me:<br/>
        <?php require 'public/common/social-media.php' ?>
        </p>

    </section>

    <?php require 'public/common/body-rem.php' ?>
