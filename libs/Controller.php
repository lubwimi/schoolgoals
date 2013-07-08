<?php

class Controller { // This is the main controller. In the others controller (files within controllers folder) we are his childs (extends Controller).
    
    function __construct() {
       // echo 'Main controller <br />';
        $this->view = new View(); // instance of view inside the base (main) controller will help us to bring views to the browser
    }
    
    public function loadModel($name) {
        
        $path = 'models/'.$name.'_model.php';
        
        if (file_exists($path)) {
            require 'models/'. $name.'_model.php';
           
            $modelName = $name . '_Model';
            $this->model = new $modelName();
        }
    }
}