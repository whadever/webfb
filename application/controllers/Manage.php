<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Manage extends CI_Controller {

	public function index()
	{	
		if($this->session->userdata('is_logged')){
			//redirect to home if user already logged in
			$data['title'] = 'Fajar Baru Jewellery - Admin';
			$this->template->load('default_admin','manage/main',$data);
			
		}
		else{
			redirect('manage/login');
			
		}

	}
	public function login(){
		$this->load->model('login_model');
		if($this->input->post()){
			
			$username = $this->input->post('username');
			$password = sha1($this->input->post('password'));
			if($user=$this->login_model->check_user($username,$password)){
				$session_data = array(
					'username' => $user->username,
					'is_logged' => 1
					);
				$this->session->set_userdata($session_data);	
				redirect('manage');
			}
			else{
				redirect('manage/login');
			}
			
			
		}else{
			$this->load->view('manage/login');	
		}
		
	}



}
?>