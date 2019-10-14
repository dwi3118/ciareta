<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_dosen extends CI_Model {

	public function tampil()
	{
		return $this->db->get('dosen');
	}

	public function save($data)
	{
		$this->db->insert('dosen', $data);
	}

	public function getid($id)
	{
		$param = array('kode_dosen' =>$id);
		return $this->db->get_where('dosen', $param);
	}

	public function update($data,$kode)
	{
		$this->db->where('kode_dosen', $kode);
		$this->db->update('dosen', $data);
	}
}