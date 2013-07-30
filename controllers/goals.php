<?php

class Goals extends Controller {
    
    function __construct() {
        parent::__construct();
    }
    
    function index() { 
        $this->view->render("goals/index");
    }
    
}