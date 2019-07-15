<?php

class View {
    public function render($filepath) {
        require('public/'.$filepath.'.php');
    }
}

?>