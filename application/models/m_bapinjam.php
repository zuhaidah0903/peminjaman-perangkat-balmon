<?php 

class M_Bapinjam extends CI_Model{

	private $_table = "tbl_pinjam";
	// // function tampil_bapinjam(){
	// // 	return $this->db->get($this->_table)->result();
	// // }
	
    function cetak_bapinjam($where,$table){
		return $this->db->get_where($table,$where);
	}

	public function getdataById($idPem, $kegiatan)
	{
		$this->db->select('*');
		$this->db->from('tbl_pinjam');
		$this->db->join('tbl_peminjam', 'tbl_peminjam.id_peminjam = tbl_pinjam.id_peminjam');
		$this->db->join('tbl_barang', 'tbl_barang.id_perangkat = tbl_pinjam.id_perangkat');
		
		// $this->db->join('tbl_barang', 'tbl_pinjam.id_perangkat = tbl_barang.id_perangkat');
		$this->db->where('tbl_pinjam.id_peminjam', $idPem);
		$this->db->where('tbl_pinjam.kegiatan', $kegiatan);
		return $this->db->get()->result();
	}

	function getDataGroupBy(){
		$this->db->select("tbl_riwayat.*,tbl_peminjam.name,tbl_barang.nma_perangkat,tbl_barang.merk AS merk_perangkat");
		$this->db->from('tbl_riwayat');
		$this->db->join('tbl_peminjam', 'tbl_peminjam.id_peminjam = tbl_riwayat.id_peminjam');
		$this->db->join('tbl_barang', 'tbl_barang.id_perangkat = tbl_riwayat.id_perangkat');		
		return $this->db->get()->result();
	}
}