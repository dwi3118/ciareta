<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Calon_Siswa extends CI_Controller{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_jurusan');
		$this->load->model('M_agama');
	}

	public function index()
	{
		$data['judul']="tampil data Calon_Siswa";
		
	}

	public function input()
	{
		$data['judul']="input Calon_Siswa";
		$data['jurusan']=$this->M_jurusan->tampil()->result();
		$data['agama']=$this->M_agama->tampil()->result();
		$this->load->view('calon/input',$data,FALSE);
	}

	public function save()
	{
		$data=array(
			'no_pendaftaran'=>$this->input->post('no_pendaftaran')
			'nama'=>$this->input->post('nama')
			'tempat_lahir'=>$this->input->post('tempat_lahir')
			'jk'=>$this->input->post('jk')
			'alamat'=>$this->input->post('alamat')
			'no_telp'=>$this->input->post('no_telp')
			'id_agama'=>$this->input->post('id_agama')
			'email'=>$this->inputa->post('email')
			'id_jurusan'=>$this->input->post('id_jurusan')
		);

		$this->M_calon_siswa->save($data);
		redirect('calon_siswa','refresh');
	}

	public function edit()
	{
		$no_pendaftaran=$this->uri->segment(3);
		$data['judul']="edit_data";
		$data['edit']=$this->M_calon_siswa->getnik($no_pendaftaran)->row_array();
		$this->load->view('calon_siswa/edit',$data, FALSE);
	}

	public function update()
	{
		$data=array(
			'no_pendaftaran'=>$this->input->post('no_pendaftaran')
			'nama'=>$this->input->post('nama')
			'tempat_lahir'=>$this->input->post('tempat_lahir')
			'jk'=>$this->input->post('jk')
			'alamat'=>$this->input->post('alamat')
			'no_telp'=>$this->input->post('no_telp')
			'id_agama'=>$this->input->post('id_agama')
			'email'=>$this->inputa->post('email')
			'id_jurusan'=>$this->input->post('id_jurusan')
		);

		$this->M_calon_siswa->update($data,$no_pendaftaran);
		redirect('calon_siswa','refresh');
	}

	public function delete()
	{
		$no_pendaftaran=$this->uri->segment(3);
		$this->db->where('no_pendaftaran', $no_pendaftaran);
		$this->db->delete('calon_siswa');
		redirect('calon_siswa','refresh');
	}
}