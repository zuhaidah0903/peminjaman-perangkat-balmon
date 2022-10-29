<?php

class M_pengembalian extends CI_Model{

	public function getDataPengembalian()
	{
		$this->db->select('*');
		$this->db->from('tbl_pinjam');
		$this->db->join('tbl_peminjam', 'tbl_pinjam.id_peminjam = tbl_peminjam.id_peminjam');
		$this->db->join('tbl_barang', 'tbl_pinjam.id_perangkat = tbl_barang.id_perangkat');
		return $this->db->get()->result();
	}
}