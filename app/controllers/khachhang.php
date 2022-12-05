


<?php

    class khachhang extends DController{
        
        public function __construct(){
            $data = array();
            parent::__construct();
        }
        public function khachhang()
        {
             
             $this->khachhang();
             
        }
        public function khachhang(){
           
        
        }
        
        public function notfound(){
            $table = 'tbl_category_product';
            $table_post = 'tbl_category_post';
            $categorymodel = $this->load->model('categorymodel');
            $data['category'] = $categorymodel->category_home( $table);
            $data['category_post'] = $categorymodel->categorypost_home(  $table_post);
            $this->load->view('header',$data);
            $this->load->view('404');
            $this->load->view('footer');
        }
        // public function login(){
        //     $this->load->view('cpanel/login');
           
        // }
        public function dangnhap(){
            $table = 'tbl_category_product';
            $table_post = 'tbl_category_post';
            $table_product = 'tbl_product';
            $post ='tbl_post';
            $categorymodel = $this->load->model('categorymodel');

            $data['category'] = $categorymodel->category_home( $table);
            $data['category_post'] = $categorymodel->categorypost_home(  $table_post);
            $data['post_index']= $categorymodel->post_index($post);
            $this->load->view('header',$data);
            $this->load->view('slider');
            $this->load->view('customer_login');
            $this->load->view('footer');
           
        }
        // public function dangky(){
        //     $table = 'tbl_category_product';
        //     $table_post = 'tbl_category_post';
        //     $categorymodel = $this->load->model('categorymodel');
        //     $data['category'] = $categorymodel->category_home( $table);
        //     $data['category_post'] = $categorymodel->categorypost_home(  $table_post);
        //     $this->load->view('header',$data);
        //    // $this->load->view('slider');
        //     $this->load->view('contact');
        //     $this->load->view('footer');
           
        // }
    }
    
?>