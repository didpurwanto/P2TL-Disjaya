<?php

class Umum extends CI_Controller {
	
	public function index()
	{
		$this->load->view('welcome_message');
	}
	
	public function melaporkan($page = 'melaporkan_umum')
	{
		if ( ! file_exists(APPPATH.'/views/pages/'.$page.'.php'))
		{
			show_404();
		}
		$data['isi'] = "pages/melaporkan_umum";
		$this->load->view('templates/template_umum', $data);
	}
	
	
}