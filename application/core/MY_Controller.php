<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller{

	public $isLoggedFlag;

	public function __construct(){
	 	parent::__construct();
        $this->checkLogin();
        $currentRoute = $this->uri->segment(1);
        if(($this->isLoggedFlag == 0) && ($currentRoute != 'admin_login')){
        	redirect(base_url('admin_login'));
        } else if($this->isLoggedFlag == 1){
        	redirect(base_url('admin_home'));
        }
    }


    public function checkLogin() {
    	$session_data = $this->session->all_userdata();
        if((isset($session_data['return_type']))&&($session_data['return_type'] == 1)&&(isset($session_data['usr_username']))){
            return $this->isLoggedFlag = 1; //is logged in
        } 
        else{
            return $this->isLoggedFlag = 0; //is not logged in
        }
    }




}