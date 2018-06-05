<?php

class LatestArticlesModel extends CI_Model{
    
    //protected $db2;
    
    public function __construct(){
        parent::__construct();
        //incarca baza de date speciala.
        $this->db2 = $this->load->database('blog', TRUE);
    }
       
    public function getLastArticles(){
         $getArticlesSql = '
              SELECT p.ID,DATE(p.post_date) Date,u.display_name Author,p.post_title Title,GROUP_CONCAT(t.name) Category,
              CONCAT("http://yourdomain.com/blog/",p.post_name) URL, post_content
              FROM wp_posts p
              LEFT JOIN wp_users u ON p.post_author = u.ID
              LEFT JOIN wp_term_relationships rel ON rel.object_id = p.ID
              LEFT JOIN wp_term_taxonomy tax ON (tax.term_taxonomy_id = rel.term_taxonomy_id AND tax.taxonomy="category")
              LEFT JOIN wp_terms t ON (t.term_id = tax.term_id AND t.name!="uncategorized")
              WHERE p.post_status = "publish" and p.post_type="post"
              GROUP BY p.ID
              ORDER BY Date DESC limit 4;
         ';
         $lastArticles = $this->db2->query($getArticlesSql);
        /*$lastArticles = $this->db2
                        ->select('post_date,post_title,post_content')
                        ->join('wp_users','wp_posts.post_author = wp_users.ID')
                        ->join('wp_term_relationships','wp_term_relationships.object_id = wp_posts.ID')
                        ->join('wp_term_taxonomy','wp_terms.term_id = ')
                        ->limit(4)
                        ->get_where('wp_posts',array('post_status'=>'publish'));    */
        return $lastArticles->result_array();
    }
    
}