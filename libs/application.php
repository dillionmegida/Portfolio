<?php

class Application {
    public function __construct() {
        $tokens = explode('/', rtrim($_SERVER['REQUEST_URI'], '/'));
        
        $controllerName = count($tokens) == 1 ? 'home' : $tokens[1];
        
        $filepath = 'controller/'.$controllerName.'.php';
        
        
        $controllerName = ucfirst($controllerName);
        
        
        
        
        if(file_exists($filepath)) {
            
            require($filepath);
            $controller = new $controllerName;
            $controller->index();
            
            
            
        } else {
            $controllerName = 'pageError';
            require('controller/error.php');
            $controller = new $controllerName;
            $controller->pageError();
        }
    }
    
}



?>
