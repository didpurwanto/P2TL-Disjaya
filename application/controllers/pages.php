<?php

class Pages extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('UserModel','modelt');
        $this->load->model('P2tlModel','modelp');
		
		$this->load->library('form_validation');
		$this->load->helper('Form');
		$this->load->helper('date');
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
			$username = $this->input->post('username');

			$nama = $this->input->post("nama");
			$email = $this->input->post("email");
			$unit = $this->input->post("unit_pelanggan");
			$password = $this->input->post("password");
			$date = date("Y-m-d H:i:s");
			$nip = $this->input->post('konfirmasi');
			$str = $nama." ".$email." ".$unit." ".$password." ".$date;

			$this->modelp->insert_user($username,$nama,$email,$unit,md5($password),$date,$nip);

			echo json_encode(array('st'=>1,'msg'=>$str));

			

		}
	}	
	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function signup_menunggu()
	{

		$this->load->view('pages/signup_menunggu');
	}
	
	public function melaporkan($page = 'melaporkan')
	{
		if ( ! file_exists(APPPATH.'/views/pages/'.$page.'.php'))
		{
			show_404();
		}
		if($this->session->userdata('username'))
		{
			if($this->session->userdata('hak_akses') >=0)
			{
				$bol=$this->cekDaerah();
				if($bol==1)
				{
					$data['result'] = $this->modelp->getRekapInputLap1();
				}
				else if($bol==0)
				{
					$data['result'] = $this->modelp->getRekapInputLap1_2($this->session->userdata('kdarea'));
				}
				$data['isi'] = "pages/melaporkan";
				$data['tarif'] = $this->modelp->selectTarif();
				$data['daya'] = $this->modelp->selectDaya();
				$data['unit'] = $this->modelp->select_unit();
				$data['prioritas'] = $this->modelp->select_prioritas();
				$this->load->view('templates/template', $data);
			}
			else
				redirect('pages/dashboard');
		}
		else
			redirect('pages/home');
	}

	public function proses_approve($page = 'proses_approve')
	{
		if($this->session->userdata('username'))
		{
			if($this->session->userdata('hak_akses') >=2)
			{
				$data['username']=urldecode($this->uri->segment(3));
				$data['result'] = $this->modelt->selectUserPapprove($data['username']);
				foreach($data['result'] as $rows)
				{
					if($rows['USERNAME'] == $data['username'])
					{
						$data['tanggal'] = $rows['TANGGAL_DAFTAR'];
						$data['nama_user'] = $rows['NAMA_USER'];
						$data['email_user'] = $rows['EMAIL_USER'];
						$this->load->view("pages/proses_approve",$data);
					}
				}
			}
			else
				redirect('pages/dashboard');
		}
		else
			redirect('pages/home');
	}
	
	public function approving()
	{
		if($this->session->userdata('username'))
		{
			if($this->session->userdata('hak_akses') >=2)
			{
				$username=$this->input->post('username');
				$user=$this->modelt->selectUserApprove($username);
				//print_r($user);
				$pilih= $this->input->post('pilih');
				foreach($user as $rows)
				{
					$email = $rows['EMAIL_USER'];
				}
				if($pilih == 1)
				{
					$hak_akses=$this->input->post('hak_akses');
					$this->modelt->updateStatusUser($username,$hak_akses);
					$pesan = "Akun anda di website kami sudah di setujui oleh asisten manajer atau deputi manajer silahkan login di web kami";
				}
				else
				{
					$this->modelt->deleteUser($username);
					$pesan = "Akun anda di website kami di tolak oleh asisten manajer atau deputi manajer silahkan register kembali di web kami";
				}
				//echo $email;
				$this->send_mail($email,$pesan);
			}
			else
				redirect('pages/dashboard');
		}
		else
			redirect('pages/home');
	}
	public function send_mail($tujuan,$pesan)
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
		 
		$this->email->from('sistemP2TL@pln.co.id', 'P2TL');
        $this->email->to($tujuan);
		
		$this->email->cc("");
        $this->email->subject("Persetujuan Akun");
		
		$message = $pesan;
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
	public function rekapLaporan($page = 'rekapLaporan')
	{
		if ( ! file_exists(APPPATH.'/views/pages/'.$page.'.php'))
		{
			show_404();
		}
		if($this->session->userdata('username'))
		{
			if($this->session->userdata('hak_akses') >=1)
			{
				$data['isi'] = "pages/rekapLaporan";
				$this->load->view('templates/template', $data);
			}
			else
				redirect('pages/dashboard');
		}
		else
			redirect('pages/home');
	}
	
	public function rekap_inputLap($page = 'rekap_inputLap')
	{
		if ( ! file_exists(APPPATH.'/views/pages/'.$page.'.php'))
		{
			show_404();
		}
		if($this->session->userdata('username'))
		{
			if($this->session->userdata('hak_akses') >=1)
			{
				$data['isi'] = "pages/rekap_inputLap";
				$bol=$this->cekDaerah();
				if($bol==1)
				{
					$data['result'] = $this->modelp->getRekapInputLap1();
				}
				else if($bol==0)
				{
					$data['result'] = $this->modelp->getRekapInputLap1_2($this->session->userdata('kdarea'));
				}
				$this->load->view('templates/template', $data);
			}
			else
				redirect('pages/dashboard');
		}
		else
			redirect('pages/home');
	}
	
	public function inputLap()
	{

		if($this->session->userdata('username'))
		{
			if($this->session->userdata('hak_akses') >=1)
			{
				$data['isi'] = "pages/inputLap";
				$idLap=$this->uri->segment(3);
				$data['laporan'] = $this->modelp->selectLaporan($idLap);
				$bol=0;
				if($this->cekDaerah()==1)
				{
					$bol=1;
				}
				else
				{
					foreach($data['laporan'] as $rows){
						//echo $rows['KDAREA']." ". $this->session->userdata('kdarea');
						if($rows['KDAREA'] == $this->session->userdata('kdarea'))
							$bol=1;
					}

				}
				if($bol==1)
				{
					foreach($data['laporan'] as $rows)
					{
						$data['id_pel']=$rows['ID_PELANGGAN'];
						$data['nama_pel']=$rows['NAMA_PELANGGAN'];
						$data['alamat_pel']=$rows['ALAMAT_PELANGGAN'];
						$data['daya_pel'] = $rows['DAYA_PELANGGAN'];
						$data['tarif_pel'] = $rows['TARIF_PELANGGAN'];
						$data['unit_pel'] = $rows['NAMA_AREA'];
						$data['tanggal_pel']= $rows['TANGGAL_MELAPOR'];
						$data['id_lap'] = $rows['ID_LAPORAN'];
					}
					$data['komentar'] = $this->modelp->select_komentar($idLap);
					$this->load->view('templates/Cotemplate', $data);
				}
				else
				{
					redirect('pages/rekap_inputLap');
				}	
				
			}
			else
				redirect('pages/dashboard');
		}
		else
			redirect('pages/home');
	}
	
	public function olahLap()
	{
		if($this->session->userdata('username'))
		{
			if($this->session->userdata('hak_akses') >=2)
			{
				$data['isi'] = "pages/olahLap";
				$idLap=$this->uri->segment(3);
				$data['komentar'] = $this->modelp->select_komentar($idLap);
				$data['laporan'] = $this->modelp->selectLaporan($idLap);
				$bol=0;
				if($this->cekDaerah()==1)
				{
					$bol=1;
				}
				else
				{
					foreach($data['laporan'] as $rows){
						if($rows['KDAREA'] == $this->session->userdata('kdarea'))
							$bol=1;
					}
				}
				if($bol==1)
				{
					foreach($data['laporan'] as $rows)
					{
						$data['id_pel']=$rows['ID_PELANGGAN'];
						$data['nama_pel']=$rows['NAMA_PELANGGAN'];
						$data['alamat_pel']=$rows['ALAMAT_PELANGGAN'];
						$data['daya_pel'] = $rows['DAYA_PELANGGAN'];
						$data['tarif_pel'] = $rows['TARIF_PELANGGAN'];
						$data['unit_pel'] = $rows['NAMA_AREA'];
						$data['tanggal_pel']= $rows['TANGGAL_MELAPOR'];
						$data['id_lap'] = $rows['ID_LAPORAN'];
					}
					$this->load->view('templates/Cotemplate', $data);
				}
				else
				{
					redirect('pages/rekap_inputLap');
				}	
			}
			else
				redirect('pages/dashboard');
		}
		else
			redirect('pages/home');
	}
		
	public function rekap_olahLap($page = 'rekap_olahLap')
	{
		if ( ! file_exists(APPPATH.'/views/pages/'.$page.'.php'))
		{
			show_404();
		}
		if($this->session->userdata('username'))
		{
			if($this->session->userdata('hak_akses') >=2)
			{
				$data['isi'] = "pages/rekap_olahLap";
				$bol=$this->cekDaerah();
				if($bol==1)
				{
					$data['result'] = $this->modelp->getRekapInputLap2();
				}
				else if($bol==0)
				{
					$data['result'] = $this->modelp->getRekapInputLap2_2($this->session->userdata('kdarea'));
				}
				$this->load->view('templates/template', $data);
			}
			else
				redirect('pages/dashboard');
		}
		else
			redirect('pages/home');
	}
	
	public function rekap_cetak_P2TL($page = 'rekap_cetakP2TL')
	{
		if ( ! file_exists(APPPATH.'/views/pages/'.$page.'.php'))
		{
			show_404();
		}
		if($this->session->userdata('username'))
		{
			if($this->session->userdata('hak_akses') >=1)
			{
				$data['isi'] = "pages/rekap_cetakP2TL";
				$bol=$this->cekDaerah();
				if($bol==1)
				{
					$data['result'] = $this->modelp->getRekap_Cetak_p2tl();
				}
				else if($bol==0)
				{
					$data['result'] = $this->modelp->getRekap_Cetak_p2tl_2($this->session->userdata('kdarea'));
				}
				$this->load->view('templates/template', $data);
			}
			else
				redirect('pages/dashboard');
		}
		else
			redirect('pages/home');
	}
	
	public function cetakP2TL()
	{
		$data['id_lap'] = $this->uri->segment(3);
		if($this->session->userdata('username'))
		{
			if($this->session->userdata('hak_akses') >=1)
			{
				$data['isi'] = "pages/cetakP2TL";
				$lap = $this->modelp->selectLaporanDetail($data['id_lap']);
				$data['komentar'] = $this->modelp->select_komentar($data['id_lap']);
				foreach ($lap as $rows )
				{
					$data['id_lap'] = $rows['ID_LAPORAN'];
					$data['id_pelanggan'] = $rows['ID_PELANGGAN'];
					$data['tarif_pelanggan'] = $rows['TARIF_PELANGGAN'];
					$data['nama_pelanggan'] = $rows['NAMA_PELANGGAN'];
					$data['alamat_pelanggan'] = $rows['ALAMAT_PELANGGAN'];
					$data['daya_pelanggan'] = $rows['DAYA_PELANGGAN'];
					$data['nama_area'] = $rows['NAMA_AREA'];
					$data['tanggal_melapor'] = $rows['TANGGAL_MELAPOR'];
					$data['kode_prioritas'] = $rows['PRIORITAS'];
					$data['indikasi_keterangan'] = $rows['INDIKASI_KETERANGAN'];
					$data['tindakan_olap_satu'] = $this->modelp->getTindakan($rows['TINDAKAN_OLAP_SATU']);
					$data['ketlapsatu'] = $rows['KETLAPSATU'];
					$data['tindakan'] = $this->modelp->getTindakan($rows['TINDAKAN']);
					$data['ket_olap_dua'] = $rows['KET_OLAP_DUA'];
				}
				$this->load->view('templates/Cotemplate', $data);
			}
			else
				redirect('pages/dashboard');
		}
		else
			redirect('pages/home');
	}
	
	public function cetak_nonP2TL()	{
		$data['id_lap'] = $this->uri->segment(3);
		if($this->session->userdata('username'))		{
			if($this->session->userdata('hak_akses') >=1)
			{
				$data['isi'] = "pages/cetakP2TL";
				$lap = $this->modelp->selectLaporanDetail($data['id_lap']);
				$data['komentar'] = $this->modelp->select_komentar($data['id_lap']);
				foreach ($lap as $rows )
				{
					$data['id_lap'] = $rows['ID_LAPORAN'];
					$data['id_pelanggan'] = $rows['ID_PELANGGAN'];
					$data['tarif_pelanggan'] = $rows['TARIF_PELANGGAN'];
					$data['nama_pelanggan'] = $rows['NAMA_PELANGGAN'];
					$data['alamat_pelanggan'] = $rows['ALAMAT_PELANGGAN'];
					$data['daya_pelanggan'] = $rows['DAYA_PELANGGAN'];
					$data['nama_area'] = $rows['NAMA_AREA'];
					$data['tanggal_melapor'] = $rows['TANGGAL_MELAPOR'];
					$data['prioritas'] = $rows['PRIORITAS'];
					$data['indikasi_keterangan'] = $rows['INDIKASI_KETERANGAN'];
					$data['tindakan_olap_satu'] = $this->modelp->getTindakan($rows['TINDAKAN_OLAP_SATU']);
					$data['ketlapsatu'] = $rows['KETLAPSATU'];
					$data['tindakan'] = $this->modelp->getTindakan($rows['TINDAKAN']);
					$data['ket_olap_dua'] = $rows['KET_OLAP_DUA'];
				}
				$data['isi'] = "pages/cetak_nonP2TL";
				$this->load->view('templates/Cotemplate', $data);
			}
			else
				redirect('pages/dashboard');
		}
		else
			redirect('pages/home');
	}
	
	public function rekap_cetak_nonP2TL($page = 'rekap_cetak_nonP2TL')
	{
		if ( ! file_exists(APPPATH.'/views/pages/'.$page.'.php'))
		{
			show_404();
		}
		if($this->session->userdata('username'))
		{
			if($this->session->userdata('hak_akses') >=1)
			{
				$data['isi'] = "pages/rekap_cetak_nonP2TL";
				$bol=$this->cekDaerah();
				if($bol==1)
				{
					$data['result'] = $this->modelp->getRekap_Cetak_nonp2tl();
				}
				else if($bol==0)
				{
					$data['result'] = $this->modelp->getRekap_Cetak_nonp2tl_2($this->session->userdata('kdarea'));
				}
				$this->load->view('templates/template', $data);
			}
			else
				redirect('pages/dashboard');
		}
		else
			redirect('pages/home');
	}
	
	public function validasi_nonP2TL()
	{
		if($this->session->userdata('username'))
		{
			if($this->session->userdata('hak_akses') >=2)
			{
				$id_lap=$this->uri->segment(3);
				$lap = $this->modelp->selectLaporan($id_lap);
				$data['komentar'] = $this->modelp->select_komentar($id_lap);
				foreach($lap as $rows)
				{
					$data['id_lap'] = $rows['ID_LAPORAN'];
					$data['id_pelanggan'] = $rows['ID_PELANGGAN'];
					$data['nama_pelanggan'] = $rows['NAMA_PELANGGAN'];
					$data['tarif_pelanggan'] = $rows['TARIF_PELANGGAN'];
					$data['daya_pelanggan'] = $rows['DAYA_PELANGGAN'];
					$daya['alamat_pelanggan'] = $rows['ALAMAT_PELANGGAN'];
					$data['nama_area'] = $rows['NAMA_AREA'];
					$data['tanggal_melapor'] = $rows['TANGGAL_MELAPOR'];
					$data['indikasi_keterangan'] = $rows['INDIKASI_KETERANGAN'];
					$data['prioritas'] = $rows['PRIORITAS'];

				}
				$data['isi'] = "pages/validasi_nonP2TL";

				$this->load->view('templates/Cotemplate', $data);
			}
			else
				redirect('pages/dashboard');
		}
		else
			redirect('pages/home');
	}
	
	public function rekap_validasi_nonP2TL($page = 'rekap_validasi_nonP2TL')
	{
		if ( ! file_exists(APPPATH.'/views/pages/'.$page.'.php'))
		{
			show_404();
		}
		if($this->session->userdata('username'))
		{
			if($this->session->userdata('hak_akses') >=2)
			{
				$data['isi'] = "pages/rekap_validasi_nonP2TL";
				$bol=$this->cekDaerah();
				if($bol==1)
				{
					$data['result'] = $this->modelp->getRekap_validasi_nonp2tl();
				}
				else if($bol==0)
				{
					$data['result'] = $this->modelp->getRekap_validasi_nonp2tl($this->session->userdata('kdarea'));
				}
				$this->load->view('templates/template', $data);
			}
			else
				redirect('pages/dashboard');
		}
		else
			redirect('pages/home');
	}
	
	public function input_P2TL()	{
		if($this->session->userdata('username'))		{
			if($this->session->userdata('hak_akses') >=1)			{
				$id_lap= $this->uri->segment(3);
				$data['isi'] = "pages/input_P2TL";
				//$data['lap'] = $this->modelp->selectLaporan($id_lap);
				$lap_detail = $this->modelp->selectLaporanDetail($id_lap);
				$data['unit']=$this->modelp->select_unit();
				$data['pinalti']= $this->modelp->select_pinalti();
				$data['tarif'] = $this->modelp->selectTarif();
				$data['daya'] = $this->modelp->selectDaya();
				$data['komentar'] = $this->modelp->select_komentar($id_lap);
				foreach($lap_detail as $rows)				{
					$data['id_lap'] = $rows['ID_LAPORAN'];
					$data['tanggal'] = $rows['TANGGAL_MELAPOR'];
					$data['id_pel'] = $rows['ID_PELANGGAN'];
					$data['tarif_pel'] = $rows['TARIF_PELANGGAN'];
					$data['nama_pel'] = $rows['NAMA_PELANGGAN'];
					$data['daya_pel'] = $rows['DAYA_PELANGGAN'];
					$data['unit_pel'] = $rows['NAMA_AREA'];
					$data['indikasi'] =  	$rows['INDIKASI_KETERANGAN'];
					$data['prioritas'] = $rows['PRIORITAS'];
					$data['tindakan1'] = $this->modelp->getTindakan($rows['TINDAKAN_OLAP_SATU']);
					$data['ket1'] = $rows['KETLAPSATU'];
					$data['tindakan2'] = $this->modelp->getTindakan($rows['TINDAKAN']);
					$data['ket2'] = $rows['KET_OLAP_DUA'];
				}
				$this->load->view('templates/Cotemplate', $data);
			}
			else
				redirect('pages/dashboard');
		}
		else
			redirect('pages/home');
	}
	
	public function rekap_input_P2TL($page = 'rekap_input_P2TL')
	{
		if ( ! file_exists(APPPATH.'/views/pages/'.$page.'.php'))
		{
			show_404();
		}
		if($this->session->userdata('username'))
		{
			if($this->session->userdata('hak_akses') >=1)
			{
				$data['isi'] = "pages/rekap_input_P2TL";
				$bol=$this->cekDaerah();
				if($bol==1)
				{
					$data['result'] = $this->modelp->getRekap_input_p2tl();
				}
				else if($bol==0)
				{
					$data['result'] = $this->modelp->getRekap_input_p2tl_2($this->session->userdata('kdarea'));
				}
				$this->load->view('templates/template', $data);
			}
			else
				redirect('pages/dashboard');
		}
		else
			redirect('pages/home');
	}
	
	public function rekap_anev($page = 'rekap_anev')
	{
		if ( ! file_exists(APPPATH.'/views/pages/'.$page.'.php'))
		{
			show_404();
		}
		if($this->session->userdata('username'))
		{
			if($this->session->userdata('hak_akses') >=1)
			{
				$data['isi'] = "pages/rekap_anev";
				$bol=$this->cekDaerah();
				if($bol==1)
				{
					$data['result'] = $this->modelp->getRekap_anev();
				}
				else if($bol==0)
				{
					$data['result'] = $this->modelp->getRekap_anev_2($this->session->userdata('kdarea'));
				}
				$this->load->view('templates/template', $data);
			}
			else
				redirect('pages/dashboard');
		}
		else
			redirect('pages/home');
	}
	public function anev()
	{
		if($this->session->userdata('username'))
		{
			if($this->session->userdata('hak_akses') >=1)
			{
				$data['isi'] = "pages/anev";
				$data['id_lap']=$this->uri->segment(3);
				$data['komentar'] = $this->modelp->select_komentar($data['id_lap']);

				$lap = $this->modelp->selectLapDetailAnev($data['id_lap']);
				$data['pinalti']= $this->modelp->select_pinalti();
				//print_r($lap);
				foreach($lap as $rows)
				{
					$data['tanggal_periksa'] = $rows['TANGGAL_P2TL'];
					$data['petugas1'] = $rows['PETUGAS1_P2TL'];
					$data['petugas2'] = $rows['PETUGAS2_P2TL'];
					$data['hasil_temuan_p2tl'] = $rows['HASIL_TEMUAN_P2TL'];
					$data['kesimpulan'] = $rows['KESIMPULAN'];
					$data['usernamep2tl'] = $rows['USERNAMEP2TL'];
					$data['tanggal_input_p2tl'] = $rows['TANGGAL_INPUT_P2TL'];
					$data['id_pelanggan'] = $rows['ID_PELANGGAN'];
					$data['nama_pelanggan'] = $rows['NAMA_PELANGGAN'];
					$data['daya_pelanggan'] = $rows['DAYA_PELANGGAN'];
					$data['nama_area'] = $rows['NAMA_AREA'];
					$data['alamat_pelanggan'] = $rows['ALAMAT_PELANGGAN'];
					$data['usernamelap'] = $rows['USERNAMELAP'];
					$data['tanggal_melapor'] = $rows['TANGGAL_MELAPOR'];
					$data['usernameolap1'] = $rows['USERNAMEOLAP1'];
					$data['ketlapsatu'] = $rows['KETLAPSATU'];
					$data['tindakan_olap_satu'] = $this->modelp->getTindakan($rows['TINDAKAN_OLAP_SATU']);
					$data['usernameolap2'] = $rows['USERNAMEOLAP2'];
					$data['ket_olap_dua'] = $rows['KET_OLAP_DUA'];
					$data['tindakan'] = $this->modelp->getTindakan($rows['TINDAKAN']);
					$data['indikasi'] = $rows['INDIKASI_KETERANGAN'];
					$data['kode_prioritas'] = $rows['PRIORITAS'];
				}
				$this->load->view('templates/Cotemplate', $data);
			}
			else
				redirect('pages/dashboard');
		}
		else
			redirect('pages/home');
	}
	
	
	public function rekap_sph($page = 'rekap_sph')
	{
		if ( ! file_exists(APPPATH.'/views/pages/'.$page.'.php'))
		{
			show_404();
		}
		if($this->session->userdata('username'))
		{
			if($this->session->userdata('hak_akses') >=1)
			{
				$data['isi'] = "pages/rekap_sph";
				$bol=$this->cekDaerah();
				if($bol==1)
				{
					$data['result'] = $this->modelp->getRekap_sph();
				}
				else if($bol==0)
				{
					$data['result'] = $this->modelp->getRekap_sph_2($this->session->userdata('kdarea'));
				}
				$this->load->view('templates/template', $data);
			}
			else
				redirect('pages/dashboard');
		}
		else
			redirect('pages/home');
	}
	
	public function sph()
	{
		if($this->session->userdata('username'))
		{
			if($this->session->userdata('hak_akses') >=1)
			{
				$data['isi'] = "pages/sph";

				$data['id_lap']=$this->uri->segment(3);
				$data['komentar'] = $this->modelp->select_komentar($data['id_lap']);
				$lap = $this->modelp->selectLapDetailSph($data['id_lap']);
				$data['pinalti'] = $this->modelp->select_pinalti();
				//print_r($lap);
				foreach($lap as $rows)
				{
					$data['tanggal_periksa'] = $rows['TANGGAL_P2TL'];
					$data['petugas1'] = $rows['PETUGAS1_P2TL'];
					$data['petugas2'] = $rows['PETUGAS2_P2TL'];
					$data['hasil_temuan_p2tl'] = $rows['HASIL_TEMUAN_P2TL'];
					$data['kesimpulan'] = $rows['KESIMPULAN'];
					$data['usernamep2tl'] = $rows['USERNAMEP2TL'];
					$data['tanggal_input_p2tl'] = $rows['TANGGAL_INPUT_P2TL'];
					$data['id_pelanggan'] = $rows['ID_PELANGGAN'];
					$data['nama_pelanggan'] = $rows['NAMA_PELANGGAN'];
					$data['daya_pelanggan'] = $rows['DAYA_PELANGGAN'];
					$data['nama_area'] = $rows['NAMA_AREA'];
					$data['alamat_pelanggan'] = $rows['ALAMAT_PELANGGAN'];
					$data['usernamelap'] = $rows['USERNAMELAP'];
					$data['tanggal_melapor'] = $rows['TANGGAL_MELAPOR'];
					$data['usernameolap1'] = $rows['USERNAMEOLAP1'];
					$data['ketlapsatu'] = $rows['KETLAPSATU'];
					$data['tindakan_olap_satu'] = $this->modelp->getTindakan($rows['TINDAKAN_OLAP_SATU']);
					$data['usernameolap2'] = $rows['USERNAMEOLAP2'];
					$data['ket_olap_dua'] = $rows['KET_OLAP_DUA'];
					$data['tindakan'] = $this->modelp->getTindakan($rows['TINDAKAN']);
					$data['indikasi'] = $rows['INDIKASI_KETERANGAN'];
					$data['kode_prioritas'] = $rows['PRIORITAS'];
					$data['tanggal_periksa'] = $rows['TANGGAL_PERIKSA'];
					$data['petugas1_anev'] = $rows['PETUGAS1_ANEV'];
					$data['petugas2_anev'] = $rows['PETUGAS2_ANEV'];
					$data['temuan'] = $rows['HASIL_TEMUAN_ANEV'];
					$data['kesimpulan_anev'] = $rows['KESIMPULAN_ANEV'];
					$data['username_anev'] = $rows['USERNAME_ANEV'];
					$data['tanggal_input_anev'] = $rows['TANGGAL_INPUT_ANEV'];
				}

				$this->load->view('templates/Cotemplate', $data);
			}
			else
				redirect('pages/dashboard');
		}
		else
			redirect('pages/home');
	}
	
	public function validasi_sph()
	{
		if($this->session->userdata('username'))
		{
			if($this->session->userdata('hak_akses') >=2)
			{
				$data['isi'] = "pages/validasi_sph";

				$data['id_lap']=$this->uri->segment(3);
				$data['komentar'] = $this->modelp->select_komentar($data['id_lap']);
				$lap = $this->modelp->selectValidasiSPH($data['id_lap']);
				$data['pinalti'] = $this->modelp->select_pinalti();

				foreach($lap as $rows)
				{
					$data['tanggal_periksa'] = $rows['TANGGAL_P2TL'];
					$data['petugas1'] = $rows['PETUGAS1_P2TL'];
					$data['petugas2'] = $rows['PETUGAS2_P2TL'];
					$data['hasil_temuan_p2tl'] = $rows['HASIL_TEMUAN_P2TL'];
					$data['kesimpulan'] = $rows['KESIMPULAN'];
					$data['usernamep2tl'] = $rows['USERNAMEP2TL'];
					$data['tanggal_input_p2tl'] = $rows['TANGGAL_INPUT_P2TL'];
					$data['id_pelanggan'] = $rows['ID_PELANGGAN'];
					$data['nama_pelanggan'] = $rows['NAMA_PELANGGAN'];
					$data['daya_pelanggan'] = $rows['DAYA_PELANGGAN'];
					$data['nama_area'] = $rows['NAMA_AREA'];
					$data['alamat_pelanggan'] = $rows['ALAMAT_PELANGGAN'];
					$data['usernamelap'] = $rows['USERNAMELAP'];
					$data['tanggal_melapor'] = $rows['TANGGAL_MELAPOR'];
					$data['usernameolap1'] = $rows['USERNAMEOLAP1'];
					$data['ketlapsatu'] = $rows['KETLAPSATU'];
					$data['tindakan_olap_satu'] =$this->modelp->getTindakan($rows['TINDAKAN_OLAP_SATU']);
					$data['usernameolap2'] = $rows['USERNAMEOLAP2'];
					$data['ket_olap_dua'] = $rows['KET_OLAP_DUA'];
					$data['tindakan'] = $this->modelp->getTindakan($rows['TINDAKAN']);
					$data['indikasi'] = $rows['INDIKASI_KETERANGAN'];
					$data['id_sph'] = $rows['ID_SPH'];
					$data['username_sph'] = $rows['USERNAME_SPH'];					
					$data['id_laporan'] = $rows['ID_LAPORAN_SPH'];
					$data['tanggal_input_sph'] = $rows['TANGGAL_INPUT_SPH'];
					$data['tanggal_sph'] = $rows['TANGGAL_SPH'];
					$data['path_file_sph'] = $rows['PATH_FILE_SPH'];
					$data['jumlah_ts_sph'] = $rows['JUMLAH_TS_SPH'];
					$data['ttd_pln'] = $rows['TTD_PLN'];
					$data['ttd_pelanggan'] = $rows['TTD_PELANGGAN'];
					$data['kesimpulan_sph'] = $rows['KESIMPULAN_SPH'];
					$data['kesimpulan_temuan'] = $rows['KESIMPULAN_TEMUAN'];
					$data['kode_pelanggaran_sph'] = $rows['KODE_PELANGGARAN_SPH'];


					$data['kode_prioritas'] = $rows['PRIORITAS'];
					$data['tanggal_periksa'] = $rows['TANGGAL_PERIKSA'];
					$data['petugas1_anev'] = $rows['PETUGAS1_ANEV'];
					$data['petugas2_anev'] = $rows['PETUGAS2_ANEV'];
					$data['temuan'] = $rows['HASIL_TEMUAN_ANEV'];
					$data['kesimpulan_anev'] = $rows['KESIMPULAN_ANEV'];
					$data['username_anev'] = $rows['USERNAME_ANEV'];
					$data['tanggal_input_anev'] = $rows['TANGGAL_INPUT_ANEV'];
				}
				$this->load->view('templates/Cotemplate', $data);
			}
			else
				redirect('pages/dashboard');
		}
		else
			redirect('pages/home');
	}
	
	public function rekap_validasi_sph($page = 'rekap_validasi_sph')
	{
		if ( ! file_exists(APPPATH.'/views/pages/'.$page.'.php'))
		{
			show_404();
		}
		if($this->session->userdata('username'))
		{
			if($this->session->userdata('hak_akses') >=2)
			{
				$data['isi'] = "pages/rekap_validasi_sph";
				$bol=$this->cekDaerah();
				if($bol==1)
				{
					$data['result'] = $this->modelp->getRekap_validasi_sph();
				}
				else if($bol==0)
				{
					$data['result'] = $this->modelp->getRekap_validasi_sph_2($this->session->userdata('kdarea'));
				}
				$this->load->view('templates/template', $data);
			}
			else
				redirect('pages/dashboard');
		}
		else
			redirect('pages/home');
	}
	
	public function rekap_input_nonp2tl($page= 'rekap_input_nonp2tl')
	{
		if ( ! file_exists(APPPATH.'/views/pages/'.$page.'.php'))
		{
			show_404();
		}
		if($this->session->userdata('username'))
		{
			if($this->session->userdata('hak_akses') >=1)
			{
				$data['isi'] = "pages/rekap_input_nonp2tl";
				$bol=$this->cekDaerah();
				if($bol==1)
				{
					$data['result'] = $this->modelp->getRekap_input_nonp2tl();
				}
				else if($bol==0)
				{
					$data['result'] = $this->modelp->getRekap_input_nonp2tl_2($this->session->userdata('kdarea'));
				}
				$this->load->view('templates/template', $data);
			}
			else
				redirect('pages/dashboard');
		}
		else
			redirect('pages/home');
	}
	
	public function input_nonp2tl(){
		if($this->session->userdata('username')){
			if($this->session->userdata('hak_akses') >=1){
				$id_lap = $this->uri->segment(3);
				$data['isi'] = "pages/input_nonp2TL";
				$lap_detail = $this->modelp->selectLaporanDetailnon($id_lap);
				$data['unit']=$this->modelp->select_unit();
				$data['pinalti']= $this->modelp->select_pinalti();
				$data['tarif'] = $this->modelp->selectTarif();
				$data['daya'] = $this->modelp->selectDaya();
				$data['komentar'] = $this->modelp->select_komentar($id_lap);
				foreach($lap_detail as $rows){
					$data['id_lap'] = $rows['ID_LAPORAN'];
					$data['tanggal'] = $rows['TANGGAL_MELAPOR'];
					$data['id_pel'] = $rows['ID_PELANGGAN'];
					$data['tarif_pel'] = $rows['TARIF_PELANGGAN'];
					$data['nama_pel'] = $rows['NAMA_PELANGGAN'];
					$data['daya_pel'] = $rows['DAYA_PELANGGAN'];
					$data['unit_pel'] = $rows['NAMA_AREA'];
					$data['indikasi'] = $rows['INDIKASI_KETERANGAN'];
					$data['prioritas'] = $rows['PRIORITAS'];
					$data['tindakan1'] = $this->modelp->getTindakan($rows['TINDAKAN_OLAP_SATU']);
					$data['ket1'] = $rows['KETLAPSATU'];
					$data['tindakan2'] = $this->modelp->getTindakan($rows['TINDAKAN']);
					$data['ket2'] = $rows['KET_OLAP_DUA'];
				}
				$this->load->view('templates/Cotemplate', $data);
			}
			else
				redirect('pages/dashboard');
		}
		else
			redirect('pages/home');
	}
	
	public function home($page= 'homepage')
	{
		if ( ! file_exists(APPPATH.'/views/pages/'.$page.'.php'))
		{
			show_404();
		}
		$this->load->view('pages/homepage');
	}
	
	
	public function signin($alert =0,$page= 'login')
	{
		if ( ! file_exists(APPPATH.'/views/pages/'.$page.'.php'))
		{
			show_404();
		}
		if($alert==0)$data['testAlert']="";
		else if($alert==1)$data['testAlert']="Belum Teregistrasi";
		else if($alert==2)$data['testAlert']="Username atau Password salah";
		$this->load->view('pages/login',$data);
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
		$data['unit']=$this->modelp->select_unit();
		$this->load->view('pages/signup',$data);
	}	
	
	public function dashboard()
	{
		if($this->session->userdata('username'))
		{
			$data['result']  = $this->modelp->select_rekap_lap_all();
			$bol=$this->cekDaerah();
			if($bol==1)
			{
				$data['rekap'] = $this->modelp->select_rekap_lap_all();
			}
			else
			{
				$data['rekap'] = $this->modelp->select_rekap_daerah($this->session->userdata('kdarea'));
			}
			$temp = $this->modelp->cariDaerah($this->session->userdata('kdarea'));
			foreach ($temp as $rows)
			{
				$data['asal'] = $rows['NAMA_AREA'];
			}
			$data['isi'] = "pages/dashboard";
			$this->load->view('templates/template',$data);
		}
		else
		{
			redirect('pages/home');
		}
	}
	
	public function keterangan($page = 'keterangan_status')
	{
		if ( ! file_exists(APPPATH.'/views/pages/'.$page.'.php'))
		{
			show_404();
		}
		if($this->session->userdata('username'))
		{
			if($this->session->userdata('hak_akses') >=1)
			{
				$data['isi'] = "pages/keterangan_status";
				$data['keterangan'] = $this->modelp->select_status();
				$this->load->view('templates/template', $data);
			}
			else
				redirect('pages/dashboard');
		}
		else
			redirect('pages/home');
	}
	
	

	public function rekap_status($kdarea = "54110")
	{
		if($this->session->userdata('username'))
		{
			if($this->session->userdata('hak_akses') >=1)
			{
				$data['isi'] = "pages/rekap_status";
				$data['result'] = $this->modelp->selectfinalrekap();
				$this->load->view('templates/template', $data);
			}
			else
				redirect('pages/dashboard');
		}
		else
			redirect('pages/home');
	}
	
	public function ganti_password($page = 'ganti_password')
	{
		if ( ! file_exists(APPPATH.'/views/pages/'.$page.'.php'))
		{
			show_404();
		}
		if($this->session->userdata('username'))
		{
			if($this->session->userdata('hak_akses') >=0)
			{
				$data['isi'] = "pages/ganti_password";
				$this->load->view('templates/template', $data);
			}
			else
				redirect('pages/dashboard');
		}
		else
			redirect('pages/home');
	}
	public function gantipass()
	{
		if($this->session->userdata('username'))
		{
			if($this->session->userdata('hak_akses') >=0)
			{
				$passwordLama = md5($this->input->post('password_lama'));
				$user=$this->modelt->selectUser($this->session->userdata('username'));
				foreach($user as $rows)
				{
					if($rows['PASSWORD_USER'] == $passwordLama)
					{
						$this->modelt->updatePass($this->session->userdata('username'),md5($this->input->post('password_baru')));
					}
				}
				redirect('pages/dashboard');
			}
			else
				redirect('pages/dashboard');
		}
		else
			redirect('pages/home');
	}
	public function list_user($page = 'list_user')
	{
		if ( ! file_exists(APPPATH.'/views/pages/'.$page.'.php'))
		{
			show_404();
		}
		if($this->session->userdata('username'))
		{
			if($this->session->userdata('hak_akses') >=2)
			{
				$data['isi'] = "pages/list_user";
				$data['result'] = $this->modelt->selectUserApprove();
				$this->load->view('templates/template', $data);
			}
			else
				redirect('pages/dashboard');
		}
		else
			redirect('pages/home');
	}
	
	public function disapprove($page = 'list_user_ditolak')
	{
		if ( ! file_exists(APPPATH.'/views/pages/'.$page.'.php'))
		{
			show_404();
		}
		if($this->session->userdata('username'))
		{
			if($this->session->userdata('hak_akses') >=2)
			{
				$data['isi'] = "pages/list_user_ditolak";
				$this->load->view('templates/template', $data);
			}
			else
				redirect('pages/dashboard');
		}
		else
			redirect('pages/home');
	}
	
	public function approve($page = 'list_user_diterima')
	{
		if ( ! file_exists(APPPATH.'/views/pages/'.$page.'.php'))
		{
			show_404();
		}
		if($this->session->userdata('username'))
		{
			if($this->session->userdata('hak_akses') >=2)
			{
				$data['isi'] = "pages/list_user_diterima";
				$this->load->view('templates/template', $data);
			}
			else
				redirect('pages/dashboard');
		}
		else
			redirect('pages/home');
	}
	public function testEncrip()
	{
		$a = "12345";
		echo "12345 yang di encrip menjadi ".md5($a);
	}
	
	public function logout()
	{
		$this->session->userdata = array();
		$this->session->sess_destroy();
		redirect('pages/dashboard');
	}
	public function cekDaerah()
	{
		if($this->session->userdata('username'))
		{
			if($this->session->userdata('hak_akses') >=0)
			{
				if($this->session->userdata('kdarea') == 54000)
				{
					return 1;
				}
				else
				{
					return 0;
				}
			}
			else
				redirect('pages/dashboard');
		}
		else
			redirect('pages/home');
	}
	
	public function inputLaporan()
	{
		if($this->session->userdata('username'))
		{
			if($this->session->userdata('hak_akses') >=0)
			{
				$id_pel=$this->input->post('id_pelanggan');
				$nama_pel=$this->input->post('nama_pelanggan');
				$alamat_pel=$this->input->post('alamat_pelanggan');
				$daya_pel=$this->input->post('daya_pelanggan');
				$unit_pel=$this->input->post('unit_pelanggan');
				$tarif_pel=$this->input->post('tarif_pelanggan');
				$indikasi=$this->input->post('indikasi');
				$prioritas=$this->input->post('prioritas');
				$date_insert=date("Y-m-d H:i:s");
				$username=$this->session->userdata('username');
				$this->modelp->insertLaporan($username,$id_pel,$nama_pel,$alamat_pel,$daya_pel,$unit_pel,$tarif_pel,$indikasi,$prioritas,$date_insert);
				redirect('pages/dashboard');
			}
			else
				redirect('pages/dashboard');
		}
		else
			redirect('pages/home');
	}
	public function lap1()
	{
		if($this->session->userdata('username'))
		{
			if($this->session->userdata('hak_akses') >=1)
			{
				$tindakan=$this->input->post('tindakan');
				if($tindakan=="a")
				{
					$status = "a_2";
				}
				else if($tindakan=="b")
				{
					$status = "c_2";
				}
				else if ($tindakan=="c")
				{
					$status = "b_2";
				}
				$keterangan=$this->input->post('keterangan');
				$date_insert=date("Y-m-d H:i:s");
				$username=$this->session->userdata('username');
				$id_lap=$this->input->post('id_lap');
				$this->modelp->insertOlahLap1($tindakan,$keterangan,$date_insert,$username,$id_lap,$status);
				redirect('pages/rekap_inputLap');
			}
			else
				redirect('pages/dashboard');
		}
		else
			redirect('pages/home');
	}
	public function lap2()
	{
		if($this->session->userdata('username'))
		{
			if($this->session->userdata('hak_akses') >=1)
			{
				$tindakan=$this->input->post('tindakan');
				if($tindakan=="a")
				{
					$status = "a_3";
				}
				else if($tindakan=="b")
				{
					$status = "c_3";
				}
				else if ($tindakan=="c")
				{
					$status = "b_3";
				}
				$keterangan=$this->input->post('keterangan');
				$date_insert=date("Y-m-d H:i:s");
				$username=$this->session->userdata('username');
				$id_lap=$this->input->post('id_lap');
				$this->modelp->insertOlahLap2($tindakan,$keterangan,$date_insert,$username,$id_lap,$status);
				redirect('pages/rekap_olahLap');
			}
			else
				redirect('pages/dashboard');
		}
		else
			redirect('pages/home');
	}
	public function printp2tl()
	{
		if($this->session->userdata('username'))
		{
			if($this->session->userdata('hak_akses') >=1)
			{
				//$data['isi'] = "pages/temp.php";
				$data['id_lap'] = $this->uri->segment(3);
				$lap = $this->modelp->selectLaporanDetail($data['id_lap']);
				foreach ($lap as $rows )
				{
					$data['id_lap'] = $rows['ID_LAPORAN'];
					$data['id_pelanggan'] = $rows['ID_PELANGGAN'];
					$data['tarif_pelanggan'] = $rows['TARIF_PELANGGAN'];
					$data['nama_pelanggan'] = $rows['NAMA_PELANGGAN'];
					$data['alamat_pelanggan'] = $rows['ALAMAT_PELANGGAN'];
					$data['daya_pelanggan'] = $rows['DAYA_PELANGGAN'];
					$data['nama_area'] = $rows['NAMA_AREA'];
					$data['tanggal_melapor'] = $rows['TANGGAL_MELAPOR'];
					$data['kode_prioritas'] = $rows['KODE_PRIORITAS'];
					$data['indikasi_keterangan'] = $rows['INDIKASI_KETERANGAN'];
					$data['tindakan_olap_satu'] = $rows['TINDAKAN_OLAP_SATU'];
					$data['ketlapsatu'] = $rows['KETLAPSATU'];
					$data['tindakan'] = $rows['TINDAKAN'];
					$data['ket_olap_dua'] = $rows['KET_OLAP_DUA'];
				}
				$data['id_lap'] = $this->uri->segment(3);
				$this->load->view('pages/temp', $data);
			}
			else
				redirect('pages/dashboard');
		}
		else
			redirect('pages/home');
	}
	public function cetaktop2tl()
	{
		if($this->session->userdata('username'))
		{
			if($this->session->userdata('hak_akses') >=1)
			{

				$id_lap=$this->input->post('id_lap');

				$data['cetakp2tl']=$this->modelp->select_cetakp2tl($id_lap);
				if($data['cetakp2tl'])
				{
					foreach($data['cetakp2tl'] as $rows)
					{
						$jumlah = $rows['JUMLAH_CETAK_PPTL'];
						$jumlah++;
						$this->modelp->updateJumlahCetakP2tl($id_lap,$jumlah);
					}
				}
				else
				{
					$date_insert=date("Y-m-d H:i:s");
					$username = $this->session->userdata('username');
					$jumlah =1;
					$this->modelp->insert_cetakp2tl($username,$id_lap,$date_insert,$jumlah);

				}
				redirect('pages/rekap_cetak_p2tl');
			}
			else
				redirect('pages/dashboard');
		}
		else
			redirect('pages/home');
	}
	public function printnonp2tl()
	{
		if($this->session->userdata('username'))
		{
			if($this->session->userdata('hak_akses') >=1)
			{
				$data['id_lap'] = $this->uri->segment(3);
				$lap = $this->modelp->selectLaporanDetail($data['id_lap']);
				foreach ($lap as $rows )
				{
					$data['id_lap'] = $rows['ID_LAPORAN'];
					$data['id_pelanggan'] = $rows['ID_PELANGGAN'];
					$data['tarif_pelanggan'] = $rows['TARIF_PELANGGAN'];
					$data['nama_pelanggan'] = $rows['NAMA_PELANGGAN'];
					$data['alamat_pelanggan'] = $rows['ALAMAT_PELANGGAN'];
					$data['daya_pelanggan'] = $rows['DAYA_PELANGGAN'];
					$data['nama_area'] = $rows['NAMA_AREA'];
					$data['tanggal_melapor'] = $rows['TANGGAL_MELAPOR'];
					$data['kode_prioritas'] = $rows['KODE_PRIORITAS'];
					$data['indikasi_keterangan'] = $rows['INDIKASI_KETERANGAN'];
					$data['tindakan_olap_satu'] = $rows['TINDAKAN_OLAP_SATU'];
					$data['ketlapsatu'] = $rows['KETLAPSATU'];
					$data['tindakan'] = $rows['TINDAKAN'];
					$data['ket_olap_dua'] = $rows['KET_OLAP_DUA'];
				}
				$this->load->view('pages/temp2', $data);
			}
			else
				redirect('pages/dashboard');
		}
		else
			redirect('pages/home');
	}
	public function cetaktononp2tl()
	{
		if($this->session->userdata('username'))
		{
			if($this->session->userdata('hak_akses') >=1)
			{
				$id_lap=$this->input->post('id_lap');
				$data['cetakp2tl']=$this->modelp->select_cetaknonp2tl($id_lap);
				if($data['cetakp2tl'])
				{
					foreach($data['cetakp2tl'] as $rows)
					{
						$jumlah = $rows['JUMLAH_CETAK_NON_PPTL'];
						$jumlah++;
						$this->modelp->updateJumlahCetaknonP2tl($id_lap,$jumlah);
					}
				}
				else
				{
					$date_insert=date("Y-m-d H:i:s");
					$username = $this->session->userdata('username');
					$jumlah =1;
					$this->modelp->insert_cetaknonp2tl($username,$id_lap,$date_insert,$jumlah);

				}
				redirect('pages/rekap_cetak_nonp2tl');
			}
			else
				redirect('pages/dashboard');
		}
		else
			redirect('pages/home');
	}
	public function inputhasilp2tl()
	{
		if($this->session->userdata('username'))
		{
			if($this->session->userdata('hak_akses') >=1)
			{
				$config['upload_path'] = './uploads/p2tl/';
				$config['allowed_types'] = 'jpg|png|txt|doc|docx';
				$config['max_size']	= '100';
				$this->load->library('upload', $config);
				if ($this->upload->do_upload())
				{
					$upload_data = $this->upload->data();
					$id_lap = $this->input->post('id_lap');
					$id_pel=$this->input->post('id_pel');
					$nama_pel=$this->input->post('nama_pel');
					$tarif_pel=$this->input->post('tarif_pel');
					$daya_pel=$this->input->post('daya_pel');
					$unit_pel=$this->input->post('unit_pel');
					$petugas1=$this->input->post('petugas1');
					$petugas2=$this->input->post('petugas2');
					$pinalti=$this->input->post('pinalti');
					$hasil_temuan=$this->input->post('hasil_temuan');
					$kesimpulan=$this->input->post('kesimpulan');
					$tanggal_p2tl = $this->input->post('tgl_lahir');
					$tanggal_sekarang = date("Y-m-d H:i:s");
					$username = $this->session->userdata('username');
					$kode_pelanggaran=$this->input->post('pinalti');
					$path=$upload_data['full_path'];
					$this->modelp->updateLaporanPel($id_lap,$id_pel,$nama_pel,$tarif_pel,$daya_pel,$unit_pel);
					$this->modelp->insertHasilp2tl($username,$kode_pelanggaran,$id_lap,$tanggal_sekarang,$petugas1,$petugas2,$hasil_temuan,$kesimpulan,$path,$tanggal_p2tl);
					redirect('pages/rekap_input_P2TL');
				}	
				else
				{
					echo $this->upload->display_errors();
				}
			}
			else
				redirect('pages/dashboard');
		}
		else
			redirect('pages/home');
	}
	public function inputhasilnonp2tl()
	{
		if($this->session->userdata('username'))
		{
			if($this->session->userdata('hak_akses') >=1)
			{
				$id_lap = $this->input->post('id_lap');
				$id_pel=$this->input->post('id_pel');
				$nama_pel=$this->input->post('nama_pel');
				$tarif_pel=$this->input->post('tarif_pel');
				$daya_pel=$this->input->post('daya_pel');
				$unit_pel=$this->input->post('unit_pel');
				$petugas1=$this->input->post('petugas1');
				$petugas2=$this->input->post('petugas2');
				$kesimpulan=$this->input->post('kesimpulan');
				$username = $this->session->userdata('username');
				$this->modelp->updateLaporanPel($id_lap,$id_pel,$nama_pel,$tarif_pel,$daya_pel,$unit_pel);
				$this->modelp->insertHasilnonp2tl($username,$id_lap,$petugas1,$petugas2,$kesimpulan);
				redirect('pages/rekap_input_nonp2tl');
			}
			else
				redirect('pages/dashboard');
		}
		else
			redirect('pages/home');
	}
	public function insertanev()
	{
		if($this->session->userdata('username'))
		{
			if($this->session->userdata('hak_akses') >=1)
			{
				$id_lap = $this->input->post('id_lap');
				$petugas1=$this->input->post('petugas1');
				$petugas2=$this->input->post('petugas2');
				$kesimpulan=$this->input->post('kesimpulan');
				$username = $this->session->userdata('username');
				$tanggal_anev = $this->input->post('tgl_lahir');
				$tanggal_sekarang = date("Y-m-d H:i:s");
				$pinalti = $this->input->post('pinalti');
				$hasil_temuan = $this->input->post('hasil_temuan');
				$this->modelp->insertanev($id_lap,$petugas1,$petugas2,$username,$tanggal_anev,$tanggal_sekarang,$pinalti,$hasil_temuan,$kesimpulan);
				redirect('pages/rekap_anev');
			}
			else
				redirect('pages/dashboard');
		}
		else
			redirect('pages/home');
	}
	public function insertsph()	{
		if($this->session->userdata('username')){
			if($this->session->userdata('hak_akses') >=1){
				$config['upload_path'] = './uploads/sph/';
				$config['allowed_types'] = 'jpg|png|txt|doc|docx';
				$config['max_size']	= '100';
				$this->load->library('upload', $config);
				if ($this->upload->do_upload()){
					$upload_data = $this->upload->data();
					$id_lap = $this->input->post('id_lap');
					$kesimpulan=$this->input->post('kesimpulan');
					$username = $this->session->userdata('username');
					$tanggal_sph = $this->input->post('tgl_lahir');
					$tanggal_sekarang = date("Y-m-d H:i:s");
					$pinalti = $this->input->post('pinalti');
					$kesimpulan_temuan = $this->input->post('kesimpulan_temuan');
					$tdt_pelanggan= $this->input->post('tdt_pelanggan');
					$tdt_pln= $this->input->post('tdt_pln');
					$jumlah_ts = $this->input->post('jumlah_ts');
					$path=$upload_data['full_path'];
					$this->modelp->insertsph($username,$pinalti,$id_lap,$tanggal_sekarang,$tanggal_sph,$path,$jumlah_ts,$kesimpulan,$kesimpulan_temuan,$tdt_pln,$tdt_pelanggan);
					redirect('pages/rekap_sph');
				}
				else{
					echo $this->upload->display_errors();
				}
			}
			else	redirect('pages/dashboard');
		}
		else redirect('pages/home');
	}
	public function nonp2tlDitolak()
	{
		if($this->session->userdata('username'))
		{
			if($this->session->userdata('hak_akses') >=2)
			{
				$tanggal_sekarang =date("Y-m-d H:i:s");
				$id_lap=$this->input->post('id_lap');
				$keterangan="Tidak valid";
				$validasi=0;
				$username=$this->session->userdata('username');
				$this->modelp->insertvalidasinonp2tl($username,$id_lap,$keterangan,$validasi,$tanggal_sekarang);
				redirect('pages/rekap_validasi_nonP2TL');
			}
			else
				redirect('pages/dashboard');
		}
		else
			redirect('pages/home');
	}
	public function nonp2tlValid()
	{
		if($this->session->userdata('username'))
		{
			if($this->session->userdata('hak_akses') >=2)
			{
				$tanggal_sekarang =date("Y-m-d H:i:s");
				$id_lap=$this->input->post('id_lap');
				$keterangan="Valid";
				$validasi=1;
				$username=$this->session->userdata('username');
				$this->modelp->insertvalidasinonp2tl($username,$id_lap,$keterangan,$validasi,$tanggal_sekarang);
				redirect('pages/rekap_validasi_nonP2TL');
			}
			else
				redirect('pages/dashboard');
		}
		else
			redirect('pages/home');
	}

	public function list_all_lap($page='list_all_lap')
	{
		if ( ! file_exists(APPPATH.'/views/pages/'.$page.'.php'))
		{
			show_404();
		}
		if($this->session->userdata('username'))
		{
			if($this->session->userdata('hak_akses') >=1)
			{
				$data['lap'] = $this->modelp->select_lap();
				$data['isi'] = "pages/list_all_lap";
				$this->load->view('templates/template',$data);
			}
			else
				redirect('pages/dashboard');
		}
		else
			redirect('pages/home');

	}

	public function detail_lap()
	{	
		if($this->session->userdata('username'))
		{
			if($this->session->userdata('hak_akses') >=1)
			{
				$id_lap = $this->uri->segment(3);
				 $data['id_lap_laporan'] = "-"; 
				 $data['id_pel_laporan'] = "-";
				 $data['nama_pelanggan_laporan'] = "-";
				 $data['daya_pelanggan'] = "-";
				 $data['alamat_pelanggan_laporan'] = "-";
				 $data['unit_laporan'] = "-";
				 $data['indikasi_laporan'] = "-";
				 $data['pelapor'] = "-";
				 $data['tanggal_laporan'] = "-";
				 $data['prioritas_laporan'] = "-";
				 $data['status_laporan'] = "-";

				 $data['usulan_tindakan_spv'] = "-";
				 $data['keterangan_spv'] = "-";
				 $data['inputer_spv'] = "-";
				 $data['tanggal_spv'] = "-";

				 $data['usulan_tindakan_asman'] = "-";
				 $data['keterangan_asman'] = "-";
				 $data['inputer_asman'] = "-";
				 $data['tanggal_asman'] = "-";

				 $data['volume'] ="-";

				 $data['tanggal_P2TL'] = "-";
				 $data['petugas1_P2TL'] = "-";
				 $data['petugas2_P2TL'] = "-";
				 $data['kode_pelanggaran_P2TL'] = "-";
				 $data['path_file_P2TL'] = "-";
				 $data['hasil_temuan_p2tl'] = "-";
				 $data['kesimpulan_P2TL'] = "-";
				 $data['inputer_P2TL'] = "-";
				 $data['tanggal_input_P2TL'] = "-";



				 $data['username_nonp2tl'] = "-";
				 $data['petugas1_nonp2tl'] = "-";
				 $data['petugas2_nonp2tl'] = "-";
				 $data['kesimpulan_nonp2tl'] = "-";

				 $data['tanggal_validasi_nonp2tl']="-";
				 $data['keterangan_validasi_nonp2tl']="-";
				 $data['inputer_validasi_nonp2tl']="-";


				 $data['tanggal_anev'] = "-";
				 $data['petugas1_anev'] = "-";
				 $data['petugas2_anev'] = "-";
				 $data['kode_pelanggaran_anev'] = "-";
				 $data['temuan_anev'] = "-";
				 $data['kesimpulan_anev'] = "-";
				 $data['inputer_anev'] = "-";
				 $data['tanggal_input_anev'] = "-";

				 $data['tanggal_sph'] = "-";
				 $data['petugas_sph'] = "-";
				 $data['pelanggan_sph'] = "-";
				 $data['pelanggaran_sph'] = "-";
				 $data['jumlah_ts'] = "-";
				 $data['kesimpulan_temuan'] = "-";
				 $data['kesimpulan_sph'] = "-";
				 $data['inputer_sph'] = "-";
				 $data['tanggal_input_sph'] = "-";

				 $data['tanggal_validasi_sph']="-";
				 $data['keterangan_validasi_sph']="-";
				 $data['inputer_validasi_sph']="-";

				 $temp = $this->modelp->select_status_lap($id_lap);
				 foreach($temp as $rows)
				 {
				 	$status = $rows['KODE_STATUS'];
				 }
				 $nomor_status = substr($status,-1);
				 $huruf_status = substr($status,-3,1);
				 //echo $nomor_status." ".$huruf_status;
				 //echo "<br>".$status;
				 if($nomor_status >= 0)
				 {
				 	$lap = $this->modelp->selectLaporan($id_lap);
				 	//print_r($lap);
				 	foreach($lap as $rows)
				 	{
					 	 $data['id_lap_laporan'] = $rows['ID_LAPORAN']; 
						 $data['id_pel_laporan'] = $rows['ID_PELANGGAN'];
						 $data['nama_pelanggan_laporan'] = $rows['NAMA_PELANGGAN'];
						 $data['daya_pelanggan'] = $rows['DAYA_PELANGGAN'];
						 $data['alamat_pelanggan_laporan'] = $rows['ALAMAT_PELANGGAN'];
						 $data['unit_laporan'] = $rows['NAMA_AREA'];
						 $data['indikasi_laporan'] = $rows['INDIKASI_KETERANGAN'];
						 $data['pelapor'] = $rows['USERNAME'];
						 $data['tanggal_laporan'] = $rows['TANGGAL_MELAPOR'];
						 $data['prioritas_laporan'] = $rows['PRIORITAS'];
						 $data['status_laporan'] = $rows['KODE_STATUS'];
					}
				 }
				 if($nomor_status >=1)
				 {
				 	$lap = $this->modelp->select_data_olap1($id_lap);
				 	foreach($lap as $rows)
				 	{
					 	 $data['usulan_tindakan_spv'] = $this->modelp->getTindakan($rows['TINDAKAN_OLAP_SATU']);
						 $data['keterangan_spv'] = $rows['KETLAPSATU'];
						 $data['inputer_spv'] = $rows['USERNAME'];
						 $data['tanggal_spv'] = $rows['TANGGAL_OLAP_SATU'];
					}
				 }
				 if($nomor_status >=3)
				 {
				 	$lap=$this->modelp->select_data_olap2($id_lap);
				 	foreach($lap as $rows)
				 	{
					 	 $data['usulan_tindakan_asman'] = $this->modelp->getTindakan($rows['TINDAKAN']);
						 $data['keterangan_asman'] = $rows['KET_OLAP_DUA'];
						 $data['inputer_asman'] = $rows['USERNAME'];
						 $data['tanggal_asman'] = $rows['TANGGAL_OLAP_DUA'];
					}
				 }
				 if(($nomor_status >=0) and ($huruf_status =="a" or $huruf_status=="b") and $status!="b_6")
				 {
					 if($nomor_status>=4)
					 {
					 	$lap=$this->modelp->select_cetakp2tl($id_lap);
					 	foreach($lap as $rows)
					 	{
					 		$data['volume'] = $rows['JUMLAH_CETAK_PPTL'];
					 	}
					 }
					 if($nomor_status>=5)
					 {
					 	$lap=$this->modelp->select_hasil_p2tl($id_lap);
					 	foreach($lap as $rows)
					 	{
					 		 $data['tanggal_P2TL'] =$rows['TANGGAL_P2TL'];
							 $data['petugas1_P2TL'] = $rows['PETUGAS1_P2TL'];
							 $data['petugas2_P2TL'] = $rows['PETUGAS2_P2TL'];
							 $data['kode_pelanggaran_P2TL'] = $rows['KODE_PELANGGARAN'];
							 
							 $data['hasil_temuan_p2tl'] = $rows['HASIL_TEMUAN_P2TL'];
							 $data['kesimpulan_P2TL'] = $rows['KESIMPULAN'];
							 $data['inputer_P2TL'] = $rows['USERNAME'];
							 $data['tanggal_input_P2TL'] = $rows['TANGGAL_INPUT_P2TL'];
					 	}
					 }
					 if($nomor_status>=6)
					 {
					 	$lap = $this->modelp->select_anev($id_lap);
					 	foreach($lap as $rows)
					 	{
					 		 $data['tanggal_anev'] = $rows['TANGGAL_ANEV'];
							 $data['petugas1_anev'] = $rows['PETUGAS1_ANEV'];
							 $data['petugas2_anev'] = $rows['PETUGAS2_ANEV'];
							 $data['kode_pelanggaran_anev'] = $rows['KODE_PELANGGARAN'];
							 $data['temuan_anev'] = $rows['HASIL_TEMUAN_ANEV'];
							 $data['kesimpulan_anev'] = $rows['KESIMPULAN_ANEV'];
							 $data['inputer_anev'] = $rows['USERNAME'];
							 $data['tanggal_input_anev'] = $rows['TANGGAL_INPUT_ANEV'];
					 	}
					 }
					 if($nomor_status>=7)
					 {
					 	$lap = $this->modelp->select_sph($id_lap);
					 	foreach($lap as $rows)
					 	{
					 		 $data['tanggal_sph'] = $rows['TANGGAL_SPH'];
							 $data['petugas_sph'] = $rows['TTD_PLN'];
							 $data['pelanggan_sph'] = $rows['TTD_PELANGGAN'];
							 $data['pelanggaran_sph'] = $rows['KODE_PELANGGARAN'];
							 $data['jumlah_ts'] = $rows['JUMLAH_TS'];
							 $data['kesimpulan_temuan'] =$rows['KESIMPULAN_TEMUAN'];
							 $data['kesimpulan_sph'] = $rows['KESIMPULAN'];
							 $data['inputer_sph'] = $rows['USERNAME'];
							 $data['tanggal_input_sph'] = $rows['TANGGAL_INPUT_SPH'];
					 	}
					 }
					 if($nomor_status>=8)
					 {
					 	$lap=$this->modelp->select_validasi_sph($id_lap);
					 	foreach($lap as $rows)
					 	{
					 		 $data['tanggal_validasi_sph']= $rows['TGL_PENGESAHAN'];
							 $data['keterangan_validasi_sph']=$rows['KET_SPH'];
							 $data['inputer_validasi_sph']=$rows['USERNAME'];
					 	}
					 }
					 $this->load->view('pages/detail_lap',$data);
				 }
				 if(($nomor_status>=0) and ($huruf_status=="c" or $status=="b_6"))
				 {
				 	if($nomor_status>=4)
					 {
					 	$lap=$this->modelp->select_cetaknonp2tl($id_lap);
					 	foreach($lap as $rows)
					 	{
					 		$data['volume'] = $rows['JUMLAH_CETAK_NON_PPTL'];
					 	}
					 }
					 if($nomor_status>=5)
					 {
					 	$lap = $this->modelp->select_nonp2tl($id_lap);
					 //	print_r($lap);
					 	foreach($lap as $rows)
					 	{
					 		$data['username_nonp2tl'] = $rows['USERNAME'];
					 		$data['petugas1_nonp2tl'] = $rows['PETUGAS1_NON_P2TL'];
					 		$data['petugas2_nonp2tl'] = $rows['PETUGAS2_NON_P2TL'];
					 		$data['kesimpulan_nonp2tl'] = $rows['KESIMPULAN_NON_P2TL'];
					 	}
					 }
					 if($nomor_status>=6)
					 {
					 	$lap=$this->modelp->select_validasi_nonp2tl($id_lap);
					 //	print_r($lap);
					 	foreach($lap as $rows)
					 	{
					 		 $data['tanggal_validasi_nonp2tl']= $rows['TANGGAL_VALIDASI_NON_PPTL'];
							 $data['keterangan_validasi_nonp2tl']= $rows['KET_NON_PPTL'];
							 $data['inputer_validasi_nonp2tl']= $rows['USERNAME'];
					 	}
					 }
					 $this->load->view('pages/detail_lap_non',$data);
				 }
			}
			else
				redirect('pages/dashboard');
		}
		else
			redirect('pages/home');
	}

	public function komentar()
	{
		if($this->session->userdata('username'))
		{
			$id_lap = $this->uri->segment(3);
			if($this->session->userdata('hak_akses') >=1)
			{
				$data['komentar'] = $this->modelp->select_komentar($id_lap);
				$this->load->view('pages/komentar',$data);
			}
			else
				redirect('pages/dashboard');
		}
		else
			redirect('pages/home');
	}

	public function komentarajax()
	{
		if($_POST)
		{
			$id_lap = $this->input->post('id_lap');
			$comment = $_POST['comment'];
			$date = date("Y-m-d H:i:s");
			$username = $this->session->userdata('username');
			$this->modelp->insert_komentar($id_lap,$username,$comment,$date);
		}	
		echo "<li class=\"left clearfix\">";
			echo "<span class=\"chat-img pull-left\">";
				echo "<img src=\"http://placehold.it/50/55C1E7/fff\" alt=\"User Avatar\" class=\"img-circle\" />";
			echo "</span>";
			echo "<div class=\"chat-body clearfix\">";
				echo "<div class=\"header\">";
					echo "<strong class=\"primary-font\">&nbsp ".$username."</strong> ";
					echo "<small class=\"pull-right text-muted\">";
						echo "<i class=\"fa fa-clock-o fa-fw\"></i> ".$date."";
					echo "</small>";
				echo "</div>";
				echo "<p>";
					
					echo $comment;
				echo "</p>";
			echo "</div>";
		echo "</li>";
	
	}

	public function p2tlDitolak()
	{
		if($this->session->userdata('username'))
		{
			if($this->session->userdata('hak_akses') >=2)
			{
				$tanggal_sekarang =date("Y-m-d H:i:s");
				$id_lap=$this->input->post('id_lap');
				$keterangan="Tidak valid";
				$validasi=0;
				$username=$this->session->userdata('username');
				$this->modelp->insertvalidasisph($username,$id_lap,$keterangan,$validasi,$tanggal_sekarang);
				redirect('pages/rekap_validasi_sph');
			}
			else
				redirect('pages/dashboard');
		}
		else
			redirect('pages/home');
	}
	public function p2tlValid()
	{
		if($this->session->userdata('username'))
		{
			if($this->session->userdata('hak_akses') >=2)
			{
				$tanggal_sekarang =date("Y-m-d H:i:s");
				$id_lap=$this->input->post('id_lap');
				$keterangan="Valid";
				$validasi=1;
				$username=$this->session->userdata('username');
				$this->modelp->insertvalidasisph($username,$id_lap,$keterangan,$validasi,$tanggal_sekarang);
				redirect('pages/rekap_validasi_sph');
			}
			else
				redirect('pages/dashboard');
		}
		else
			redirect('pages/home');
	}
	
	function test()
	{
		echo $this->session->userdata('username');
	}
	function sess_session()
	{
		$is_ajax = $_REQUEST['is_ajax'];
		if(isset($is_ajax) && $is_ajax)
		{
			$usn = $_REQUEST['username'];
			$pswd = $_REQUEST['password'];

			//$usn = "helpdesk.tikd";
			//$pswd = "pln@123ti";
			error_reporting(0);
			
				/* ### Active Directory Address and usn/pwd ### */
			$ad_server ="10.3.0.30";
			$ad_dn	= "DC=jaya,DC=corp,DC=pln,DC=co,DC=id";		
			$ad_usn_postfix	= "@jaya.corp.pln.co.id";

			//Connect to Active Directory
			$ad = ldap_connect($ad_server);
			ldap_set_option($ad, LDAP_OPT_PROTOCOL_VERSION, 3);
			ldap_set_option($ad, LDAP_OPT_REFERRALS, 0);
	
			$adusn = $usn.$ad_usn_postfix; $adpwd = $pswd;
	
			$bind = ldap_bind($ad, $adusn, $adpwd);
			$ldapErr = ldap_errno($ad);
			
			if ($ldapErr==0) // cek domain controller success
			{  

				//Ambil data nama dari active directory
				$ldap_search_param = "(&"."(sAMAccountName=$usn)".")";
				$ldap_search_return = array('displayname','employeenumber','mail','company','department','title');
				
				$search = ldap_search($ad, $ad_dn, $ldap_search_param, $ldap_search_return);
				$entries = ldap_get_entries($ad, $search);
				
				$AD_displayName = substr(str_replace("'","\'",$entries[0]['displayname'][0]),0,150);
				$AD_employeeNumber = substr(str_replace("'","\'",$entries[0]['employeenumber'][0]),0,14);
				$AD_mail = substr(str_replace("'","\'",$entries[0]['mail'][0]),0,150);
				$AD_company = substr(str_replace("'","\'",$entries[0]['company'][0]),0,150);
				$AD_department = substr(str_replace("'","\'",$entries[0]['department'][0]),0,150);
				$AD_title = substr(str_replace("'","\'",$entries[0]['title'][0]),0,150);
				//echo "as".$AD_mail;
				//echo "display name : ".$AD_displayName."<br>"."ad_employee number : ".$AD_employeeNumber."<br>"."ad_email : ".$AD_mail."<br>"."ad_company : ".$AD_company."<br>"."ad_departement : ".$AD_department."<br>"."ad_title : ".$AD_title;
				$user = $this->modelt->selectUser($usn);

				foreach($user as $rows)
				{
					$bol= 0;
					if($rows['USERNAME'] == $usn)
					{
						$this->modelt->updateUser($usn,$AD_displayName,$AD_mail,$AD_employeeNumber,md5($pswd));
						$user = $this->modelt->selectUser($usn);
						foreach($user as $rows)
						{
							$this->session->set_userdata(array(
		                            'username'       => $rows['USERNAME'],
		                            'kdarea'      => $rows['KDAREA'],
		                            'nama_user'	  => $rows['NAMA_USER'],
		                            'hak_akses'   => $rows['HAK_AKSES'],
		        	          ));
							$bol=1;
							echo "success";
						}
					}
				}
				if($bol==0)
				{
					echo "gagal";
				}
			}
			else			{
				$user = $this->modelt->selectUser($usn);
				$bol = 0;
				foreach ($user as $rows)				{
					if($rows['USERNAME'] == $usn)					{
						if($rows['PASSWORD_USER'] == md5($pswd))						{
							$this->session->set_userdata(array(
		                            'username'       => $rows['USERNAME'],
		                            'kdarea'      => $rows['KDAREA'],
		                            'nama_user'	  => $rows['NAMA_USER'],
		                            'hak_akses'   => $rows['HAK_AKSES'],
		        	          ));
							$bol=1;
							echo "success";
						}
					}
				}
				if($bol==0)				{
					echo "gagal";
				}
			}
		}
	}
}
