<?php

class Admin_Login extends CI_Controller {
	public function __construct() {
        parent::__construct();
       
    }

    public function index() {
    	$this->load->view('admin/login');
    }

    public function check_admin_login() {
    	redirect('super_admin');
    }

}