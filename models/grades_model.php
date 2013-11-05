<?php

class Grades_Model extends Model {
    
    function __construct() {
        parent::__construct();
    }
    
    function xhrInsert() { //This is an ajax call
       $text = $_POST['text'];
       
       $sth = $this->db->prepare('INSERT INTO grades (text) VALUES (:text)');
       $sth->execute(array(':text' => $text));
       $data = array('text' => $text, 'id' => $this->db->lastInsertId());
       echo json_encode($data); 
    }
    
    function xhrGetListings() {
       $sth = $this->db->prepare('SELECT * FROM grades');
       $sth->setFetchMode(PDO::FETCH_ASSOC);
       $sth->execute();
       $data = $sth->fetchAll();
       echo json_encode($data);
    }
    
    function xhrDeleteListing() {
       $id = $_POST['id'];
       $sth = $this->db->prepare('DELETE FROM grades WHERE id = "'.$id.'"');
       $sth->execute();
       echo json_encode($sth);
    }
    
}