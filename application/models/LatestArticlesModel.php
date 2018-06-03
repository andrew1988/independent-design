<?php

class LatestArticlesModel extends CI_Model{
    
    //protected $db2;
    
    public function __construct(){
        parent::__construct();
        //incarca baza de date speciala.
        $this->db2 = $this->load->database('blog', TRUE);
    }
       
    public function getLastArticles(){
        $lastArticles = $this->db2
                        ->select('post_date,post_title,post_content')
                        ->limit(4)
                        ->get_where('wp_posts',array('post_status'=>'publish'));
        return $lastArticles->result_array();
    }
    
}