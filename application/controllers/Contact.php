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
            $this->form_validation->set_rules('message','Message','min_length[2]|max_length[1000]|trim|required');
            $this->form_validation->set_rules('web','Web Site','min_length[2]|max_length[200]|trim');
            $this->form_validation->set_rules('phone','Web Site','exact_length[10]|trim|numeric');
            $date = new DateTime();

            
            if($this->form_validation->run() == true) {

                $contactData = [
                    'name' => $this->input->post('name'),
                    'email' => $this->input->post('email'),
                    'phone' => $this->input->post('phone'),
                    'website' => 'site.com',//$this->input->post('web'),
                    //'subject' => $this->input->post('subject'),
                    'message' => $this->input->post('message'),
                    'message_status' => false,
                    'date_received'  => $date->format('Y-m-d H:i:s'),
                    'ip_sent_from' => $_SERVER['REMOTE_ADDR']
                ];

                $this->load->model('ContactModel');
                $this->ContactModel->addMesage($contactData);
                $data = ['response'=>'success', 'message' => 'Mesajul a fost trimis, veti fi contactat in curand'];
            } else {
                $data = ['response'=>'error', 'message' => validation_errors()];
            }

            echo json_encode($data);
            
        }
	
}
