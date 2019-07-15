<?php

require 'libs/controller.php';

class pageError extends Controller {
    public function pageError() {
        // $this->view->render('view/error.php');
        require_once 'public/error.php';
    }
}

?>