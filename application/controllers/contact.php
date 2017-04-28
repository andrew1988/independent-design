<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {

	
	public function index()
	{
                $site_header_data = ['page'=>'contact'];
                
                $this->load->view("header");           //load common header
                $this->load->view("site_header", $site_header_data);     //menu logo and social bar
                $this->load->view('contact');     //load specific content
                $this->load->view('footer');        //web site footer
	}
	
}
