<?php

require 'libs/controller.php';

class Deeesigns extends Controller {
    public function index() {
        // $this->view->title = 'DEEESIGNS STUDIOS';
        $this->view->render('deeesigns');
    }
}

?>