<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kasir extends CI_Controller {

		public function __construct()
	{
		parent::__construct();
		$this->load->model('M_user','msr');
	}

	public function index()
	{
		if($this->session->userdata('level')){
		$data['user']= $this->msr->ambil_user();
		$data['konten']='v_kasir';
		$this->load->view('template', $data);		
	}else{
			redirect('Login','refresh');

	}
		
	}
//Tambah data 
//akan menjalankan M_user di model dan method tamah 
//jika sudah di jalankankan akan redirect atau menampilkan kasir 
	public function tambah(){

		$this->msr->tambah();
		redirect('Kasir','refresh');

	}

	public function tampil_ubah_user($kode_user){
		$data =  $this->msr->tampil_ubah_user($kode_user);
		echo json_encode($data);

	}

//Akan menjalankan M_user di model dibagaian method update 
	public function update(){
			if($this->msr->update()){

					$this->session->set_flashdata('pesan', 'Sukses ubah data ');
			}else{

				$this->session->set_flashdata('pesan', 'Gagal ubah data ');
			}
			redirect('Kasir','refresh');
	}


//akan menghapus user kasir berdasarkan kode_user 
	public function hapus($kode_user){
	if($this->msr->hapus($kode_user)){

		$this->session->set_flashdata('pesan', 'Anda berhasil menghapus kasir');
			redirect('Kasir','refresh');

	}else{

		$this->session->set_flashdata('pesan', 'Anda gagal menghapus kasir');
			redirect('Kasir','refresh');
	}
}
}

/* End of file Kasir.php */
/* Location: ./application/controllers/Kasir.php */

?>