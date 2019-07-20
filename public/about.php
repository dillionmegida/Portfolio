<?php

$file = 'logo2.png';
$title = 'DEEESIGNS STUDIOS | About - Dillion Megida';
$active = 'about';
require_once 'public/common/headTag.php';
require_once 'public/common/nav.php';

?>  


    <?php
		$title = "ABOUT DEEESIGNS";
        $desc = "";
        $size = "landpageSmall";
		require 'public/common/bg.php';
    ?>
    
    <section class="abt_dsigns">
        <div>
            <h2>About Deeesigns Studios</h2>
            <p>Deeesigns Studios started in January 2018, offering services such as Graphics and Advertisement Design to help brand or rebrand your idea in good visual and attractive presentation. Added to this is also Web Development.
            <br/><br/>
            Services comprises of Logo Designs for giving your brand a unique identity and also Flyers, Banners or Poster Designs to help advertise your brand to the public.
            <br/><br/>
        It would be my pleasure to help you out today. Let me rebrand your idea. Click <u><a href="contact" title="Contact me">here</a></u> let us talk about your business</p>
        </div>

        <div>
            <h2>Skills</h2>
            <p>Adobe Photoshop<br/>
            Adobe Illustrator<br/>
            HTML5 & CSS3<br/>
            Javascript<br/>
            Node.js & React.js<br/>
            PHP</p>
        </div>    
        
        <div>
            <h2>Reports</h2>
            <p><b>500</b> Projects Delivered</p>
            <p><b>402</b> Satisfied Clients</p>
                
        </div>

        
    </section>

    <br/>
 

    <?php require 'public/common/testimonials.php' ?>

    <?php require 'public/common/sub-footer.php' ?>
    


<?php

require 'public/common/footer.php';

?>