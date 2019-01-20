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
		$cek = $this->Login_model->cek_login("users",$where)->num_rows();
		if($cek > 0){

			$data_session = array(
				'nama' => $username,
				'status' => "login"
				);

			$this->session->set_userdata($data_session);
			if ($cek->Role=='admin'){

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
		}

	function aksi_signup(){
		$this->form_validation->set_rules('nama', 'nama', 'required');
        $this->form_validation->set_rules('username', 'username', 'required|min_length[5]|max_length[10]|is_unique[users.username]',
        	array(
                'required'      => 'You have not provided %s.',
                'is_unique'     => 'This %s already exists.'
        	)
		);
		$this->form_validation->set_message('min_length', 'username must have at least 5 characters.');
		$this->form_validation->set_message('max_length', 'username must have max 10 characters.');
        $this->form_validation->set_rules('email', 'email', 'required|valid_email|is_unique[users.email]');
        $this->form_validation->set_rules('password', 'password', 'required|min_length[5]');
        $nama=$this->input->post('nama');
		$username = $this->input->post('username');
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('layout/header_signup');
            $this->load->view('alert');
            $this->load->view('Signup');
           
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
		$cek = $this->Login_model->cek_login("users",$where)->num_rows();
		if($cek > 0){

			$data_session = array(
				'nama' => $username,
				'status' => "login"
				);

			$this->session->set_userdata($data_session);
			if ($cek->Role=='admin'){

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
		}

	function aksi_signup(){
		$this->form_validation->set_rules('nama', 'nama', 'required');
        $this->form_validation->set_rules('username', 'username', 'required|min_length[5]|max_length[10]|is_unique[users.username]',
        	array(
                'required'      => 'You have not provided %s.',
                'is_unique'     => 'This %s already exists.'
        	)
		);
		$this->form_validation->set_message('min_length', 'username must have at least 5 characters.');
		$this->form_validation->set_message('max_length', 'username must have max 10 characters.');
        $this->form_validation->set_rules('email', 'email', 'required|valid_email|is_unique[users.email]');
        $this->form_validation->set_rules('password', 'password', 'required|min_length[5]');
        $nama=$this->input->post('nama');
		$username = $this->input->post('username');
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('layout/header_signup');
            $this->load->view('alert');
            $this->load->view('Signup');
           
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
