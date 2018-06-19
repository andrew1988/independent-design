<?php

class UserModel extends CI_Model{

    public function checkLogin($params){
        extract($params);
        $query = $this->db->get_where('usr_users',array('usr_email'=>$usr_email,'usr_password'=>$usr_password));
        $rezultate = $query->result_array();
        $data = array();
        if(count($rezultate) != 0){
            $data = ["return_type"=>1];
            return $data;
        }else{
            $data["return_type"] = 0;
            return $data;
        }
    }    
}