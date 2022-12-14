
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_kategori','mkt');
	}

	public function index()
	{
	if($this->session->userdata('level')){
		$data['kategori']= $this->mkt->ambilkategori();
		$data['konten']='v_kategori';
		$this->load->view('template', $data);
	}else{
			redirect('Login','Refresh');
	}
		
	}

	public function tambah(){

		$this->mkt->tambah();
		redirect('Kategori','Refresh');
	}


	public function tampil_ubah_kategori($kode_kategori){

		$data =  $this->mkt->tampil_ubah_kategori($kode_kategori);
		echo json_encode($data);

	}


	public function update(){
			if($this->mkt->update()){
					$this->session->set_flashdata('Pesan', 'Sukses Mengubah Data ');
			}else{

				$this->session->set_flashdata('Pesan', 'Gagal Mengubah Data ');
			}
			redirect('Kategori','Refresh');
				

	}


	public function hapus($kode_kategori){
	if($this->mkt->hapus($kode_kategori)){

		$this->session->set_flashdata('Pesan', 'Berhasil Menghapus Data Kategori');
			redirect('Kategori','refresh');

	}else{

		$this->session->set_flashdata('Pesan', 'Gagal Menghapus Data Kategori');
			redirect('Kategori','Refresh');

	}
}
}

/* End of file Kategori.php */
/* Location: ./application/controllers/Kategori.php */

?>