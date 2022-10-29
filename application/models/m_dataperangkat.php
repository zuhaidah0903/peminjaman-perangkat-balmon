<?php

class M_dataperangkat Extends CI_Model{

// 	public function id_perangkat()
// 	{
// 		$this->db->select('RIGHT(tbl_perangkat.id_perangkat,3) as kode', FALSE);
// 		$this->db->order_by('id_perangkat', 'DESC');
// 		$this->db->limit(1);
// 		$query = $this->db->get('tbl_perangkat');
// 		if ($query->num_rows()<>0) {
// 			$data = $query->row();
// 			$kode = intval($data->$kode)+1;
// 		} else {
// 			$kode = 1;
// 	}

// 	$kodemax = str_pad($kode,3,"0", STR_PAD_LEFT);
// 	$kodejadi = "".$kodemax;
// }

	public function edit($id)
	{
		$this->db->where('id_perangkat', $id);
		return $this->db->get('tbl_perangkat')->row_array();
	}

	public function update($id_perangkat, $data)
	{
		$this->db->where('id_perangkat', $id_perangkat);
		$this->db->update('tbl_perangkat', $data);
	}

	public function hapus($id)
	{
		$this->db->where('id_perangkat', $id);
		$this->db->delete('tbl_perangkat');
	}

	public function detail($id)
	{
		$this->db->where('id_perangkat', $id);
		return $this->db->get('tbl_barang')->row_array();
	}
}