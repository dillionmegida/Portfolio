<?php

require 'libs/controller.php';

class Blog extends Controller {
    public function index() {
        $this->view->render('blog');
    }
}