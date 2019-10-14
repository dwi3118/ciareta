<?php
class Siswa extends CI_Controller{

	public function index()
	{
		echo "tidak memanggil file lain";
	}

	public function datadiri()
	{
		echo "Tampil Data Diri";
	}

	public function input()
	{
		$this->load->view('v_input');
	}

	public function proses()
	{
		$nama=$this->input->post('nama');
		$alamat=$this->input->post('alamat');
		$nohp=$this->input->post('nohp');
		echo "<pre>
		Nama   : $nama
		Alamat : $alamat
		No HP  : $nohp  
		</pre> ";
	}
}