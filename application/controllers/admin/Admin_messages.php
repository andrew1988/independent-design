<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_messages extends MY_Controller
{

    public function index()
    {
        $this->load->model('admin/MessagesModel');
        $messageNb = $this->MessagesModel->countUnreadMessages();
        $unreadMessages = $this->MessagesModel->unread();
        $readMessages   = $this->MessagesModel->read();


        $data['unreadMessages'] = $unreadMessages;
        $data['readMessages']   = $readMessages;
        $headMenuData['messageNb'] = $messageNb;


        $this->load->view('admin/sections/admin_header');
        $this->load->view('admin/sections/admin_head_menu', $headMenuData);
        $this->load->view('admin/sections/admin_sidebar_menu');
        $this->load->view('admin/messages', $data);
        $this->load->view('admin/sections/admin_footer');
    }

    public function readMessage()
    {

        $this->load->model('admin/MessagesModel');
        $messageNb = $this->MessagesModel->countUnreadMessages();
        $headMenuData['messageNb'] = $messageNb;
        $messageId = $this->uri->segment(2);
        $messageDetails = $this->MessagesModel->getMessage($messageId);


        $this->load->view('admin/sections/admin_header');
        $this->load->view('admin/sections/admin_head_menu', $headMenuData);
        $this->load->view('admin/sections/admin_sidebar_menu');
        $this->load->view('admin/view_message',$messageDetails);
        $this->load->view('admin/sections/admin_footer');

    }
}
