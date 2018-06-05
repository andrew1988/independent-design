<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class EntryPage extends CI_Controller {


	public function index()
	{       $site_header_data = ['page'=>'home'];  //name of page in order to activate link
                $this->load->model('LatestArticlesModel');
                $lastArticles = $this->LatestArticlesModel->getLastArticles();
                $processedData['process'] = $this->processBlogArticles($lastArticles);
                $this->load->view("header");           //load common header
                $this->load->view("site_header",$site_header_data);     //menu logo and social bar
                $this->load->view('index_page',$processedData);     //load specific content
                $this->load->view('footer');        //web site footer
	}
        private function processBlogArticles($lastArticles){
            $processedData = array();
            foreach($lastArticles as $lastArticle) { 
                $result1 = preg_match_all('/<img[^>]+>/i',$lastArticle['post_content'], $result);
                if(!empty($result1)){
                    
                    $htmlDoc = new DOMDocument();
                    $htmlDoc->loadHtml($result[0][0]);
                    $srcPath  = new DOMXPath($htmlDoc);
                    $actualSrc = $srcPath->evaluate("string(//img/@src)"); 
                    
                } else {
                    $actualSrc = base_url('/assets/placeholder.png');
                }
                
                print("<pre>"); print_r($lastArticle['post_content']); print("</pre>");
                $datetime = new DateTime($lastArticle['Date']);
                
                $lastArticle['post_content'] = strip_tags(html_entity_decode($lastArticle['post_content']));
                $lastArticle['post_content'] = substr($lastArticle['post_content'],0,200);
                $lastArticle['image_src'] = $actualSrc;
                $lastArticle['day'] = $datetime->format('d');
                $lastArticle['month'] = $datetime->format('M');
                $lastArticle['Category'] = (empty($lastArticle['Category']) ? 'unknown' : $lastArticle['Category'] );
                $processedData[] = $lastArticle;
            }
            
            return $processedData;
        }
}
