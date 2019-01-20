<?php if(!defined('BASEPATH')) exit('No direct access allowed');

class Home extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('Login_model'); // Berfungsi untuk me-load Artikel_model.php
		$this->load->model('Tampil_model'); // Berfungsi untuk me-load Artikel_model.php
	}


	function index(){
        $this->load->view('layout/head');
        $this->load->view('layout/header');
        $this->load->view('layout/konten');
        $this->load->view('layout/footer');
    }

    
	function tiket(){
			$this->load->view('layout/header_login');
		$data['tiket'] = $this->Tampil_model->tampil_dataterakhir()->row();
		$this->load->view('Tampil_dataterakhir', $data);
		$this->load->view('layout/footer_tampildata');
	}


	function tambah() {
		//if($this->session->userdata("nama")=="admin"){
		//	$this->load->models('Tampil_model');
          //	$this->load->view('layout/header_login');
          	//$this->load->view('Tampil_admin');
        //}else{

	        $this->load->view('layout/header_login');
	        $this->load->view('Order');
			$this->load->view('layout/footer_tampildata');
		//}
	}

	function tampil_tiket() {
		$data['tiket'] = $this->Login_model->tampil_data()->result();
			
	        $this->load->view('layout/header_login');
	        $this->load->view('Tampil_data',$data);
		}

	function tambah_tiket() {
			$nama_pemesan = $this->input->post('nama_pemesan');
			$tanggal_pesan = $this->input->post('tanggal_pesan');
			$judul_film = $this->input->post('judul_film');
			$tempat_duduk1 = $this->input->post('tempat_duduk1');
			$tempat_duduk2 = $this->input->post('tempat_duduk2');
			$tanggal_operasi = $this->input->post('tanggal_operasi');
			$waktu_operasi = $this->input->post('waktu_operasi');

			$data = array(
				'nama_pemesan' => $nama_pemesan,
				'tanggal_pesan' => $tanggal_pesan,
				'judul_film' => $judul_film,
					'tempat_duduk1' => $tempat_duduk1,
				'tempat_duduk2' => $tempat_duduk2,
				'tanggal_operasi' => $tanggal_operasi,
				'waktu_operasi' => $waktu_operasi
			);

			$this->Tampil_model->input_data($data,'tiket');
			redirect(base_url("Home/tiket"));
	}

	
}
