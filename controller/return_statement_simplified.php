<?php

require 'libs/controller.php';

class Return_statement_simplified extends Controller {
    public function index() {
        $this->view->render('blogs/return_statement_simplified');
    }
}