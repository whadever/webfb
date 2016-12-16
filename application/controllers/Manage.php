<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Manage extends CI_Controller {

	public function index()
	{	
		// if($this->session->userdata('is_logged')){
		// 	//redirect to home if user already logged in
		// 	$data['title'] = 'Fajar Baru Jewellery - Admin';
		// 	$this->template->load('default_admin','manage/main',$data);
			
		// }
		// else{
		// 	$this->login();
			
		// }
		$this->load->view('manage/login');

	}
	public function login(){
		$this->load->view('manage/login');
	}


}
?>