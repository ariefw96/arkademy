<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {



	public function __construct(){
		parent::__construct();
		$this->load->model('barang_model');
	}

	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function tambah_data()
	{
		$this->form_validation->set_rules('nama_produk','Nama Produk','required'); //rules
		if($this->form_validation->run() == FALSE){ //ngecek
			$this->load->view('tambah_data');
		}else{
			$nama_produk = $this->input->post('nama_produk');
			$keterangan = $this->input->post('keterangan');
			$harga = $this->input->post('harga');
			$jumlah = $this->input->post('jumlah');

			$barang = array(
				'nama_produk' => $nama_produk,
				'keterangan' => $keterangan,
				'harga' => $harga,
				'jumlah' => $jumlah
			);

			$this->barang_model->tambah_barang($barang);
			redirect(base_url('tampil_data'));
			
		}
	}

	public function tampil_data(){
		$data['barang'] = $this->barang_model->tampil_barang();
		$this->load->view('tampil_data', $data);
	}

	public function update_data($id)
	{
		$this->form_validation->set_rules('nama_produk','Nama','required');
		if($this->form_validation->run() == FALSE){
			$data['barang'] = $this->barang_model->tampil_update($id);
			$data['judul'] = 'Halaman Update yaaaa';
			$this->load->view('update_data',$data);
		}else{
			$nama_produk = $this->input->post('nama_produk');
			$keterangan = $this->input->post('keterangan');
			$harga = $this->input->post('harga');
			$jumlah = $this->input->post('jumlah');

			$barang = array(
				'nama_produk' => $nama_produk,
				'keterangan' => $keterangan,
				'harga' => $harga,
				'jumlah' => $jumlah
			);
			$this->barang_model->update_barang($id,$barang);
			redirect(base_url('tampil_data'));
		}
	}

	public function hapus_data($id){
		$this->barang_model->hapus_barang($id);
		redirect(base_url('tampil_data'));
	}
}
