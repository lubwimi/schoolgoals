<?php

class Learn extends Controller {
    
    function __construct() {
        parent::__construct();
    }
    
    function index() { 
        $this->view->render("learn/index");
    }
    
}