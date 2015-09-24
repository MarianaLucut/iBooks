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
	public function index()
	{
            $data['content'] = 'menu_pages/student_login_view';
            $this->load->view('user_view', $data);
	}
        
        public function student_login()
        {
//            $data['content'] = 'menu_pages/student_login_view';
//            $this->load->view('user_view', $data);
            $this->load->library('form_validation');
            $this->form_validation->set_rules('username','Email Address','trim|required|max_length[45]');
            $this->form_validation->set_rules('password','Password','trim|required|min_length[4]|max_length[20]|md5');
            if ($this->form_validation->run() == FALSE)
            {
		$data['content'] = 'menu_pages/student_login_view';
                $this->load->view('user_view', $data);
            }
            else
            {
		$data['content'] = 'menu_pages/home_view';
                $this->load->view('user_view', $data);
            }
        }
        
        public function user_login()
        {
            $data['content'] = 'menu_pages/user_login_view';
            $this->load->view('user_view', $data);
        }
}
