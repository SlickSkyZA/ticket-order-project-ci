<?php 

class Login extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('Login_model');

	}

	function index(){
		$this->load->view('index.php');
	}

	function aksi_login(){
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		
		 if ($this->form_validation->run() == FALSE) {
             redirect(base_url('index.php'));
        }else {
		$where = array(
			'username' => $username,
			'password' =>$password
			);
		$tmp = $this->Login_model->cek_login("users",$where);
		$user = $tmp->row();
		$cek = $tmp->num_rows();
		if($cek > 0){

			$data_session = array(
				'nama' => $username,
				'status' => "login",

				);

			$this->session->set_userdata($data_session);

			if ($user->Role=='admin'){

			redirect(base_url('index.php/Admin/index'));
				//$this->load->model('Tampil_model');
				//$this->load->view('Tampil_admin');
				//return true;
				//$this->load->models('Tampil_model');
			    // $this->load->view('layout/header_login');
        		// $this->load->view('Tampil_admin');
			}

			redirect(base_url('index.php/Home/tambah'));

		} else{
			echo "Username dan pass salah";
    		}
    	}
	}

	function signup() {
		$this->load->view('layout/header_signup');
	        $this->load->view('Signup');
	        $this->load->view('layout/footer_tampildata');
		}

	function aksi_signup(){
		$this->form_validation->set_rules('nama', 'nama', 'required');
        $this->form_validation->set_rules('username', 'username', 'required');
        $this->form_validation->set_rules('email', 'email', 'required');
        $this->form_validation->set_rules('password', 'password', 'required');
        $nama=$this->input->post('nama');
		$username = $this->input->post('username');
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('layout/header_signup');
            $this->load->view('alert');
            $this->load->view('Signup');
	        $this->load->view('layout/footer_tampildata');           
        } else {

		$where=array(
			'nama'=>$nama,
			'username'=>$username,
			'email'=>$email,
			'password'=>$password,
			'Role'=>'users',
		);
        $this->Login_model->tambah_akun($where,'users');
        redirect(base_url().'index.php');
        
        }
    }

	public function Logout() {
        $this->session->sess_destroy();
        redirect(base_url("index.php"));
        echo '<script language="javascript">alert("Anda berhasil Logout!"); document.location="index.php";</script>';
    }


}
