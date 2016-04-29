<?php

class Super_Admin extends CI_Controller {
	public function __construct() {
        parent::__construct();
        $this->load->model('super_admin_model','sa_model',true);
       
    }

    public function index() {
    	$this->load->view('admin/admin_home') ;
    }

    public function add_category() {
    	$data = array();
    	$data['admin_maincontent'] = $this->load->view('admin/add_category','',true);
    	$this->load->view('admin/admin_home',$data);

    }

    public function save_category() {
    	$data=array();
        $data['cat_name']=$this->input->post('category_title',true);
        $data['cat_description']=$this->input->post('category_description',true);
        $this->sa_model->save_category_info($data);
        redirect("super_admin/add_category");
    }

}