<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Manage extends CI_Controller {

	public function index()
	{	
		if($this->session->userdata('is_logged')){
			//redirect to home if user already logged in
			$data['title'] = 'Fajar Baru Jewellery - Admin';
			$data['banners'] = $this->crud_model->get_data('banner')->result();
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
	public function new_banner(){
		
		if($this->input->post()){
				$config['allowed_types']        = 'jpg|png|jpeg';
	            $config['max_size']             = 5000;					
				$config['upload_path']          = 'assets/banner/';
				$config['overwrite']			= false;
				$config['file_name']			= $_FILES["banner"]["name"].'.jpg';
				$this->upload->initialize($config);

				//Check if the folder for the upload existed
				if(!file_exists($config['upload_path']))
				{
					//if not make the folder so the upload is possible
					mkdir($config['upload_path'], 0777, true);
				}

	            if($this->upload->do_upload('banner'))
	            {
	                //Get the link for the database
	                $photo = $config ['upload_path'] . '/' . $config ['file_name'];
	            }else{

	            	$photo = $config ['upload_path'] . '/' . $config ['file_name'];	
					
	            }

	            //check if user upload a photo or not.
				if(!file_exists($photo))
				{
					
					$photo = '';
				}				
		            
	            $data_banner = array(
	            		'caption'		=> $this->input->post('caption'),
	            		'picture'		=> $photo,
	            		'link'			=> $this->input->post('link'),
	            	);

	            $this->db->insert('banner', $data_banner);
	            redirect('manage');

		}else{
			$data['title'] = 'Fajar Baru Jewellery - Admin';
			$this->template->load('default_admin','manage/new_banner',$data);	
		}
		

	}



}
?>