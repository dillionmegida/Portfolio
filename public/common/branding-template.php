<?php

$file = 'logo2.png';
$title = 'DEEESIGNS STUDIOS | Branding - Dillion Megida';
$active = '';

//Necessary for next or previous links
$page = 'branding';

        
require 'public/common/headTag.php';
require 'public/common/nav.php';



?>


    <header class="breadcrumb">
        <a href="gallery" title="Gallery Page">Gallery</a> - Branding
    </header>
    <section class="display-brand">
        

        <section class="pictures">
            <div class="logo">
                <img src='public/img/gallery/<?= $logoName ?>.jpeg' alt="Logo of the brand">
            </div>
            <div class='mockup'>
            <img src='public/img/gallery/<?= $mockupName ?>.jpeg' alt="Mockup presentation of the logo">
            </div>
        </section>
        <section class="description">
            <h3>Client: <br/><span style="color: purple;"><?= $client ?></span></h3>
            <h4>Technologies: <br/><?= $technologies ?></h4>
            <p>Description:<br />
            <?= $description ?></p>
            <p class="other_desc">Color: <span style="color: purple"><b>rgb(128, 0, 128)</b></span>
        </section>
    </section>
    <p>
        <?php require 'public/common/nextOrPrev.php' ?>       
        
        <br /><br />
    <a href='branding' title="Branding Page">Go Back to Branding Page</a></p>

    <?php require 'public/common/sub-footer.php' ?>



<?php

require_once 'public/common/footer.php';

?>