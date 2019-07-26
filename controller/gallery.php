<?php

require 'libs/controller.php';
class Gallery extends Controller {
    public function index() {
        $this->view->render('gallery');        
    }
    // public function branding() {
    //     $this->view->render('view/branding.php');
    // }
    
}

?>