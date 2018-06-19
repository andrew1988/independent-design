<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_login extends MY_Controller {


	public function index()
	{
		
		$email    = $this->input->post('username','Username','trim');
        $password = $this->input->post('password','Parola','');
        if(isset($email) && isset($password)){
        	$message = $this->doLogin($username,$password);
        } else {
        	$message = '';
        }

		$this->load->view('admin/login', $message);
	}

	private function doLogin($username, $password){
				
                $userInfo = ['usr_email'=>$username,'usr_password'=>$password];
                $this->load->model('admin/UserModel');
                $checkUser = $this->UserModel->checkLogin($userInfo);

            if($checkUser){
                    $this->session->set_userdata($checkUser);
                header('Location: '. base_url("admin_home").'');
            } else {
                if((!isset($username))&&(!isset($password))){
                $data['message'] = '';
            } else {
                $data['message'] = 'Ai gresit userul sau parola';
             }
            return false;
         }
        return true;
	}
}
