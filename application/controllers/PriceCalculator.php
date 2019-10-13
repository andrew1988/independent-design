<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PriceCalculator extends CI_Controller {


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

        $this->form_validation->set_rules('email', 'Email', 'max_length[200]|trim|valid_email|min_length[4]');
        $this->form_validation->set_rules('description', 'Basic needs', 'trim|required');
        //$this->form_validation->set_rules('subject','Subject','min_length[2]|max_length[200]|trim|required');
        $this->form_validation->set_rules('website_type', 'Website type', 'trim|required');
        $this->form_validation->set_rules('graphics', 'Graphics type', 'trim|required');
        $this->form_validation->set_rules('integrations', 'Integration', 'trim');
        $this->form_validation->set_rules('graphic_elements', 'Graphic Elements', 'trim');
        $this->form_validation->set_rules('other_services', 'Other servcices', 'trim');
        $this->form_validation->set_rules('seo', 'SEO', 'trim|alpha_dash');
        $this->form_validation->set_rules('social', 'Social', 'trim|alpha_dash');
        $this->form_validation->set_rules('result', 'Result', 'trim|integer');

        if (($this->form_validation->run() == true)&&($this->input->post('result') == 7)) {

            $infoData = [
                'email' => !empty($this->input->post('email')) ? $this->input->post('email') : 'Anonimous',
                'site_description' => !empty($this->input->post('description')) ? $this->input->post('description') : null,
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
            $data = array();

            foreach ($calculatorData as $key => $value) {
                if (!is_null($value)) {
                    $temporaryArray['option'] = $key;
                    $temporaryArray['description'] = '';
                    $temporaryArray['value'] = 0;
                    $temporaryArray['identifier'] = time();
                    $temporaryArray['email'] = $infoData['email'];

                    if (is_array($value)) {
                        foreach ($value as $type => $cost) {
                            if (($type == 'other_social') && ($key == 'social')) {
                                $otherSocialField = $this->input->post('other_social');
                                $temporaryArray['other_social'] = $otherSocialField;
                            }
                            if (($type == 'other_integration') && ($key == 'integrations')) {
                                $otherIntegration = $this->input->post('other_integration');
                                $temporaryArray['other_integration'] = $otherIntegration;
                            }

                            $temporaryArray['value'] += (int)$cost;
                            $temporaryArray['description'] .= ($cost != end($value)) ? $type . ', ' : $type . ", ";

                            $total += $cost;
                        }
                    } else {
                        $values = explode(" ", $value);
                        $temporaryArray['description'] = $values[1];
                        $temporaryArray['value'] = $values[0];
                        $total += $values[0];
                    }
                    $dataToInsert[] = $temporaryArray;
                    unset($temporaryArray);
                }

            }

            array_unshift($dataToInsert, array("option" => $infoData['site_description'],
                "email" => $infoData['email'],
                "identifier" => time(),
                "value" => 0),
                array("option" => $infoData['basic_needs'],
                    "email" => $infoData['email'],
                    "identifier" => time(),
                    "value" => 0));

            $this->load->model('PricingModel');

            $dataWorked = $this->PricingModel->addPriceEstimation($dataToInsert);

            if($dataWorked == true) {
                $data = ['response' => 'success', 'message' => 'price_request_sent','redirection_url' => base_url('calculate_price_suggestion') . "/" . $total];
                $_SESSION['completed_calculator'] = true;
            } else {
                $data = ['response' => 'error', 'message' => 'An error occured, please try again later.'];
            }
        } else {
            $data = ['response' => 'error', 'message' => validation_errors()];
        }
        echo json_encode($data);
    }

    public function calculateSuggestion() {
        $site_header_data = ['page'=>'price-calculator'];
        $total = $this->uri->segment(2);
        $this->load->view("header");           //load common header
        $priceCalculatorData = ['total' => $total];

        $this->load->view("site_header", $site_header_data);     //menu logo and social bar
        $this->load->view('price-calculator-done',$priceCalculatorData);     //load specific content
        $this->load->view('footer');        //web site footer
    }

    public function saveSugestion() {
        $this->form_validation->set_rules('sugestions', 'Sugestions', 'max_length[250]|trim|min_length[10]|alpha_numeric_spaces');
        if ($this->form_validation->run() == true) {
            //dosave and replace page content
            $data = array();
            $dataToInsert = ['suggestion'=>$this->input->post('sugestions'), 'timestamp'=>date('Y-m-d', time())];
            $this->load->model('PricingModel');
            $savedSugestion = $this->PricingModel->addSugestion($dataToInsert);
            $allreadySubmited = isset($this->session->saved_suggestion) ? $this->session->saved_suggestion : null;
            $completedCalculator = isset($this->session->completed_calculator) ? $this->session->completed_calculator : null;

            if(($savedSugestion == true)&&(is_null($allreadySubmited))&&($completedCalculator)) {
                $data = ['response' => 'success', 'message' => 'sugestion_sent'];
                $_SESSION['saved_suggestion'] = true;
            } else {
                $data = ['response' => 'error', 'message' => 'An error occured, please try again later or you have allready sent the sugestion.'];
            }

        } else {
            //display_errors
            $data = ['response' => 'error', 'message' => validation_errors()];
        }

        echo json_encode($data);

    }

}
