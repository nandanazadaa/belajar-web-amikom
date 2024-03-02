<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_mahasiswa extends CI_Model
{
    public function tampil_data()
    {
     $this->db->get('cetak_krs');
    }

    public function pangambilanKRS()
    {
        $data['krs_info'] = $this->db->get('add_info_krs')->result_array();
    }
}