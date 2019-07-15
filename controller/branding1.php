<?php

require 'libs/controller.php';

class Branding1 extends Controller {
    public function index() {
        $this->view->render('branding1');
    }
}