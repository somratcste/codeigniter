<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Login extends CI_Controller {

      public function __construct() {
        parent::__construct();
        $this->load->model('login_model');
        $this->load->model('welcome_model','w_model',true);
        $user_id=$this->session->userdata('user_id');
        //echo "-----------".$user_id;
        if($user_id!=NULL)
        {
           redirect("blogger","refresh"); 
        }
    }

	public function sign_up()
	{
		$data  = array();
		$data['maincontent'] = $this->load->view('sign_up','',true);
        $data['all_category']=$this->w_model->select_all_category();
		$data['title'] = 'Sign Up';
		$this->load->view('home',$data);
	}

	public function save_user()
	{
		$data=array();
        $data['first_name']= $this->input->POST('first_name',true);  
        $data['last_name']= $this->input->POST('last_name',true);  
        $data['email_address']= $this->input->POST('email_address',true);  
        $data['password']= $this->input->POST('password',true);  
        $data['password'] = md5($data['password']);
        $data['address']= $this->input->POST('address',true);  
        $data['mobile_no']= $this->input->POST('mobile_no',true);  
        $data['city']= $this->input->POST('city',true);  
        $data['gender']= $this->input->POST('gender',true);  
        $data['country']= $this->input->POST('country',true);  
        $data['zip_code']= $this->input->POST('zip_code',true); 
        $this->load->Model('login_model');
        $this->login_model->save_user_info($data);
        $result=$this->login_model->select_user_by_email_address($data['email_address']);
        if($result)
        {
            $sdata=array();
            $sdata['message']="User Alrady Registered";
            $this->session->set_userdata($sdata);
            redirect("login/sign_up");
        }
        else{
        $this->login_model->save_user_info($data);
        redirect("login/save_succesfully");
        }

        redirect("login/save_successfully");
        
     
        
        
        } 
                
        public function save_successfully(){
            $data=array();
            $data['maincontent']="<h2>  Save successfully</h2>";
            $this->load->view('home',$data);
            
        }

         public function user_login()
        {
         $data=array();
         $data['maincontent']=$this->load->view('login','',true);
         $data['all_category']=$this->w_model->select_all_category();
         $data['title']='Login';
         $this->load->view('home',$data);
        }


        public function check_login()
        {
            $email_address=$this->input->post('email_address',true);
            $password=$this->input->post('password',true);
            $result=$this->login_model->check_login_info($email_address,$password);
            /*echo '<pre>';
            print_r($result);
            exit();*/
            $sdata=array();
            if($result)
            {
                $sdata['full_name']=$result->first_name.' '.$result->last_name;
                $sdata['user_id']=$result->user_id;
                $sdata['login_status']=TRUE;
                $this->session->set_userdata($sdata);
                redirect("blogger","refresh");
                
            }
            else{
                
                $sdata['exception']="User Email Or Password Invalide !";
                $this->session->set_userdata($sdata);
                redirect("login/user_login");
            }
            
        }

    

        



	
}

?>