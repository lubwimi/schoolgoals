<?php

class Bootstrap {
    
    function __construct() {
        $url = isset($_GET['url']) ? $_GET['url'] : null; // Here we define the variable $url and aske if is isset or no.  
        $url = rtrim($url, '/'); // The function rtrim is a function which alloweds us to use / after $url (file e.g. help/) to give us a string/array (e.g. helpother)
        $url = explode('/',  $url); // The function explode (explosion of our variable $url) brings an array of $url (a function (e.g. other()) which is inside a controller (a file which is inside the controllers folder)). 
        
        //print_r($url);
        
        if(empty($url[0])) {
            require'controllers/index.php';
            $controller = new Index();
            $controller->index();
            return false; // false means all the code bellow will not execute if $url[0] is empty.
        }
        
        $file = 'controllers/' . $url[0] . '.php'; // Fšrsta bit av variabel $url. upload controller (file within controllers folder), the first argument ($url[0]) is the controller (first url)
        if (file_exists($file)) { // check if the file existe 
            require $file;    
        }
        else {
            $this->error();
            
        }
        
        $controller = new $url[0]; // url instance (object)
        $controller->loadModel($url[0]);
        
        
        //calling methods
        if (isset($url[2])) { // check if a more argument (url) is set
            if (method_exists($controller, $url[1])) {
                $controller->{$url[1]}($url[2]);
            }else {
                
                $this->error();
            }
        }
        else {
            if (isset($url[1])) { // check if a more argument (url) is set
                if(method_exists($controller, $url[1])) {
                    $controller->{$url[1]}();
                } else {
                    $this->error();
                }
            } else {
                $controller->index();
            }
        }
    }
    function error() {
        require 'controllers/error.php';
        $controller = new Error();
        $controller->index();
        return false;
    }
}