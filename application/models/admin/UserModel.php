<?php

class UserModel extends CI_Model{

    public function checkLogin($params){
        extract($params);
        $query = $this->db->get_where('users',array('username'=>$username,'password'=>sha1($password)));
        $rezultate = $query->result_array();
        $data = array();
        if(count($rezultate) != 0){
            $data["return_type"] = 1;
            $this->session->set_userdata($data);
            return $data;
        }else{
            $data["return_type"] = 0;
            return $data;
        }
    }    
}