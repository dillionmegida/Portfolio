<?php

$title = 'DEEESIGNS STUDIOS - Graphics Design and Branding';
$active = 'portfolio';

require 'public/common/headTag.php';
require 'public/common/nav.php';



?>


    <header class="breadcrumb">
        <a href="portfolio">Portfolio</a> - Branding
    </header>
    <section class="display-brand">
        

        <section class="pictures">
            <div class="logo">
                <img src='public/img/portfolio/<?= $logoName ?>.jpg' alt="Logo of the brand" title='Logo'>
            </div>
            <div class='mockup'>
            <img src='public/img/portfolio/<?= $mockupName ?>.jpg' alt="Mockup presentation of the logo" title='Mockup'>
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
        <a
        <?php
            // To check if there is no previous page
            if($previousPage == '') {
        ?>
        style='opacity: .6; cursor: pointer' title='This is the fist page'>Previous Page</a> |
        <?php
            } else {
        ?>
        href='<?= $previousPage ?>'>Previous Page</a> |
        <?php } ?>
        <a 
        <?php
            // To check if there is no next page
            if($nextPage == '') {
        ?>
        style='opacity: .6; cursor: pointer' title='This is the last page'>Next Page</a>
        <?php
            } else { 
        ?>
        href='<?= $nextPage ?>'>Next Page</a>
        <?php } ?>
        
        
        <br /><br />
    <a href='branding'>Go Back to Branding Page</a></p>



<?php

require_once 'public/common/footer.php';

?>