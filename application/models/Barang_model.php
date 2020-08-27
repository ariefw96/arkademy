<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class barang_model extends CI_Model{
	private $id;
	private $nama_produk;
	private $keterangan;
	private $harga;
	private $jumlah;


	public function tambah_barang($barang){
		//jalankan disini
		$this->db->insert('produk',$barang);
	}

	public function tampil_barang(){
		return $this->db->get('produk');
	}

	public function tampil_update($id){
		return $this->db->get_where('produk', array('id_produk'=>$id));
	}

	public function update_barang($id, $barang){
		$this->db->where('id_produk', $id);
		$this->db->update('produk', $barang);
	}

	public function hapus_barang($id){
		$this->db->where('id_produk',$id);
		$this->db->delete('produk');
	}


}