<?php

require 'libs/controller.php';

class Portfolio extends Controller {
    public function index() {
        $this->view->render('portfolio');
    }
}