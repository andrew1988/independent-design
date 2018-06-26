<?php

class MessagesModel extends CI_Model
{

    public function countUnreadMessages()
    {
        $select = "SELECT id FROM contact where message_status = 0";
        $result = $this->db->query($select)->num_rows();

        return $result;

    }

    public function read()
    {
        $select = "SELECT id,name,email,date_received FROM contact where message_status = 1";
        $result = $this->db->query($select);

        return $result->result_array();
    }

    public function unread()
    {
        $select = "SELECT id,name,email,date_received FROM contact WHERE message_status = 0  ORDER BY id DESC";
        $result = $this->db->query($select);

        return $result->result_array();
    }

    public function getMessage($id)
    {
        $select = "SELECT id,name,email,phone,website,message,date_received, ip_sent_from 
                   FROM contact where id=$id";
        $result = $this->db->query($select);

        $data['message_status'] = 1;
        $this->db->where('id',$id);
        $this->db->update('contact',$data);

        return $result->row_array();
    }


    public function deleteMessage()
    {

    }

}