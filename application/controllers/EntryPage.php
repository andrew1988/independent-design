<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class EntryPage extends CI_Controller {


	public function index()
	{       $site_header_data = ['page'=>'home'];  //name of page in order to activate link

                $this->load->view("header");           //load common header
                $this->load->view("site_header",$site_header_data);     //menu logo and social bar
                $this->load->view('index_page');     //load specific content
                $this->load->view('footer');        //web site footer
	}
}
