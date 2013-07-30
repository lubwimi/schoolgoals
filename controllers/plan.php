<?php

class Plan extends Controller {
    
    function __construct() {
        parent::__construct();
    }
    
    function index() { 
        $this->view->render("plan/index");
    }
    
}