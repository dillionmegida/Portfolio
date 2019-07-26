<?php

$title = 'Page Could not be found';
$active = '';
require 'public/common/headTag.php';
require 'public/common/main-left.php';
?>      
        <section class="errorPage">
                <div>
                        <img src="public/img/error-img.png" width='50%' title='Illustration for page not found'/>
                        <h1>Page Not Found</h1>
                        <h1>404 Error</h1>
                        <p><a class="goto" href='/' title="Homepage">Go to Homepage</a></p>
                </div>
        </section>

        <style> 
        .errorPage {
                margin-top: 100px;
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                text-align: center;
        }
        .errorPage h1 {
                font-size:  30px;
        }
        .errorPage a {
                font-size: 25px;
        }
        .goto:hover {
                font-weight: bold;        
        }
        </style>
        

<?php require 'public/common/body-rem.php' ?>
