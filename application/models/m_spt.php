<?php

class M_Spt extends CI_Model{

// 	public function getDataUploadSPT()
// 	{
// 		$this->db->select('*');
// 		$this->db->from('tbl_file');
// 		$this->db->join('tbl_peminjam','tbl_file.id_peminjam = tbl_peminjam.id_peminjam');
// 		return $this->db->get()->result();
// 	}
// }

	public function hapus($id)
	{
		$this->db->where('id_file', $id);
		$this->db->delete('tbl_file');
	}
}