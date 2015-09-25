<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {
	/* Loading page login_admin_view from view/admin
	*/
	public function index()
	{
		 $this->load->view('admin/login_admin_view');
	}
	/* Validates the login credentials
 		*@return string
 		** true if the user exists 
 		** false otherwise
	*/
	public function check()
	{
		if (!empty($this->input->post('password')))
			{
				$email = $this->input->post('email');
				$password = $this->input->post('password');
				if (($email === "admin@hpm.ro") && ($password === "parola"))
				{
					echo "true";
				}
				else 
				{
					echo "false";
				}
		}
		else
		{
			echo "false";
		}
	}
}