<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_login extends MY_Controller
{


    public function index()
    {

        $username = $this->input->post('username');
        $password = $this->input->post('password');
        //die("face login");
        if (isset($username) && isset($password)) {
            $this->doLogin($username, $password);
            $message = '';
        } else {
            $message = '';
        }

        $this->load->view('admin/login', $message);
    }

    private function doLogin($username, $password)
    {
        $userInfo = ['username' => $username, 'password' => $password];
        $this->load->model('admin/UserModel');
        $checkUser = $this->UserModel->checkLogin($userInfo);

        if ($checkUser['return_type'] == 1) {

            header('Location: ' . base_url("admin_home") . '');
        } else {
            if ((!isset($username)) && (!isset($password))) {
                $data['message'] = '';
            } else {
                $data['message'] = 'Ai gresit userul sau parola';
            }
            return false;
        }
        return true;
    }

    public function logOut()
    {
        $this->session->unset_userdata('return_type');
        $this->session->sess_destroy();
        redirect('admin');
    }
}
