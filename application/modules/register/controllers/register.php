<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class register extends MY_Controller {

	public function __construct()
	{
		 parent::__construct();
		 $this->load->model('register_model');
	}

	public function index()
	{
		if(($this->session->userdata('user_name')!=""))
		  {
		   $this->load->view("register_view");
  		}
  		else {
  			$this->load->view("register_view");
  		}
		
	}

 	public function registration()
 		{
 			$this->register_model->user_registration();
		}
}
/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */