<?php

class Grades extends Controller {
    
    function __construct() {
        parent::__construct();
    }
    
    function index() { 
        $this->view->render("grades/index");
    }
    
}