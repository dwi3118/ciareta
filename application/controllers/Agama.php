<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Agama extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_agama'); //memanggil Model Jurusan
	}

	public function index() //menampilkan data jurusan 
	{
		$data['judul']="Tampil Data Agama";
		$data['tampil']=$this->M_agama->tampil()->result();// ambil data dari model
		$this->load->view('Agama/tampil', $data, FALSE);
	}

	public function input() // menambah data
	{
		$data['judul']="Tambah Agama Baru";
		$this->load->view('agama/input', $data, FALSE);
	}

	public function save() // menyimpan data
	{
		$kode=$this->input->post('id_agama');
		$nama=$this->input->post('nama_agama');

		$data=array(
			'id_agama'=>$kode,
			'nama_agama'=>$nama
		);

		$this->M_agama->save($data);
		redirect('agama','refresh');
	}

	public function edit() // meng edit data yang dipilih
	{
		$id=$this->uri->segment(3);
		$data['judul']="edit_data";
		$data['edit']=$this->M_agama->getid($id)
		->row_array();
		$this->load->view('agama/edit', $data, FALSE);
	}

	public function update()
	{
		$kode=$this->input->post('id_agama');
		$kode=$this->input->post('nama_agama');

		$data=array(
			'nama_agama'=>$nama
		);

		$this->M_agama->update($data,$kode);
		redirect('agama','refresh');
	}

	public function delete()
	{
		$id=$this->uri->segment(3);
		$this->db->where('id_agama', $id);
		$this->db->delete('agama');
		redirect('agama','refresh');
	}

}
