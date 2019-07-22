<?php

require 'libs/controller.php';

class Blog_2 extends Controller {
    public function index() {
        $this->view->render('blogs/blog_2');
    }
}