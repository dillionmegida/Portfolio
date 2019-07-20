<?php

require 'libs/controller.php';

class Home extends Controller {
    public function index() {
        $this->view->render('home');
    }
}
