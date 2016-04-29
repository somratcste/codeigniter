<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct() {
  
	parent::__construct();
   
 	$this->load->model('blogger_model','b_model',true);
 	$this->load->model('welcome_model','w_model',true);
    
    }
	public function index()
	{
           
		 $data=array();
		           
		 $data['result']=$this->b_model->select_all_blogs();
		 $data['all_category']=$this->w_model->select_all_category();
		           
		 $data['maincontent']=$this->load->view('home_message',$data,true);
		   
		 $data['title']='Blog';
		            
		$data['archive']='true';
		            
		$this->load->view('home',$data);
		
	}

	public function gallery()
	{
		$data  = array();
		$data['maincontent'] = $this->load->view('gallery','',true);
		$data['title'] = 'gallery';
		$data['header'] = 'true';

		$this->load->view('home',$data);
	}

	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */