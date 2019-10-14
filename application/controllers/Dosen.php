<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dosen extends CI_Controller{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_dosen');
	}

	public function index()
	{
		$data['judl']="Tampil Data Dosen";
		$data['tampil']=$this->M_dosen->tampil()->result();
		$this->load->view('dosen/tampil', $data, FALSE);
	}

	public function input()
	{
		$data['judul']="Tambah Dosen Baru";
		$this->load->view('dosen/input', $data, FALSE);	
	}

	public function save()
	{
		$NIK=$this->input->post('nik');
		$kode=$this->input->post('kode_dosen');
		$nama=$this->input->post('nama_dosen');
		$jk=$this->input->post('jk');
		$email=$this->input->post('email');
		$status=$this->input->post('status');

		$data=array(
			'nik'=>$NIK,
			'kode_dosen'=>$kode,
			'nama_dosen'=>$nama,
			'jk'=>$jk,
			'email'=>$email,
			'status'=>$status
		);

		$this->M_dosen->save($data);
		redirect('dosen','refresh');
	}

	public function edit()
	{
		$id=$this->uri->segment(3);
		$data['judul']="edit_data";
		$data['edit']=$this->M_dosen->getid($id)->row_array();
		$this->load->view('dosen/edit', $data, FALSE);
	}

	public function update()
	{
		$kode=$this->input->post('nik');
		$kode=$this->input->post('kode_dosen');
		$kode=$this->input->post('nama_dosen');
		$kode=$this->input->post('jk');
		$kode=$this->input->post('email');
		$kode=$this->input->post('status');

		$data=array(
			'nama_dosen'=>$nama
		);

		$this->M_dosen->update($data,$kode);
		redirect('dosen','refresh');
	}
	
	public function delete()
	{
		$id=$this->uri->segment(3);
		$this->db->where('kode_dosen', $id);
		redirect('dosen','refresh');
	}
}