<?php
	class Admin extends CI_Controller { 
		function __construct() {
			parent::__construct();
			$this->load->model('Admin_model');
			$this->load->helper('url');
		}
	

		function index() {
			$data['tiket'] = $this->Admin_model->tampil_data()->result();

			$this->load->view('layout/header_login');
			$this->load->view('Tampil_admin', $data);
		}

	
		function edit($id_tiket) {
			$where = array('id_tiket' => $id_tiket);
			$data['tiket'] = $this->Admin_model->edit_data($where,'tiket')->result();

			$this->load->view('layout/header_login');
			$this->load->view('Edit_admin', $data);
		}

		function edit_tiket() {
			$id_tiket = $this->input->post('id_tiket');
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

			$where = array ('id_tiket' => $id_tiket);
			$this->Admin_model->update_data($where, $data,'tiket');
			redirect('Admin/index');
		}

		function hapus($id_tiket) {
			$where = array('id_tiket' => $id_tiket);
			$this->Admin_model->hapus_data($where,'tiket');
			redirect('Admin/index');
		}
	}
?>