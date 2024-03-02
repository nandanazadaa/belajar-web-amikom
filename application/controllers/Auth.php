<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {



	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
	}

	public function index()
	{
		$data['title'] = 'Login Page';

		$this->form_validation->set_rules('nim','Nim','required|trim');
		$this->form_validation->set_rules('password','Password','required|trim');
		if($this->form_validation->run($this)==false){
			$this->load->view('Auth/login',$data);
		}
		else{
			$this->_login();
		}
	}

	private function _login()
    {
        $user = $this->input->post('nim');
        $password = $this->input->post('password');

        $user = $this->db->get_where('user', ['nim' => $user])->row_array();

        //usernya ada
        if ($user) {
            //jika usernya aktif
            if ($user['is_active'] == 1) {
                //cek password
                if (password_verify($password, $user['password'])) {
                    $data = [
                        'nim' => $user['nim'],
                        'role_id' => $user['role_id']
                    ];
                    $this->session->set_userdata($data);
                    redirect('User');

                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Wrong password!</div>');
                    redirect('Auth');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">This Username has not been activated!</div>');
                redirect('Auth');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Username is not registered!</div>');
            redirect('Auth');
        }
    }

	public function registrasi()
	{
		$this->form_validation->set_rules('nama', 'Nama', 'required|trim');
		$this->form_validation->set_rules('nim', 'Nim', 'required|trim');
		$this->form_validation->set_rules('password', 'Password', 'required|trim');

		if ($this->form_validation->run() == false) {

			$data['title'] = 'Register Hotel';
			$this->load->view('Auth/registrasi', $data);
		} else {

			$data = [
				'nama' => htmlspecialchars($this->input->post('nama', true)),
				'nim' => htmlspecialchars($this->input->post('nim', true)),
				'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
				'role_id' => 1,
                'is_active' => 1,
			];

			$this->db->insert('user', $data);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
			Congratulation your account has been created !
		  	</div>');
			redirect('Auth');
		}
	}
	
	public function Logout()
	{
		$this->session->unset_userdata('nim');
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
		Anda Berhasil Logout !
		  </div>');
		redirect('Auth');

	}
}
