<?php

class register_model extends MY_Model{

function login($email,$password){
  $this->db->where("email",$email);
    $this->db->where("password",$password);

    $query=$this->db->get("user");

  if($query->num_rows()>0)
  {
    foreach($query->result() as $rows)
      {
        //add all data to session
        $newdata = array(
          'user_id'  => $rows->id,
          'user_name'  => $rows->username,
          'user_email'    => $rows->email,
          'logged_in'  => TRUE,
        );
      }
  $this->session->set_userdata($newdata);
  return true;
  
  }
  return false;

}

function user_registration(){
  $user_data = array(
    'f_name'=>$this->input->post('f_name'),
    'l_name'=>$this->input->post('l_name'),
    'phone_no'=>$this->input->post('phone'),
    'registration_date'=>$this->input->post('date_of_reg'),
    'email_address'=>$this->input->post('username'),
    'password'=>md5($this->input->post('password'))
    );

  $this->db->insert('tbl_user_details',$user_data);

  redirect('login');


}

}
?>