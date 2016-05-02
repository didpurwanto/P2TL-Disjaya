<?php

class Spv extends CI_Controller {
	
	public function index()
	{
		$this->load->view('welcome_message');
	}
	
	public function melaporkan($page = 'melaporkan')
	{
		if ( ! file_exists(APPPATH.'/views/pages/'.$page.'.php'))
		{
			show_404();
		}
		$data['isi'] = "pages/melaporkan";
		$this->load->view('templates/template_spv', $data);
	}
	
	public function rekapLaporan($page = 'rekapLaporan')
	{
		if ( ! file_exists(APPPATH.'/views/pages/'.$page.'.php'))
		{
			show_404();
		}
		$data['isi'] = "pages/rekapLaporan";
		$this->load->view('templates/template_spv', $data);
	}
	
	public function rekap_inputLap($page = 'rekap_inputLap')
	{
	if ( ! file_exists(APPPATH.'/views/pages/'.$page.'.php'))
		{
			show_404();
		}
		$data['isi'] = "pages/rekap_inputLap";
		$this->load->view('templates/template_spv',$data);
	}
	
	public function inputLap($page = 'inputLap')
	{
	if ( ! file_exists(APPPATH.'/views/pages/'.$page.'.php'))
		{
			show_404();
		}
		$data['isi'] = "pages/inputlap";
		$this->load->view('templates/Cotemplate_spv',$data);
	}
	
	public function olahLap($page = 'olahLap')
	{
	if ( ! file_exists(APPPATH.'/views/pages/'.$page.'.php'))
		{
			show_404();
		}
		$data['isi'] = "pages/olahLap";
		$this->load->view('templates/Cotemplate_spv',$data);
	}
		
	public function rekap_olahLap($page = 'rekap_olahLap')
	{
	if ( ! file_exists(APPPATH.'/views/pages/'.$page.'.php'))
		{
			show_404();
		}
		$data['isi'] = "pages/rekap_olahLap";
		$this->load->view('templates/template_spv',$data);
	}
	
	public function rekap_cetakP2TL($page = 'rekap_cetakP2TL')
	{
	if ( ! file_exists(APPPATH.'/views/pages/'.$page.'.php'))
		{
			show_404();
		}
		$data['isi'] = "pages/rekap_cetakP2TL";
		$this->load->view('templates/template_spv',$data);
	}
	
	public function cetakP2TL($page = 'cetakP2TL')
	{
	if ( ! file_exists(APPPATH.'/views/pages/'.$page.'.php'))
		{
			show_404();
		}
		$data['isi'] = "pages/cetakP2TL";
		$this->load->view('templates/Cotemplate_spv',$data);
	}
	
	public function cetak_nonP2TL($page = 'cetak_nonP2TL')
	{
	if ( ! file_exists(APPPATH.'/views/pages/'.$page.'.php'))
		{
			show_404();
		}
		$data['isi'] = "pages/cetak_nonP2TL";
		$this->load->view('templates/Cotemplate_spv',$data);
	}
	
	public function rekap_cetak_nonP2TL($page = 'rekap_cetak_nonP2TL')
	{
	if ( ! file_exists(APPPATH.'/views/pages/'.$page.'.php'))
		{
			show_404();
		}
		$data['isi'] = "pages/rekap_cetak_nonP2TL";
		$this->load->view('templates/template_spv',$data);
	}
	
	public function validasi_nonP2TL($page = 'validasi_nonP2TL')
	{
	if ( ! file_exists(APPPATH.'/views/pages/'.$page.'.php'))
		{
			show_404();
		}
		$data['isi'] = "pages/validasi_nonP2TL";
		$this->load->view('templates/Cotemplate_spv',$data);
	}
	
	public function rekap_validasi_nonP2TL($page = 'rekap_validasi_nonP2TL')
	{
	if ( ! file_exists(APPPATH.'/views/pages/'.$page.'.php'))
		{
			show_404();
		}
		$data['isi'] = "pages/rekap_validasi_nonP2TL";
		$this->load->view('templates/template_spv',$data);
	}
	
	public function input_P2TL($page = 'input_P2TL')
	{
	if ( ! file_exists(APPPATH.'/views/pages/'.$page.'.php'))
		{
			show_404();
		}
		$data['isi'] = "pages/input_P2TL";
		$this->load->view('templates/Cotemplate_spv',$data);
	}
	
	public function rekap_input_P2TL($page = 'rekap_input_P2TL')
	{
	if ( ! file_exists(APPPATH.'/views/pages/'.$page.'.php'))
		{
			show_404();
		}
		$data['isi'] = "pages/rekap_input_P2TL";
		$this->load->view('templates/template_spv',$data);
	}
	
	public function rekap_anev($page = 'rekap_anev')
	{
	if ( ! file_exists(APPPATH.'/views/pages/'.$page.'.php'))
		{
			show_404();
		}
		$data['isi'] = "pages/rekap_anev";
		$this->load->view('templates/template_spv',$data);
	}
	
	public function anev($page = 'anev')
	{
	if ( ! file_exists(APPPATH.'/views/pages/'.$page.'.php'))
		{
			show_404();
		}
		$data['isi'] = "pages/anev";
		$this->load->view('templates/Cotemplate_spv',$data);
	}
	
	
	public function rekap_sph($page = 'rekap_sph')
	{
	if ( ! file_exists(APPPATH.'/views/pages/'.$page.'.php'))
		{
			show_404();
		}
		$data['isi'] = "pages/rekap_sph";
		$this->load->view('templates/template_spv',$data);
	}
	
	public function sph($page = 'sph')
	{
	if ( ! file_exists(APPPATH.'/views/pages/'.$page.'.php'))
		{
			show_404();
		}
		$data['isi'] = "pages/sph";
		$this->load->view('templates/Cotemplate_spv',$data);
	}
	
	public function validasi_sph($page = 'validasi_sph')
	{
	if ( ! file_exists(APPPATH.'/views/pages/'.$page.'.php'))
		{
			show_404();
		}
		$data['isi'] = "pages/validasi_sph";
		$this->load->view('templates/Cotemplate_spv',$data);
	}
		
	public function keterangan($page = 'keterangan_status')
	{
	if ( ! file_exists(APPPATH.'/views/pages/'.$page.'.php'))
		{
			show_404();
		}
		$data['isi'] = "pages/keterangan_status";
		$this->load->view('templates/template_spv',$data);
	}

}