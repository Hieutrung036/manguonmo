<?php

    class lienhe extends DController{
        
        public function __construct(){
            $data = array();
            parent::__construct();
        }
        public function index()
        {
             $this->lienhe();
             
        }
        public function lienhe(){
            $table = 'tbl_category_product';
            $table_post = 'tbl_category_post';
            $categorymodel = $this->load->model('categorymodel');
            $data['category'] = $categorymodel->category_home( $table);
            $data['category_post'] = $categorymodel->categorypost_home(  $table_post);
            $this->load->view('header',$data);
           // $this->load->view('slider');
            $this->load->view('contact');
            $this->load->view('footer');
           
        }
    }
    
?>