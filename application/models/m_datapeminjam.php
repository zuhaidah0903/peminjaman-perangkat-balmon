<?php

class M_datapeminjam Extends CI_Model{


	public function id_peminjam()
	{
		$this->db->select('RIGHT(tbl_peminjam.id_peminjam,3) as kode', FALSE);
		$this->db->order_by('id_peminjam', 'DESC');
		$this->db->limit(1);
		$query = $this->db->get('tbl_peminjam');
		if ($query->num_rows()<>0) {
			$data = $query->row();
			$kode = intval($data->kode)+1;
		} else {
			$kode = 1;
	}

	$kodemax = str_pad($kode,3,"0", STR_PAD_LEFT);
	$kodejadi = "P".$kodemax;
	return $kodejadi;
}

	public function edit($id)
	{
		$this->db->where('id_peminjam', $id);
		return $this->db->get('tbl_peminjam')->row_array();
	}

	public function update($id_peminjam, $data)
	{
		$this->db->where('id_peminjam', $id_peminjam);
		$this->db->update('tbl_peminjam', $data);
	}

	public function hapus($id_peminjam)
	{
		$this->db->where('id_peminjam', $id_peminjam);
		$this->db->delete('tbl_peminjam');
	}
}