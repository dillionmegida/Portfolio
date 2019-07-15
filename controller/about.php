<?php

require 'libs/controller.php';

class About extends Controller {
    public function index() {
        $this->view->render('about');
    }
}