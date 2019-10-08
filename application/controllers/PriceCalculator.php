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

        // Loads a config file named calculator_actions_descriptions.php and assigns it to an index named "calculator_actions_descriptions"
        $this->config->load('calculator_actions_descriptions', TRUE);
        $descriptions = $this->config->item('calculator_actions_descriptions');

        $infoData = [
            'description' => !empty($this->input->post('description')) ? $this->input->post('description') : null,
            'basic_needs' => !empty($this->input->post('basic_needs')) ? $this->input->post('basic_needs') : null,
        ];

        $calculatorData = [
            'website_type' => !empty($this->input->post('website_type')) ? $this->input->post('website_type') : null,
            'graphics' => !empty($this->input->post('graphics')) ? $this->input->post('graphics') : null,
            'integrations' => !empty($this->input->post('integrations')) ? $this->input->post('integrations') : null,
            'graphic_elements' => !empty($this->input->post('graphic_elements')) ? $this->input->post('graphic_elements') : null,
            'other_services' => !empty($this->input->post('other_services')) ? $this->input->post('other_services') : null,
            'seo' => !empty($this->input->post('seo')) ? $this->input->post('seo') : null,
            'social' => !empty($this->input->post('social')) ? $this->input->post('social') : null,
        ];

        $total = 0;

        $dataToInsert = array();
        $temporaryArray = array();

        foreach ($calculatorData as $key=>$value) {
            $temporaryArray['option'] = $key;
            $temporaryArray['description'] = '';
            $temporaryArray['value'] = 0;

            if (is_array($value)) {
                foreach ($value as $type=>$cost) {
                    if($type == 'other_social') {
                        $otherSocialField = $this->input->post('other_social');
                        $temporaryArray['other_social'] = $otherSocialField;
                    }
                    if($type == 'other_integration') {
                        $otherIntegration = $this->input->post('other_integration');
                        $temporaryArray['other_integration'] = $otherIntegration;
                    }

                    $temporaryArray['value'] += (int)$cost;
                    $temporaryArray['description'] .= ($cost != end($value)) ? $type . ', ' : $type.", ";
                    $total += $cost;
                }
            } else {
                $temporaryArray['description'] = $descriptions[$key];
                $temporaryArray['value'] = $value;
                $total += $value;
            }
            $dataToInsert[] = $temporaryArray;
        }

        //print("<pre>new: $otherSocialField</pre>");

        print('Total: '. $total);
        print("<pre>"); print_r($calculatorData); print("</pre>");
        print("<pre>"); print_r($dataToInsert); print("</pre>");

    }

}
