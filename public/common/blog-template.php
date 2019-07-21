<?php

$title = 'Dillion Megida - '.$blogTitle;
require_once 'public/common/headTag.php';

//Necessary for next or previous links
$page = 'blog';

?>                  

        <?php
            $active = '';
            require 'public/common/main-left.php';
        ?>
                    

        <section class="blog">                    
            <div class="topNav">
                <!-- This displays on small screens -->
                <p><a href='blog' title="Blogging Page"><b>BLOG</b></a> - <?= $blogTitle ?></p>
            </div>
        	<section class="post">

                    <!-- Navs to prev and next articles -->
                    <div align='right'>
                        <?php require 'public/common/nextOrPrev.php' ?>
                    </div>
	                <h2><?= $blogTitle ?></h2>
	                <p><?= $date ?></p>
	                <hr>
	                <p class="content"><?= $content ?></p>
                    <div align='center'>
                        <p class="right-social">Connect with me:<br/>
                        <?php require 'public/common/social-media.php' ?>
                        </p>
                    </div>

                    <!-- Navs to prev and next articles -->    
                    <div align='center'>
                    <?php require 'public/common/nextOrPrev.php' ?>
                    </div>
        	</section>
        </section>


        
<?php require 'public/common/body-rem.php' ?>