<?php

class M_peminjaman extends CI_Model{

	public function getDataPeminjaman()
	{
		$this->db->select('*');
		$this->db->from('tbl_pinjam');
		$this->db->join('tbl_peminjam', 'tbl_pinjam.id_peminjam = tbl_peminjam.id_peminjam');
		$this->db->join('tbl_barang', 'tbl_pinjam.id_perangkat = tbl_barang.id_perangkat');
		return $this->db->get()->result();
	}

	public function getDataPeminjamanMember()
	{
		$this->db->select('*');
		$this->db->from('tbl_pinjam');
		$this->db->join('tbl_peminjam', 'tbl_pinjam.id_peminjam = tbl_peminjam.id_peminjam');
		$this->db->join('tbl_barang', 'tbl_pinjam.id_perangkat = tbl_barang.id_perangkat');
		return $this->db->get()->result();
	}

	public function getdataById($id)
	{		
		$this->db->select('*');
		$this->db->from('tbl_pinjam');
		$this->db->join('tbl_peminjam', 'tbl_pinjam.id_peminjam = tbl_peminjam.id_peminjam');
		$this->db->join('tbl_barang', 'tbl_pinjam.id_perangkat = tbl_barang.id_perangkat');
		$this->db->where('id_pinjam', $id);
		return $this->db->get()->result();
	}


}