=====================================
Base Url : 
<?php echo base_url();?>

=====================================

=====================================
Input Data receive : 
$data['first_name'] = $this->input->post('first_name',true);

=====================================

=====================================
Connect Model & Object

$this->load->Model('login_model');
$this->login_model->save_user_info($data);
