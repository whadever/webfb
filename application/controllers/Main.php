<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	public function index()
	{	
		$data['title'] = 'Fajar Baru Jewellery - Home';
		$this->template->load('default','main',$data);
	}

}
?>