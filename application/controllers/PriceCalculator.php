<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PriceCalculator extends CI_Controller {
    //hard coding price per hour


    protected $hourlyPrice = 4;

    protected $valuePerHour = null;


	public function index()
	{
                $site_header_data = ['page'=>'price-calculator'];

                $this->load->view("header");           //load common header
                $this->load->view("site_header", $site_header_data);     //menu logo and social bar
                $this->load->view('price-calculator');     //load specific content
                $this->load->view('footer');        //web site footer
	}


    /* pseudocod algoritm -- cam ce cred eu ca ar trebui sa fie:
    *  fiecare element are timp - un numar de ore
     * timpul costa bani, taxarea se face pe ora
     * fiecare element selectat se aduna si creaza un total
     * daca am 2 servicii unul dureaza 1 ora si altul 2 ore, iar
     * pe ora am pretul de 1 leu
     * atunci 1+2 = 3 lei
     * cam asta este ideea principala.
    */
	public function calculatePrice()
    {
        $calculatorData = [
            'description' => !empty($this->input->post('description')) ? $this->input->post('description') : null,
            'basic_needs' => !empty($this->input->post('basic_needs')) ? $this->input->post('basic_needs') : null,
            'graphics' => !empty($this->input->post('basic_needs')) ? $this->input->post('basic_needs') : null,
            'public' => !empty($this->input->post('public')) ? $this->input->post('public') : null,
            'public' => !empty($this->input->post('ecomerce')) ? $this->input->post('ecomerce') : null,
        ];

        //avem 3 tipuri de raspunsuri, cuantificabile in ore, necuantificabile(cu pret fix) si informative


        var_dump($calculatorData);

        print("<pre>"); print_r($calculatorData); print("</pre>");


    }

}
