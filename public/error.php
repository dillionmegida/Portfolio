<?php

$title = 'DEEESIGNS STUDIOS - Page Could not be found';
$active = '';
require 'public/common/headTag.php';
require 'public/common/nav.php';

?>      
        <div style="margin-top: 5vh;">
                <img src="public/img/error-img.png" width='20%'/>
                <h1>Page Not Found</h1>
                <h1>404 Error</h1>
                <p><a class="goto" href='home'>Go to Homepage</a></p>
        </div>

        <style>
        .goto{
                transition: font-weight 300ms;
        }
        .goto:hover {
                font-weight: bold;        
        }
        </style>
        

<?php
require 'public/common/footer.php';
?>