<?php 

		class Login_Model extends CI_Model
	{
		public function save_user_info($data)
		{
			$this->db->insert('tbl_user',$data);
		}

		public function select_user_by_email_address($email_address)
	    {
	        $this->db->select('*');
	        $this->db->from('tbl_user');
	        $this->db->where('email_address',$email_address);
	        $query_result=$this->db->get();
	        $result=$query_result->row();
	        return $result;
	    }

	    public function check_login_info($email_address,$password)
	    {
	        $this->db->select('*');
	        $this->db->from('tbl_user');
	        $this->db->where('email_address',$email_address);
	        $this->db->where('password',md5($password));
	        $query_result=$this->db->get();
	        $result=$query_result->row();
	        return $result;
	    }


	}

?>