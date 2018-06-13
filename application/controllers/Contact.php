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
        
        public function sendMessage() {
            
            $site_header_data = ['page'=>'contact'];
            
            $this->form_validation->set_rules('name','Name','min_length[2]|max_length[200]|trim|required|alpha');
            $this->form_validation->set_rules('email','Email','min_length[2]|max_length[200]|trim|required|valid_email');
            //$this->form_validation->set_rules('subject','Subject','min_length[2]|max_length[200]|trim|required');
            $this->form_validation->set_rules('message','Message','min_length[2]|max_length[200]|trim|required');
            $this->form_validation->set_rules('web','Web Site','min_length[2]|max_length[1000]|trim');
            $this->form_validation->set_rules('phone','Web Site','exact_length[10]|trim|numeric');
            
            if($this->form_validation->run() == true) {

                $contactData = [
                    'name' => $this->input->post('name'),
                    'email' => $this->input->post('email'),
                    'phone' => $this->input->post('phone'),
                    'website' => $this->input->post('website'),
                    'subject' => $this->input->post('subject'),
                    'message' => $this->input->post('message'),
                    'message_status' => false,  
                ];

                $this->load->model('ContactModel');
                $this->ContactModel->addMesage($contactData);
            }
            
            $this->load->view("header");           //load common header
            $this->load->view("site_header", $site_header_data);     //menu logo and social bar
            $this->load->view('contact');     //load specific content
            $this->load->view('footer');        //web site footer
            
        }
	
}
