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
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */