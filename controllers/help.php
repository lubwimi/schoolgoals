<?php

class Help extends Controller {
    
    function __construct() {
        parent::__construct();
    }
    
    function index() {
        $this->view->render('help/index');
    }
    
    public function other($arg = false) {
        
    require 'models/help_model.php'; // We require models folder to connect controlles with. 
    $model = new Help_Model();
    $this->view->blah = $model->blah();
    }
}