<?php
class Blogger_Model extends CI_Model {
    //put your code here
    
    public function select_user_by_user_id($user_id)
    {
        $this->db->select('*');
        $this->db->from('tbl_user');
        $this->db->where('user_id',$user_id);
        $query_result=$this->db->get();
        $result=$query_result->row();
        return $result;
    }
    public function update_user($data,$user_id)
    {
        $this->db->where('user_id', $user_id);
        $this->db->update('tbl_user', $data); 
        
    }

    public function save_blog_info($data)
    {
        $this->db->insert('tbl_blog',$data);
    }

   
    public function select_all_blogs()
    {
        $this->db->select('*');
        $this->db->from('tbl_blog');
        $this->db->where('status',1);
        $query_result=$this->db->get();
        $result=$query_result->result();
        return $result;
    }
    public function select_blogs_by_user_id($user_id)
    {
        $this->db->select('*');
        $this->db->from('tbl_blog');
        $this->db->where('user_id',$user_id);
        $query_result=$this->db->get();
        $result=$query_result->result();
        return $result;
    }

    public function delete_blog_by_blog_id($blog_id,$user_id)
    {
        $this->db->where('blog_id',$blog_id);
        $this->db->where('user_id',$user_id);
        $this->db->delete('tbl_blog');
    }
    public function select_blog_by_blog_id($blog_id)
    {
        $this->db->select('*');
        $this->db->from('tbl_blog');
        $this->db->where('blog_id',$blog_id);
        $query_result=$this->db->get();
        $result=$query_result->row();
        return $result;
    }
    public function update_blog_info($data,$blog_id)
    {
        $this->db->where('blog_id',$blog_id);
        $this->db->update('tbl_blog',$data);
    }
    
}

?>
