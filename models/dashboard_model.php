<?php

class Dashboard_Model extends Model {
    
    function __construct() {
       
    }
    
    function xhrInsert() {
       $text = $_POST['text'];
       
       $sth = $this->db->prepare('INSERT INTO data (text) VALUES (:text)');
        $sth->execute(array(':text' => $text));
    }
}