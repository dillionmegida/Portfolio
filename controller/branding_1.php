<?php

require 'libs/controller.php';

class Branding_1 extends Controller {
    public function index() {
        $this->view->render('brands/branding_1');
    }
}