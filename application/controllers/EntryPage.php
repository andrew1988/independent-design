<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class EntryPage extends CI_Controller {


	public function index()
	{       $site_header_data = ['page'=>'home'];  //name of page in order to activate link
                $this->load->model('LatestArticlesModel');
                $lastArticles = $this->LatestArticlesModel->getLastArticles();
                $processedData = $this->processBlogArticles($lastArticles);
                
                $this->load->view("header");           //load common header
                $this->load->view("site_header",$site_header_data);     //menu logo and social bar
                $this->load->view('index_page');     //load specific content
                $this->load->view('footer');        //web site footer
	}
        private function processBlogArticles($lastArticles){
            
            $processedData =  array();
            $temporaryArray = array();
            
            foreach($lastArticles as $lastArticle) {
                print("<pre> lart Article"); print_r($lastArticle); print("</pre>");
                preg_match_all('/<img[^>]+>/i',$lastArticle['post_content'], $result);
                if(empty($result)){
                   print("<pre> result_aray: "); print_r($result); print("</pre>");
                    $htmlDoc = new DOMDocument();
                    $htmlDoc->loadHtml($result[0][0]);
                    $srcPath  = new DOMXPath($htmlDoc);
                    $actualSrc = $srcPath->evaluate("string(//img/@src)"); 
                    
                } else {
                    $actualSrc = '/assets/placeholder.png';
                }
                print("<pre> result: images"); print_r($actualSrc); print("</pre>"); 
            }
            
            return $processedData;
        }
}
