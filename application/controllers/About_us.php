<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About_us extends CI_Controller {

	
	public function index()
	{
                $site_header_data = ['page'=>'about-us'];
                
                $this->load->view("header");           //load common header
                $this->load->view("site_header", $site_header_data);     //menu logo and social bar
                $this->load->view('about-us');     //load specific content
                $this->load->view('footer');        //web site footer
	}
	
}
