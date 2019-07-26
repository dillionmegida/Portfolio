<?php

$file = 'logo2.png';
$title = 'Deeesigns Studios | Gallery - Dillion Megida';
$active = 'gallery';
require 'public/common/headTag.php';
require 'public/common/nav.php';

?>


        <section class='gallery-nav'>
            <h2>MY GALLERY</h2>
            <div class="view-categories">
                <button id='totalPics' onclick="picsForDiv('totalPics', totalPics)" class="activeTag">All</button>
                <button id='logos' onclick="picsForDiv('logos', logos)">Logos</button>
                <button id='flyers' onclick="picsForDiv('flyers', flyers)">Flyers</button>
                <button id='toons' onclick="picsForDiv('toons', toons)">Toons</button>
                <a href='branding' title="Deeesigns Studios - Branding Page" title='Branding Page'><button>Branding</button></a>
            </div>
        </section>
        <section id='gallery-section'>

        </section>
        <p><a class="toBrand" href="branding" title='Branding Page'>Check Branding Page</a></p>

        <?php require 'public/common/sub-footer.php' ?>

        <div id='modal-container'>
            <div class="modal">

            </div>
        </div>

        <script src="public/assets/js/gallery.js"></script>
        
   


    
<?php
require 'public/common/footer.php'; 
?>