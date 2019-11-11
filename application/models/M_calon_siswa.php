<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_calon_siswa extends CI_Model {

	public function tampil()
	{
		return $this->db->get('calon_siswa');
	}

	public function save($data)
	{
		$this->db->insert('calon_siswa', $data);
	}

	public function getnik($no_pendaftaran)
	{
		$param = array('no_pendaftaran' =>$no_pendaftaran);
		return $this->db->get_where('calon_siswa', $param);
	}

	public function update($data,$no_pendaftaran)
	{
		$this->db->where('no_pendaftaran', $no_pendaftaran);
		$this->db->update('calon_siswa', $data);
	}
}