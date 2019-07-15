<?php

$title = 'DEEESIGNS STUDIOS - About Deeesigns Studios';
$active = 'about';
require_once 'public/common/headTag.php';
require_once 'public/common/nav.php';

?>  


    <?php
		$title = "ABOUT ME";
        $desc = "";
        $size = "landpageSmall";
		require 'public/common/bg.php';
    ?>
    
    <section class="abt_dsigns">
        <div>
            <h2>About Deeesigns Studios</h2>
            <p>Deeesigns Studios started in January 2018, offering services such as Graphics and Advertisement Design to help brand or rebrand your idea in good visual and attractive presentation. Added to this, we deal in Web Development.
            <br/><br/>
            Services comprises of Logo Designs for giving your brand a unique identity and also Flyers, Banners or Poster Designs to help advertisement your brand to the public.
            <br/><br/>
        It would be my pleasure to help you out today. Let me rebrand your idea.</p>
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

        
    </section>

    <br/>
    <section class="abt_ceo">
            <div>
                <h2>Dillion Megida</h2>
                <div class="dp">
                    <img src='public/img/deee.jpg'>
                </div>
                <p><b>CEO Of Deeesigns Studios. </b>Dillion lives in Nigeria. He has been a graphics designer since 2017 before he founded this brand. You can connect with him on the follOwing media:</p>
                <p>Facebook | Twitter | Instagram.</p>
            </div>
            <div>
                <h2>Reports</h2>
                <p><b>500</b> Projects Delivered</p>
                <p><b>402</b> Satisfied Clients</p>
                
            </div>
    </section>

    <?php require 'public/common/testimonials.php' ?>

    <?php require 'public/common/sub-footer.php' ?>
    


<?php

require 'public/common/footer.php';

?>