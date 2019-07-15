<?php

$title = 'DEEESIGNS STUDIOS | Portfolio';
$active = 'portfolio';
require 'public/common/headTag.php';
require 'public/common/nav.php';

?>


        <section class='portfolio-nav'>
            <h2>MY PORTFOLIO</h2>
            <div class="view-categories">
                <button id='totalPics' onclick="picsForDiv('totalPics', totalPics)" class="active">All</button>
                <button id='flyers' onclick="picsForDiv('flyers', flyers)">Flyers</button>
                <button id='logos' onclick="picsForDiv('logos', logos)">Logos</button>
                <button id='toons' onclick="picsForDiv('toons', toons)">Toons</button>
                <a href='branding' title="Deeesigns Studios - Branding Page"><button>Branding</button></a>
            </div>
        </section>
        <section id='portfolio-section'>

        </section>
        <p><a class="toBrand" href="branding">Check Branding Page</a></p>

        <?php require 'public/common/sub-footer.php' ?>

        <div id='modal-container'>
            <div class="modal">

            </div>
        </div>

        <script src="public/assets/js/portfolio.js"></script>
        
   


    
<?php
require 'public/common/footer.php'; 
?>