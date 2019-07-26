<?php

$title = 'Dillion Megida - Blog';
require_once 'public/common/headTag.php';

?>
        <?php
            $active = 'home';
            require 'public/common/main-left.php'
        ?>

    <section class='blogs'>
        <div class="post">
            <a href="return_statement_simplified" href="Return Statement Simplified">
                <div class="new">
                    <p>NEW</p>
                </div>
                <h2>Return Statement Simplified</h2>
                <p>22nd July, 2019</p>
                <hr>
                <p>
                    I usually have issues with this statement and as I was able to have a grasp of it, I decided to write about it.
                    <br/><br/>
                    The return statement is a statement that evaluates a value and attaches it to a function. When such functions are called, they return the value that was evaluated.
                    <br>
                            Take a look at this example,
                <pre>
                <code class='language-javascript'>
                let a = 5;
                let b = 5;
                let c = a + b;
                console.log('a: ' + a + ', b: ' + b + ', c: ' + c);
                //Output
                //a: 5, b: 5; c: 10 
                </code>
                </pre>
                </p>
            </a>
        </div>
        <div class="post">
            <a href="first_blog" href="Blogging Post 1">
                <h2>Dillion Megida - First Blog</h2>
                <p>18th July, 2019</p>
                <hr>
                <p>
                    My name is <b>Dillion Megida</b>.
                    <br/><br/>
                    This is my first blog and I plan to keep this as a reference as to when I launched <b>dillionmegida.com</b>
                    <br>
                    I plan to share tutorials and articles on my blog every week so that I could also in my own little way, add value to the community and also challenge / improve myself.
                    <br/><br/>
                    I am a Front Web Developer, quite efficient with HTML5, CSS3, Nodejs, Reacjs, Javascript and few other front end languages.
                    <br/>
                    Also, I am a graphics designer and my tools at the moment are Adobe Photoshop and Illustrator. Services comprises of Branding Design, Advertisements Design and other graphics designs.
                    <br/><br/>
                </p>
            </a>
        </div>


    </section>

    <?php require 'public/common/body-rem.php' ?>

    