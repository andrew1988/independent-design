<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PricingModel extends CI_Model{
    //protected $db2;
    public function addPriceEstimation($data) {
        foreach($data as $element) {
            $email = $element['email'];
            $option = $element['option'];
            $value = $element['value'];
            $description = (isset($element['description']) ? $element['description'] : null );
            if(isset($element['other_integration'])) {
                $othReqDet = $element['other_integration'];
            } else if(isset($element['other_social'])) {
                $othReqDet = $element['other_social'];
            } else {
                $othReqDet = null;
            }

            $identifier = $element['identifier'];
            $insert = "INSERT into price_request(requester_email,option,value,description,other_request_details,identifier,timestamp)
                       VALUES('$email','$option','$value','$description','$othReqDet','$identifier', now())";
            $this->db->query($insert);

        }
        return true;
    }
    public function addSugestion($data) {
        $this->db->insert('price_calculator_suggestions',$data);
        return true;
    }
}