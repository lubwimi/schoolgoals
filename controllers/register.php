<?php

class Register extends Controller {
    
    public function __construct() {
        parent::__construct();
        
    }
    
    public function index() {
        $this->view->render('register/index');
    }
    
    public function create() {
        $data = array();
        $data['login'] = $_POST['login'];
        $data['password'] = $_POST['password'];
        $data['firstname'] = $_POST['firstname'];
        $data['surname'] = $_POST['surname'];
        
        //@TODO: Do your error checking!
        
        $this->model->create($data);
    }
    
    public function other($arg = false) {
        
    require 'models/register_model.php'; // We require models folder to connect controlles with. 
    $model = new Register_Model();
    $this->view->blah = $model->blah();
    }
    
}