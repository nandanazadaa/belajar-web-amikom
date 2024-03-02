<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form', 'url'));
		$this->load->model('M_mahasiswa');
	}

	public function index()
	{
		$data['mahasiswa'] = $this->db->get_where('user', ['nim' => $this->session->userdata('nim')])->row_array();
		$data['name'] = $this->db->get_where('user', ['nama' => $this->session->userdata('nama')])->row_array();
		$data['profil'] = $this->db->get('add_foto_profil')->row_array();

		$this->load->view('Template/navbar', $data);
		$this->load->view('Template/sidebar', $data);
		$this->load->view('User/user', $data);
		$this->load->view('Template/footer', $data);
	}

	public function foto_profil()
	{
		$data['mahasiswa'] = $this->db->get_where('user', ['nim' => $this->session->userdata('nim')])->row_array();
		$data['profil'] = $this->db->get('add_foto_profil')->row_array();

		$this->load->view('Template/navbar', $data);
		$this->load->view('Template/sidebar', $data);
		$this->load->view('User/foto_profil', $data);
		$this->load->view('Template/footer', $data);
	}

	public function addFotoProfil()
	{
		$this->load->helper('file', 'form');

		$config['upload_path']          =  './assets/images/';
		$config['allowed_types']        = 'jpg|png|jpeg';
		$config['max_size']             = 10000;

		$this->load->library('upload', $config);

		$this->upload->initialize($config);

		$this->upload->do_upload('images');
		$upload_foto = $this->upload->data('file_name');

		$add_files = array(
			'foto_profil' => $upload_foto,
		);
		$this->db->update('add_foto_profil', $add_files);
		$this->session->set_flashdata('file_update', '<div class="alert alert-success" role="alert"> Profil berhasil diupload! </div>');
		redirect('User/foto_profil');
	}

	public function panduan()
	{
		$data['mahasiswa'] = $this->db->get_where('user', ['nim' => $this->session->userdata('nim')])->row_array();
		$data['profil'] = $this->db->get('add_foto_profil')->row_array();

		$this->load->view('Template/navbar', $data);
		$this->load->view('Template/sidebar', $data);
		$this->load->view('User/panduan_apk_fitur', $data);
		$this->load->view('Template/footer', $data);
	}

	public function email()
	{
		$data['mahasiswa'] = $this->db->get_where('user', ['nim' => $this->session->userdata('nim')])->row_array();
		$data['profil'] = $this->db->get('add_foto_profil')->row_array();

		$this->load->view('Template/navbar', $data);
		$this->load->view('Template/sidebar', $data);
		$this->load->view('User/email', $data);
		$this->load->view('Template/footer', $data);
	}

	public function info_kuliah()
	{
		$data['mahasiswa'] = $this->db->get_where('user', ['nim' => $this->session->userdata('nim')])->row_array();
		$data['profil'] = $this->db->get('add_foto_profil')->row_array();

		$this->load->view('Template/navbar', $data);
		$this->load->view('Template/sidebar', $data);
		$this->load->view('User/info_kuliah', $data);
		$this->load->view('Template/footer', $data);
	}

	public function info_krs()
	{
		$data['mahasiswa'] = $this->db->get_where('user', ['nim' => $this->session->userdata('nim')])->row_array();
		$data['krs_info'] = $this->db->get('add_info_krs')->result_array();
		$data['profil'] = $this->db->get('add_foto_profil')->row_array();


		$this->load->view('Template/navbar', $data);
		$this->load->view('Template/sidebar', $data);
		$this->load->view('User/info_krs', $data);
		$this->load->view('Template/footer', $data);
	}

	public function viewinfoKRS()
	{
		$data['mahasiswa'] = $this->db->get_where('user', ['nim' => $this->session->userdata('nim')])->row_array();
		$data['krs_info'] = $this->db->get('add_info_krs')->result_array();
		$data['profil'] = $this->db->get('add_foto_profil')->row_array();

		$this->load->view('Template/navbar', $data);
		$this->load->view('Template/sidebar', $data);
		$this->load->view('User/add_info_krs', $data);
		$this->load->view('Template/footer', $data);
	}

	public function add_infoKRS()
	{
		$data = [
			'nama_prodi' => htmlspecialchars($this->input->post('nama_prodi', true)),
			'angkatan' => htmlspecialchars($this->input->post('angkatan', true)),
			'tgl_mulai' => htmlspecialchars($this->input->post('tgl_mulai', true)),
			'tgl_selesai' => htmlspecialchars($this->input->post('tgl_selesai', true)),
		];

		$this->session->set_flashdata('users', '<div class="alert alert-success" role="alert"> Data berhasil ditambahkan </div>');
		$this->db->insert('add_info_krs', $data);
		redirect('User/viewinfoKRS');
	}

	public function krs_info_pengambilan()
	{
		$data['mahasiswa'] = $this->db->get_where('user', ['nim' => $this->session->userdata('nim')])->row_array();
		$data['profil'] = $this->db->get('add_foto_profil')->row_array();

		$this->load->view('Template/navbar', $data);
		$this->load->view('Template/sidebar', $data);
		$this->load->view('User/pengambilan_krs', $data);
		$this->load->view('Template/footer', $data);
	}

	public function laporan_pdf(){

		$data['mahasiswa'] = $this->db->get_where('user', ['nim' => $this->session->userdata('nim')])->row_array();
		$data['profil'] = $this->db->get('add_foto_profil')->row_array();
		$data['krs'] = $this->db->get('cetak_krs')->result_array();
	
		$this->load->library('pdf');

		$this->pdf->setPaper('A4', 'potrait');
		$this->pdf->filename = "KRS-Mahasiswa.pdf";
		$this->pdf->load_view('User/laporan_pdf', $data);
	
	}

	public function add_data()
	{
		$data = [
			'kode' => htmlspecialchars($this->input->post('kode', true)),
			'key_mhs' => htmlspecialchars($this->input->post('key_mhs', true)),
			'matkul' => htmlspecialchars($this->input->post('matkul', true)),
			'sks' => htmlspecialchars($this->input->post('sks', true)),
			'tgl_mid' => htmlspecialchars($this->input->post('tgl_mid', true)),
			'paraf' => htmlspecialchars($this->input->post('paraf', true)),
			'tgl_uas' => htmlspecialchars($this->input->post('tgl_uas', true)),
		];

		$this->session->set_flashdata('users', '<div class="alert alert-success" role="alert"> Data berhasil ditambahkan </div>');
		$this->db->insert('cetak_krs', $data);
		redirect('User/viewAdd_Data');
	}

	public function viewAdd_Data()
	{
		$data['mahasiswa'] = $this->db->get_where('user', ['nim' => $this->session->userdata('nim')])->row_array();
		$data['krs_info'] = $this->db->get('add_info_krs')->result_array();
		$data['profil'] = $this->db->get('add_foto_profil')->row_array();

		$this->load->view('Template/navbar', $data);
		$this->load->view('Template/sidebar', $data);
		$this->load->view('User/add_krs', $data);
		$this->load->view('Template/footer', $data);
	}

	public function materiNilai()
	{
		$data['mahasiswa'] = $this->db->get_where('user', ['nim' => $this->session->userdata('nim')])->row_array();
		$data['profil'] = $this->db->get('add_foto_profil')->row_array();

		$this->load->view('Template/navbar', $data);
		$this->load->view('Template/sidebar', $data);
		$this->load->view('User/materi_nilai', $data);
		$this->load->view('Template/footer', $data);
	}
}
