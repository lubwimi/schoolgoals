<?php

class Register_Model extends Model{
    
    public function __construct() {
        parent::__construct();
    }
    
    public function create($data) {
        $sth = $this->db->prepare('INSERT INTO users
            (`login`, `password`, `firstname`, `surname`)
            VALUES (:login, MD5(:password), :firstname, :surname)
            ');
        
        $sth->execute(array(
            ':login' => $data['login'],
            ':password' => $data['password'],
            ':firstname' => $data['firstname'],
            ':surname' => $data['surname']
            ));
        
        $count = $sth->rowCount();
        if($count > 0) {
            header('location: ../login');
        }
    }
}
