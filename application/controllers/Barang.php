<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_barang','mbk');
	}

	public function index()
	{
		if($this->session->userdata('level')){

			$data['kategori']=$this->mbk->ambilkategori();
			$data['barang']=$this->mbk->ambilbarang();
			$data['konten']='v_barang';
			$this->load->view('template',$data);
		}else{
			redirect('Login','refresh');
		}
	}


	public function tambah(){
		$this->form_validation->set_rules('nama_barang', 'nama_barang', 'trim|required');
		// $this->form_validation->set_rules('size', 'size', 'trim|required');
		$this->form_validation->set_rules('kategori', 'kategori', 'trim|required');
		$this->form_validation->set_rules('harga', 'harga', 'trim|required');
		// $this->form_validation->set_rules('merk', 'merk', 'trim|required');
		$this->form_validation->set_rules('stok', 'stok', 'trim|required');

		if ($this->form_validation->run() == TRUE) {

				if($this->mbk->tambah('')){
					$this->session->set_flashdata('Pesan', 'Anda Berhasil Menambah Barang');
				}else{
					$this->session->set_flashdata('Pesan', 'Anda Gagal Menambah Barang');
				}
				redirect('barang','refresh');
		} else {
			$this->session->set_flashdata('pesan', validation_errors());
			redirect('barang','refresh');
		}

	}

	public function tampil_ubah_barang($kode_barang){
		$data =  $this->mbk->tampil_ubah_barang($kode_barang);
		echo json_encode($data);

	}

public function update(){
			if($this->mbk->update()){
					$this->session->set_flashdata('Pesan', 'Sukses Mengubah Data ');
			}else{

				$this->session->set_flashdata('Pesan', 'Gagal Mengubah Data ');
			}
			redirect('barang','refresh');
	}
	
	public function hapus($kode_barang){
		if($this->mbk->hapus($kode_barang)){

			$this->session->set_flashdata('Pesan', 'Anda Berhasil Menghapus Data Barang');
			redirect('barang','refresh');

		}else{

			$this->session->set_flashdata('Pesan', 'Anda Gagal Menghapus Data Barang');
			redirect('barang','refresh');
		}
	}
}

/* End of file barang.php */
/* Location: ./application/controllers/barang.php */


?>
