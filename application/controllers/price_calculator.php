<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Price_calculator extends CI_Controller {

	
	public function index()
	{
                $site_header_data = ['page'=>'price-calculator'];
                
                $this->load->view("header");           //load common header
                $this->load->view("site_header", $site_header_data);     //menu logo and social bar
                $this->load->view('price-calculator');     //load specific content
                $this->load->view('footer');        //web site footer
	}
	
}
