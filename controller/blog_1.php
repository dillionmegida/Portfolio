<?php

require 'libs/controller.php';

class Blog_1 extends Controller {
    public function index() {
        $this->view->render('blogs/blog_1');
    }
}