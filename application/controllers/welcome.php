<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
		$this->load->view('test/index');
		//$this->load->view('welcome_message');
		//$this->load->model('TestModel','modelt');
/*		$data['result']=$this->modelt->select_data();
		$data['result2'] = $this->modelt->select_data2();
		foreach($data['result'] as $rows){
			echo $rows['NAMA_PENYULANG']."<br>";
		}
		foreach($data['result2'] as $rows){
			echo $rows['KDAREA']."<br>";
		}*/
	}
	public function login()
	{
		if('IS_AJAX'){
			echo "<script>alert('masuk')</script>";
		}
		$user=$this->input->post('user');
		$pass=$this->input->post('password');
		echo $user;
		/*if($user=="admin" && $pass="qwerty")
		{
			$this->session->set_userdata(array(
	                            'user'       => $user,
	                            'pass'      => $pass,
	        	          ));
			//echo $this->session->userdata('user');
			redirect('welcome/page1');
		}
		else
			redirect('welcome/index'); LOGIN*/

	}
	public function test()
	{
		$this->load->view('test/test');
	}
	public function page1()
	{
		if($this->session->userdata('user'))
		{
			$this->load->view('test/page1');
		}
		else
		{
			redirect('welcome/index');
		}
	}
	public function page2()
	{
		if($this->session->userdata('user'))
		{
			$this->load->view('test/page2');
		}
		else
		{
			redirect('welcome/index');
		}
	}
	public function page3()
	{
		if($this->session->userdata('user'))
		{
			$this->load->view('test/page3');
		}
		else
		{
			redirect('welcome/index');
		}
	}

	public function coba()
	{
		$this->load->view("test/coba");
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
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */