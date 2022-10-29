<?php

class M_dashboard Extends CI_Model{

	public function countPerangkat()
	{
		return $this->db->count_all('tbl_barang');
	}

	public function countPeminjam()
	{
		return $this->db->count_all('tbl_peminjam');
	}

	public function countPinjam()
	{
		return $this->db->count_all('tbl_pinjam');
	}
}