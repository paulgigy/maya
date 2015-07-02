<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class login extends MY_Controller {

	public function __construct()
		{
			 parent::__construct();
			 $this->load->model('login_model');
		}

	public function index()
	{
		if(($this->session->userdata('user_name')!=""))
		  {
		   $this->load->view("login_view");
  		}
  		else {
  			$this->load->view("login_view");
  		}
		
	}

	function login($username, $password)
 {
   $this -> db -> select('id, username, password');
   $this -> db -> from('users');
   $this -> db -> where('username', $username);
   $this -> db -> where('password', MD5($password));
   $this -> db -> limit(1);
 
   $query = $this -> db -> get();
 
   if($query -> num_rows() == 1)
   {
     return $query->result();
   }
   else
   {
     return false;
   }
 }


 
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */