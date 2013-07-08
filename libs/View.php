<?php

class View { // This is the main (base) view. The others view (files within the views folder) are his clilds.
    
    function __construct() {
        //echo 'This is the view <br />';
    }
    
    public function render($name, $noInclude = false) {// This function will render the page (index)
        if ($noInclude == true) {
          require 'views/' . $name . '.php';  
        }
        else {
            require 'views/header.php';
            require 'views/' . $name . '.php';
            require 'views/footer.php';   
        }
    }
}