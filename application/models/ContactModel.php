<?php

class ContactModel extends CI_Model{
    //protected $db2;
    public function addMesage($data){
        $this->db->insert('contact',$data);
        return true;
    }    
}