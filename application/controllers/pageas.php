<?php

class Pageas extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->helper('form');
	}
	
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
		$this->load->view('templates/template', $data);
	}
	
	public function rekapLaporan($page = 'rekapLaporan')
	{
		if ( ! file_exists(APPPATH.'/views/pages/'.$page.'.php'))
		{
			show_404();
		}
		$data['isi'] = "pages/rekapLaporan";
		$this->load->view('templates/template', $data);
	}
	
	public function rekap_inputLap($page = 'rekap_inputLap')
	{
	if ( ! file_exists(APPPATH.'/views/pages/'.$page.'.php'))
		{
			show_404();
		}
		$data['isi'] = "pages/rekap_inputLap";
		$this->load->view('templates/template',$data);
	}
	
	public function inputLap($page = 'inputLap')
	{
	if ( ! file_exists(APPPATH.'/views/pages/'.$page.'.php'))
		{
			show_404();
		}
		$data['isi'] = "pages/inputlap";
		$this->load->view('templates/Cotemplate',$data);
	}
	
	public function olahLap($page = 'olahLap')
	{
	if ( ! file_exists(APPPATH.'/views/pages/'.$page.'.php'))
		{
			show_404();
		}
		$data['isi'] = "pages/olahLap";
		$this->load->view('templates/Cotemplate',$data);
	}
		
	public function rekap_olahLap($page = 'rekap_olahLap')
	{
	if ( ! file_exists(APPPATH.'/views/pages/'.$page.'.php'))
		{
			show_404();
		}
		$data['isi'] = "pages/rekap_olahLap";
		$this->load->view('templates/template',$data);
	}
	
	public function rekap_cetakP2TL($page = 'rekap_cetakP2TL')
	{
	if ( ! file_exists(APPPATH.'/views/pages/'.$page.'.php'))
		{
			show_404();
		}
		$data['isi'] = "pages/rekap_cetakP2TL";
		$this->load->view('templates/template',$data);
	}
	
	public function cetakP2TL($page = 'cetakP2TL')
	{
	if ( ! file_exists(APPPATH.'/views/pages/'.$page.'.php'))
		{
			show_404();
		}
		$data['isi'] = "pages/cetakP2TL";
		$this->load->view('templates/Cotemplate',$data);
	}
	
	public function cetak_nonP2TL($page = 'cetak_nonP2TL')
	{
	if ( ! file_exists(APPPATH.'/views/pages/'.$page.'.php'))
		{
			show_404();
		}
		$data['isi'] = "pages/cetak_nonP2TL";
		$this->load->view('templates/Cotemplate',$data);
	}
	
	public function rekap_cetak_nonP2TL($page = 'rekap_cetak_nonP2TL')
	{
	if ( ! file_exists(APPPATH.'/views/pages/'.$page.'.php'))
		{
			show_404();
		}
		$data['isi'] = "pages/rekap_cetak_nonP2TL";
		$this->load->view('templates/template',$data);
	}
	
	public function validasi_nonP2TL($page = 'validasi_nonP2TL')
	{
	if ( ! file_exists(APPPATH.'/views/pages/'.$page.'.php'))
		{
			show_404();
		}
		$data['isi'] = "pages/validasi_nonP2TL";
		$this->load->view('templates/Cotemplate',$data);
	}
	
	public function rekap_validasi_nonP2TL($page = 'rekap_validasi_nonP2TL')
	{
	if ( ! file_exists(APPPATH.'/views/pages/'.$page.'.php'))
		{
			show_404();
		}
		$data['isi'] = "pages/rekap_validasi_nonP2TL";
		$this->load->view('templates/template',$data);
	}
	
	public function input_P2TL($page = 'input_P2TL')
	{
	if ( ! file_exists(APPPATH.'/views/pages/'.$page.'.php'))
		{
			show_404();
		}
		$data['isi'] = "pages/input_P2TL";
		$this->load->view('templates/Cotemplate',$data);
	}
	
	public function rekap_input_P2TL($page = 'rekap_input_P2TL')
	{
	if ( ! file_exists(APPPATH.'/views/pages/'.$page.'.php'))
		{
			show_404();
		}
		$data['isi'] = "pages/rekap_input_P2TL";
		$this->load->view('templates/template',$data);
	}
	
	public function rekap_anev($page = 'rekap_anev')
	{
	if ( ! file_exists(APPPATH.'/views/pages/'.$page.'.php'))
		{
			show_404();
		}
		$data['isi'] = "pages/rekap_anev";
		$this->load->view('templates/template',$data);
	}
	
	public function anev($page = 'anev')
	{
	if ( ! file_exists(APPPATH.'/views/pages/'.$page.'.php'))
		{
			show_404();
		}
		$data['isi'] = "pages/anev";
		$this->load->view('templates/Cotemplate',$data);
	}
	
	
	public function rekap_sph($page = 'rekap_sph')
	{
	if ( ! file_exists(APPPATH.'/views/pages/'.$page.'.php'))
		{
			show_404();
		}
		$data['isi'] = "pages/rekap_sph";
		$this->load->view('templates/template',$data);
	}
	
	public function sph($page = 'sph')
	{
	if ( ! file_exists(APPPATH.'/views/pages/'.$page.'.php'))
		{
			show_404();
		}
		$data['isi'] = "pages/sph";
		$this->load->view('templates/Cotemplate',$data);
	}
	
	public function validasi_sph($page = 'validasi_sph')
	{
	if ( ! file_exists(APPPATH.'/views/pages/'.$page.'.php'))
		{
			show_404();
		}
		$data['isi'] = "pages/validasi_sph";
		$this->load->view('templates/Cotemplate',$data);
	}
	
	public function rekap_validasi_sph($page = 'rekap_validasi_sph')
	{
	if ( ! file_exists(APPPATH.'/views/pages/'.$page.'.php'))
		{
			show_404();
		}
		$data['isi'] = "pages/rekap_validasi_sph";
		$this->load->view('templates/template',$data);
	}
	
	public function rekap_input_nonp2tl($page= 'rekap_input_nonp2tl')
	{
	if ( ! file_exists(APPPATH.'/views/pages/'.$page.'.php'))
		{
			show_404();
		}
		$data['isi'] = "pages/rekap_input_nonp2tl";
		$this->load->view('templates/template',$data);
	}
	
	public function input_nonp2tl($page= 'input_nonp2TL')
	{
	if ( ! file_exists(APPPATH.'/views/pages/'.$page.'.php'))
		{
			show_404();
		}
		$data['isi'] = "pages/input_nonp2tl";
		$this->load->view('templates/Cotemplate',$data);
	}
	
	public function login($page= 'login')
	{
	if ( ! file_exists(APPPATH.'/views/pages/'.$page.'.php'))
		{
			show_404();
		}
		$this->load->view('pages/login');
		
	}
	
	public function home($page= 'homepage')
	{
	if ( ! file_exists(APPPATH.'/views/pages/'.$page.'.php'))
		{
			show_404();
		}
		$this->load->view('pages/homepage');
	}
	
	
	public function signin($page= 'login')
	{
	if ( ! file_exists(APPPATH.'/views/pages/'.$page.'.php'))
		{
			show_404();
		}
		$this->load->view('pages/login');
	}
	
	public function about($page= 'about')
	{
	if ( ! file_exists(APPPATH.'/views/pages/'.$page.'.php'))
		{
			show_404();
		}
		$this->load->view('pages/about');
	}	
	
	public function signup($page= 'signup')
	{
	if ( ! file_exists(APPPATH.'/views/pages/'.$page.'.php'))
		{
			show_404();
		}
		$this->load->view('pages/signup');
	}	
	
	
	public function tanggal($page= 'tanggal')
	{
	if ( ! file_exists(APPPATH.'/views/pages/'.$page.'.php'))
		{
			show_404();
		}
		$this->load->view('pages/tanggal');
	}	
	
	public function coba($page= 'coba')
	{
	if ( ! file_exists(APPPATH.'/views/pages/'.$page.'.php'))
		{
			show_404();
		}
		$this->load->view('pages/coba');
	}	
	
	public function dashboard($page = 'dashboard')
	{
	if ( ! file_exists(APPPATH.'/views/pages/'.$page.'.php'))
		{
			show_404();
		}
		$data['isi'] = "pages/dashboard";
		$this->load->view('templates/template',$data);
	}
	
	public function keterangan($page = 'keterangan_status')
	{
	if ( ! file_exists(APPPATH.'/views/pages/'.$page.'.php'))
		{
			show_404();
		}
		$data['isi'] = "pages/keterangan_status";
		$this->load->view('templates/template',$data);
	}
	
	public function rekap_status($page = 'rekap_status')
	{
	if ( ! file_exists(APPPATH.'/views/pages/'.$page.'.php'))
		{
			show_404();
		}
		$data['isi'] = "pages/rekap_status";
		$this->load->view('templates/template',$data);
	}
	
	public function ganti_password($page = 'ganti_password')
	{
	if ( ! file_exists(APPPATH.'/views/pages/'.$page.'.php'))
		{
			show_404();
		}
		$data['isi'] = "pages/ganti_password";
		$this->load->view('templates/template',$data);
	}
	
	public function list_user($page = 'list_user')
	{
	if ( ! file_exists(APPPATH.'/views/pages/'.$page.'.php'))
		{
			show_404();
		}
		$data['isi'] = "pages/list_user";
		$this->load->view('templates/template',$data);
	}
	
	public function disapprove($page = 'list_user_ditolak')
	{
	if ( ! file_exists(APPPATH.'/views/pages/'.$page.'.php'))
		{
			show_404();
		}
		$data['isi'] = "pages/list_user_ditolak";
		$this->load->view('templates/template',$data);
	}
	
	public function approve($page = 'list_user_diterima')
	{
	if ( ! file_exists(APPPATH.'/views/pages/'.$page.'.php'))
		{
			show_404();
		}
		$data['isi'] = "pages/list_user_diterima";
		$this->load->view('templates/template',$data);
	}
	
	public function nyoba($page = 'cobaa')
	{
	if ( ! file_exists(APPPATH.'/views/pages/'.$page.'.php'))
		{
			show_404();
		}
		$this->load->view('pages/cobaa');
	}

	
	public function waka()
	{
		$is_ajax = $_REQUEST['is_ajax'];
		if(isset($is_ajax) && $is_ajax)
		{
			$username = $_REQUEST['username'];
			$password = $_REQUEST['password'];
			
			if($username == 'demo' && $password == 'demo')
			{
				echo "success";
			}
		}
	}
	
	
	public function validat()
	{
		$this->form_validation->set_rules('username','Username', 'trim|required');
		$this->form_validation->set_rules('nama','Nama', 'trim|required|required');
		$this->form_validation->set_rules('email','Email', 'trim|required|valid_email');
		$this->form_validation->set_rules('password','Password', 'trim|required|required');
		$this->form_validation->set_rules('konfirmasi','Konfirmasi', 'trim|required|required');
		
		
		if($this->form_validation->run()===FALSE)
		{
			echo json_encode(array('st'=>0,'msg'=>'<font size = "2 px" color="red"><br />'.validation_errors()));
			
		}
		else
		{

			echo json_encode(array('st'=>1));
			
		}
	}
	
	
		function send_mail()
	{      
        $config['protocol'] = 'smtp'; // mail, sendmail, or smtp    The mail sending protocol.
        $config['mailpath'] = ''; // The server path to Sendmail.
        $config['smtp_host'] = '10.3.0.40'; // SMTP Server Address.
        $config['smtp_user'] = 'jaya\\taurisa.wijaya'; // SMTP Username.
        $config['smtp_pass'] = 'adadech'; // SMTP Password.
        $config['smtp_port'] = '25'; // SMTP Port.
        $config['smtp_timeout'] = '5'; // SMTP Timeout (in seconds).
        $config['wordwrap'] = FALSE; // TRUE or FALSE (boolean)    Enable word-wrap.
		$config['wrapchars'] = 500; // Character count to wrap at.
        $config['mailtype'] = 'html'; // text or html Type of mail. If you send HTML email you must send it as a complete web page. 
        $config['charset'] = 'utf-8'; // Character set (utf-8, iso-8859-1, etc.).
        $config['validate'] = FALSE; // TRUE or FALSE (boolean)    Whether to validate the email address.
        $config['priority'] = 3; // 1, 2, 3, 4, 5    Email Priority. 1 = highest. 5 = lowest. 3 = normal.
		
		//load and initialize
        $this->load->library('email');
        $this->email->initialize($config);
		$this->email->set_newline("\r\n");  
        $this->email->clear();
		 
		$this->email->from('noreply@pln.co.id', 'MJD');
        $this->email->to("fahmi.katok@gmail.com");
		
		$this->email->cc("");
        $this->email->subject("testing KP");
		
		$message = "Ini pesan testing untuk KP";
        $this->email->message($message);
       
		//send the email
		if($this->email->send()){
			echo "sukses";
		}
		else
		{
			show_error($this->email->print_debugger());
		}
    }
}