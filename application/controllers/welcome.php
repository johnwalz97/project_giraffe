<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Welcome extends CI_Controller {
	public function index(){
		$this->load->view('welcome');
	}
	
	public function register_page(){
		$this->load->view('register');
	}
	
	public function signin_page(){
		$this->load->view('signin');
	}
	
	public function register(){
		$this->form_validation->set_rules('first_name', 'First Name', 'required|alpha');
		$this->form_validation->set_rules('last_name', 'Last Name', 'required|alpha');
		$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[users.email]');
		$this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[8]|matches[passconf]|md5');
		$this->form_validation->set_rules('passconf', 'Confirm Password', 'required');
		if ($this->form_validation->run() == FALSE){
			$this->register_page();
		}
		else{
			$user = $this->main->register_user($this->input->post('email'), $this->input->post('first_name'), $this->input->post('last_name'), $this->input->post('password'));
			$this->session->set_userdata('user', $user);
			redirect("/mains/");			
		}
	}
	
	public function signin(){
		$password = md5($this->input->post('password'));
		$login = $this->main->login_user($this->input->post('email'), $password);
		if (!empty($login)){
			$this->session->set_userdata('user', $login);
			redirect("/mains/");
		}
		else {
			$this->session->set_flashdata('errors', 'The login information you provided is incorrect');
			$this->signin_page();
		}
	}
	
	public function contact(){
		$this->load->view('contact');
	}
	
	public function contact_submit(){
		redirect("/mains/");
	}
	public function logout(){
		$this->session->sess_destroy();
		redirect("/");
	}
}