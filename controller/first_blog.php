<?php

require 'libs/controller.php';

class First_blog extends Controller {
    public function index() {
        $this->view->render('blogs/first_blog');
    }
}