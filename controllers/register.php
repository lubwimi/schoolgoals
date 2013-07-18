<?php

class Register extends Controller {
    
    function __construct() {
        parent::__construct();
    }
    
    function index() {
        $this->view->render('register/index');
    }
    
    public function other($arg = false) {
        
    require 'models/register_model.php'; // We require models folder to connect controlles with. 
    $model = new Rgister_Model();
    $this->view->blah = $model->blah();
    }
}