<?php

class Error extends Controller{
    
    function __construct() {
        parent::__construct();
    }
    
    function index() {
        $this->view->msg = 'This page does not exists'; // msg is a variable mesage.
        $this->view->render('error/index'); // We use the function render to render files. The base (main/parent) Controller extends here connect views folder and the Browser.
    }
}