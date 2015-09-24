<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Signin extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
        public $user = "";
        public function index()
	{
            $data['content'] = 'menu_pages/student_login_view';
            $this->load->view('user_view', $data);           
	}
        
        public function student_login()
        {     
            $this->load->library('form_validation');
            $this->form_validation->set_rules('username','Email Address or Username','trim|required|max_length[45]');
            $this->form_validation->set_rules('password','Password','trim|required|min_length[5]|max_length[20]|md5|callback_verifyUser');
            
            $this->user = "student";
            if ($this->form_validation->run() == FALSE)
            {
		$data['content'] = 'menu_pages/student_login_view';
                $this->load->view('user_view', $data);
            }
            else
            {
		redirect('user/index');
            }
        }
        
        public function user_login()
        {
            $this->load->library('form_validation');
            $data['content'] = 'menu_pages/user_login_view';
            $this->load->view('user_view', $data);
            
            $this->form_validation->set_rules('username','Email Address or Username','trim|required|max_length[45]');
            $this->form_validation->set_rules('password','Password','trim|required|callback_verifyUser|min_length[5]|max_length[20]|md5');
            
            $this->user = "parent";
            if ($this->form_validation->run() == FALSE)
            {
		$data['content'] = 'menu_pages/student_login_view';
                $this->load->view('user_view', $data);
            }
            else
            {
		redirect('user/index');
            }
        }
        
        public function verifyUser()
        {
            $name = $this->input->post('username');
            $password = md5($this->input->post('password'));

            $this->load->model('user_model');

            if($this->user_model->login($name, $password, $this->user))       
            {            
                return true;
            }       
            else 
            {
                $this->form_validation->set_message('verifyUser', 'You are not registered! Please create an account!');
                return false;
            }
        }
}
