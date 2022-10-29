<?php

class M_kategori Extends CI_Model{

	public function id_kategori()
	{
		$this->db->select('RIGHT(tbl_kategori.id_kategori,3) as kode', FALSE);
		$this->db->order_by('id_kategori', 'DESC');
		$this->db->limit(1);
		$query = $this->db->get('tbl_kategori');
		if ($query->num_rows()<>0) {
			$data = $query->row();
			$kode = intval($data->kode)+1;
		} else {
			$kode = 1;
	}

	$kodemax = str_pad($kode,3,"0", STR_PAD_LEFT);
	$kodejadi = "KT".$kodemax;
	return $kodejadi;
}

	public function edit($id)
	{
		$this->db->where('id_kategori', $kd);
		return $this->db->get('tbl_kategori')->row_array();
	}

	public function hapus($id)
	{
		$this->db->where('id_kategori', $id);
		$this->db->delete('tbl_kategori');
	}
}