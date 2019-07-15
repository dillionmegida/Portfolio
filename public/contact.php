<?php

$title = 'DEEESIGNS STUDIOS | Contact Me';
$active = 'contact';
require 'public/common/headTag.php';
require 'public/common/nav.php';

?>

    <?php
		$title = "CONTACT US";
        $desc = "";
        $size = "landpageSmall";
		require 'public/common/bg.php';
    ?>
    <h1 style="margin-top: 50px">Let Us Rebrand For You</h1>
    <p>Kindly fill in your informations</p>
    <section class="form">
        <form action="#">
            <div class="name_and_email">
                <div>
                    <label for="name">Name:</label><br/>
                    <input name='name' type="text" placeholder="Enter your fullname..."><br/>
                </div>
                <div>
                    <label for="name">Email Address:</label><br/>
                    <input name='email' type="email" placeholder="Enter your email address..."><br/>
                </div>
            </div> <br/>
            <label for="name">Message:</label><br/>
            <textarea name="message" cols="30" rows="10" placeholder="Enter your message..."></textarea>
            <input type="submit" class="submit_btn" value="Send Message">
        </form>
    </section>
    <?php require 'public/common/sub-footer.php' ?>


<?php
require 'public/common/footer.php'; 
?>