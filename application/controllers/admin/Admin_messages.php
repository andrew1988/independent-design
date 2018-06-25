<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_messages extends MY_Controller
{

    public function index()
    {
        $this->load->view('admin/sections/admin_header');
        $this->load->view('admin/sections/admin_head_menu');
        $this->load->view('admin/sections/admin_sidebar_menu');
        $this->load->view('admin/messages');
        $this->load->view('admin/sections/admin_footer');
    }
}
