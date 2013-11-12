<?php

class Login_Model extends Model {
    
    public function __construct() {
        parent::__construct();
    }
    
    public function run() {
        
       $sth = $this->db->prepare("SELECT id, firstname, surname FROM users WHERE     
                login = :login AND password = MD5(:password) ");
        $sth->execute(array(
          ':login' => $_POST['login'],
          ':password' => $_POST['password']
        ));
        
        $data = $sth->fetch();
       
        // print_r($data);
        
        /*echo $data['firstname'].' '.$data['surname'];
        die;*/
        
        //$data = $sth->fetchAll();
        /*if(isset($_POST['firstname']) && isset($_POST['surname'])) {
            $firstname = $_POST['firstname'];
            $surname = $_POST['surname'];
            
            
        }*/
         
        $count = $sth->rowCount();
        if($count > 0) {
            // login
            Session::init();
            Session::set('firstname', $data['firstname'] && 'surname', $data['surname']);
            Session::set('loggedIn', true);
            header('location: ../dashboard');
            
        } else {
            header('location: ../login');
        }
       
    }
    
}

?>