<?php

class Grades extends Controller {
    
    function __construct() {
        parent::__construct();
        Session::init();
        $logged = Session::get('loggedIn');
        if($logged == false) {
            Session::destroy();
            header('location: ../login');
            exit;
       }
        
        $this->view->msg = 'Welcome to grades! <br /> ';//.$_SESSION['user_id'];
        $this->view->js = array('grades/js/default.js');
    }
    
    function index() { 
        $this->view->render("grades/index");
    }
    
     function xhrInsert() { // xhr means xhtml http request
        $this->model->xhrInsert();
    }
    
    function xhrGetListings() {
        $this->model->xhrGetListings();
    }
    
    function xhrDeleteListing() {
        $this->model->xhrDeleteListing();
    }
}