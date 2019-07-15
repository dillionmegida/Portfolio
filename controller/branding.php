<?php

require 'libs/controller.php';

class Branding extends Controller {
    public function index() {
        $this->view->render('branding');
    }
}