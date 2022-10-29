<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_system extends PX_Controller {
	
	public function __construct() {
			parent::__construct();
			$this->load->model('m_riwayat');
			$this->load->model('m_bapinjam');
			$this->load->model('m_spt');
		
		}

	public function index(){

	}

	function peminjam(){
		$this->check_login_petugas();
		$data['userdata'] = $this->session_petugas;
		$data['data'] = $this->model_basic->select_all('tbl_peminjam');
		$data['content'] = $this->load->view('backend/admin_system/peminjam',$data,true);
		$this->load->view('backend/index',$data);
	}

	function peminjam_form(){
		$this->check_login_petugas();
		$data['userdata'] = $this->session_petugas;
		$id = $this->input->post('id');
		if($id){
		$data['data'] = $this->model_basic->select_where('tbl_peminjam','id_peminjam',$id)->row();
		}else{
		$data['data'] = null;
		}
		$data['content'] = $this->load->view('backend/admin_system/peminjam_form',$data,true);
		$this->load->view('backend/index',$data);
  }

  		function peminjam_add(){
		$this->check_login_petugas();
		$data['userdata'] = $this->session_petugas;
		$table_field = $this->db->list_fields('tbl_peminjam');
		$insert = array();
		foreach ($table_field as $field) {
			$insert[$field] = $this->input->post($field);
		}
		$insert['password'] = $this->encrypt->encode($insert['password']);
		$check_username = $this->model_basic->select_where('tbl_peminjam','username',$insert['username'])->row();
		if ($check_username != null) {
			$this->returnJson(array('status' => 'error','msg' => 'Username sudah digunakan!'));
		}else{
			if($insert){
				$do_insert = $this->model_basic->insert_all('tbl_peminjam',$insert);
				$this->returnJson(array('status' => 'ok','msg' => 'Insert data berhasil', 'redirect' => 'peminjam'));
			}else{
				$this->returnJson(array('status' => 'error','msg' => 'Periksa kembali form'));
			}
		}
  }

  	function peminjam_update(){
		$this->check_login_petugas();
		$data['userdata'] = $this->session_petugas;
		$table_field = $this->db->list_fields('tbl_peminjam');
		$update = array();
		foreach ($table_field as $field) {
			$update[$field] = $this->input->post($field);
		}
		$update['password'] = $this->encrypt->encode($update['password']);
		$check_username = $this->model_basic->select_where('tbl_peminjam','username',$update['username'])->row();
		if ($check_username != null && $check_username->id_peminjam != $update['id_peminjam']) {
			$this->returnJson(array('status' => 'error','msg' => 'Username sudah digunakan!'));
		}else{
			if($update){
				$do_update = $this->model_basic->update('tbl_peminjam',$update,'id_peminjam',$update['id_peminjam']);
				$this->returnJson(array('status' => 'ok','msg' => 'Update data berhasil', 'redirect' => 'peminjam'));
			}else{
				$this->returnJson(array('status' => 'error','msg' => 'Periksa kembali form'));
			}
		}
  }

	
	function peminjam_delete(){
        $this->check_login_petugas();
		$data['userdata'] = $this->session_petugas;
		$id = $this->input->post('id');
		$do_delete = $this->model_basic->delete('tbl_peminjam','id_peminjam',$id);
		$this->session->set_flashdata('info', 'Data Berhasil Di Hapus!');
		if($do_delete){
			redirect('admin_system/peminjam');
		}
		else {

		}
	}


	function perangkat(){
		$this->check_login_petugas();
		$data['userdata'] = $this->session_petugas;
		$data['data'] = $this->model_basic->select_all('tbl_barang');
		$data['content'] = $this->load->view('backend/admin_system/perangkat',$data,true);
		$this->load->view('backend/index',$data);
	}

	function perangkat_form(){
		$this->check_login_petugas();
		$data['userdata'] = $this->session_petugas;
		$id = $this->input->post('id');
		if($id){
		$data['data'] = $this->model_basic->select_where('tbl_barang','id_perangkat',$id)->row();
		}else{
		$data['data'] = null;
		}
		$data['content'] = $this->load->view('backend/admin_system/perangkat_form',$data,true);
		$this->load->view('backend/index',$data);
  }

	function perangkat_add(){
		$this->check_login_petugas();
		$data['userdata'] = $this->session_petugas;
		$table_field = $this->db->list_fields('tbl_barang');
		$insert = array();
		foreach ($table_field as $field) {
			$insert[$field] = $this->input->post($field);
		}
		$check_name = $this->model_basic->select_where('tbl_barang','merk',$insert['merk'])->row();
		if ($check_name != null) {
			$this->returnJson(array('status' => 'error','msg' => 'Perangkat sudah ada!'));
		}else{
			if($insert){
				$do_insert = $this->model_basic->insert_all('tbl_barang',$insert);
				$this->returnJson(array('status' => 'ok','msg' => 'Insert data berhasil', 'redirect' => 'perangkat'));
			}else{
				$this->returnJson(array('status' => 'error','msg' => 'Periksa kembali form'));
			}
		}
  }
  
  		function perangkat_detail(){
		$this->check_login_petugas();
		$data['userdata'] = $this->session_petugas;
		$id = $this->input->post('id');
		$data['data'] = $this->model_basic->select_where('tbl_barang','id_perangkat',$id)->row();
		$data['content'] = $this->load->view('backend/admin_system/perangkat_detail',$data,true);
		$this->load->view('backend/index',$data);
  		}

		function perangkat_update(){
		$this->check_login_petugas();
		$data['userdata'] = $this->session_petugas;
		$table_field = $this->db->list_fields('tbl_barang');
		$update = array();
		foreach ($table_field as $field) {
			$update[$field] = $this->input->post($field);
		}
		$check_name = $this->model_basic->select_where('tbl_barang','merk',$update['merk'])->row();
		if ($check_name != null && $check_name->id_perangkat != $update['id_perangkat']) {
			$this->returnJson(array('status' => 'error','msg' => 'Nama perangkat sudah digunakan!'));
		}else{
			if($update){
				$do_update = $this->model_basic->update('tbl_barang',$update,'id_perangkat',$update['id_perangkat']);
				$this->returnJson(array('status' => 'ok','msg' => 'Update data berhasil', 'redirect' => 'perangkat'));
			}else{
				$this->returnJson(array('status' => 'error','msg' => 'Periksa kembali form'));
			}
		}
  }


	function perangkat_delete(){
    	$this->check_login_petugas();
		$data['userdata'] = $this->session_petugas;
		$id = $this->input->post('id');
		$do_delete = $this->model_basic->delete('tbl_barang','id_perangkat',$id);
		$this->session->set_flashdata('info', 'Data Berhasil Di Hapus!');
		if($do_delete){
			redirect('admin_system/perangkat');
		}
		else{

		}
  }

	function pinjam(){
		$this->check_login_petugas();
		$data['userdata'] = $this->session_petugas;
		$data['data'] = $this->model_basic->select_where_join_2('tbl_pinjam','tbl_pinjam.*,tbl_barang.nma_perangkat as nma_perangkat,tbl_peminjam.name as name,tbl_barang.merk as merk_perangkat','tbl_pinjam.status','0','tbl_barang','tbl_pinjam.id_perangkat','tbl_barang.id_perangkat','tbl_peminjam','tbl_pinjam.id_peminjam','tbl_peminjam.id_peminjam')->result();
		$data['content'] = $this->load->view('backend/admin_system/pinjam',$data,true);
		$this->load->view('backend/index',$data);
	}

	function spt(){
		$this->check_login_petugas();
		$data['userdata'] = $this->session_petugas;
		$data['files'] = directory_map("./file_SPT");
		$data['data'] =  $this->db->get('tbl_file')->result();
		$data['content'] = $this->load->view('backend/admin_system/spt',$data,true);
		$this->load->view('backend/index',$data);
	}
	
		function delete_file($fileName){
		$this->check_login_petugas();
		$data['userdata'] = $this->session_petugas;
		$query = $this->m_spt->hapus($fileName);
		if ($query = true) {
			redirect('admin_system/spt');
		}
		$data['content'] = $this->load->view('backend/admin_system/spt',$data,true);
		$this->load->view('backend/index',$data);
	}

	function pinjam_setujui(){
		$this->check_login_petugas();
		$data['userdata'] = $this->session_petugas;
		$id = $this->input->post('id');
		$update['status'] = '1';

		if($update){
			$do_update = $this->model_basic->update('tbl_pinjam',$update,'id_pinjam',$id);
			if($do_update){
				redirect('admin_system/pinjam');
			}
		}
  }




	function pinjam_tolak(){
		$this->check_login_petugas();
		$data['userdata'] = $this->session_petugas;
		

		$table_field = $this->db->list_fields('tbl_riwayat');
		$insert = array();
		foreach ($table_field as $field) {
			$insert[$field] = $this->input->post($field);
		}

		$check = $this->model_basic->select_where('tbl_barang','id_perangkat',$insert['id_perangkat'])->row();
		if($insert){
			$update['stock_perangkat'] = $check->stock_perangkat + $insert['jml'];
			$do_insert = $this->model_basic->insert_all('tbl_riwayat',$insert);
			$do_update = $this->model_basic->update('tbl_barang',$update,'id_perangkat',$insert['id_perangkat']);
			$do_delete = $this->model_basic->delete('tbl_pinjam','id_pinjam',$insert['id_pinjam']);
			if($do_insert && $do_delete){
				redirect('admin_system/pinjam');
			}
		}
  }

	function kembali(){
		$this->check_login_petugas();
		$data['userdata'] = $this->session_petugas;
		//$this->load->model('m_pengembalian');
		//$data['data'] = $this->m_pengembalian->getDataPengembalian();
		 $data['data'] = $this->model_basic->select_where_join_2('tbl_pinjam','tbl_pinjam.*,tbl_barang.nma_perangkat as nma_perangkat,tbl_peminjam.name as name,tbl_barang.merk as merk_perangkat','tbl_pinjam.status','2','tbl_barang','tbl_pinjam.id_perangkat','tbl_barang.id_perangkat','tbl_peminjam','tbl_pinjam.id_peminjam','tbl_peminjam.id_peminjam')->result();
		$data['content'] = $this->load->view('backend/admin_system/kembali',$data,true);
		$this->load->view('backend/index',$data);
	}

	function kembali_setujui(){
		$this->check_login_petugas();
		$data['userdata'] = $this->session_petugas;
		$table_field = $this->db->list_fields('tbl_riwayat');
		$insert = array();
		foreach ($table_field as $field) {
			$insert[$field] = $this->input->post($field);
		}

		$check = $this->model_basic->select_where('tbl_barang','id_perangkat',$insert['id_perangkat'])->row();
		if($insert){
			$update['stock_perangkat'] = $check->stock_perangkat + $insert['jml'];
			$do_insert = $this->model_basic->insert_all('tbl_riwayat',$insert);
			$do_update = $this->model_basic->update('tbl_barang',$update,'id_perangkat',$insert['id_perangkat']);
			$do_delete = $this->model_basic->delete('tbl_pinjam','id_pinjam',$insert['id_pinjam']);
			if($do_insert && $do_delete){
				redirect('admin_system/kembali');
			}
		}
	
  }

	function riwayat(){
		$data['data'] = $this->m_riwayat->getDataGroupBy();
		
		$this->check_login_petugas();
		$data['userdata'] = $this->session_petugas;
		$data['content'] = $this->load->view('backend/admin_system/riwayat',$data,true);
		$this->load->view('backend/index',$data);
	}


		function riwayat_delete(){
    	$this->check_login_petugas();
		$data['userdata'] = $this->session_petugas;
		$id = $this->input->post('id');
		$do_delete = $this->model_basic->delete('tbl_riwayat','id_perangkat',$id);
		$this->session->set_flashdata('info', 'Riwayat Berhasil Di Hapus!');
		if($do_delete){
			redirect('admin_system/riwayat');
		}
		else{

		}
  }

	function riwayat_clear(){
		$this->check_login_petugas();
		$data['userdata'] = $this->session_petugas;
		$this->session->set_flashdata('info', 'Riwayat Berhasil Di Hapus!');
		$this->db->empty_table('tbl_riwayat');
		redirect('admin_system/riwayat');
	}


	function laporan_pinjam(){
		$this->check_login_petugas();
		$data['userdata'] = $this->session_petugas;
		$data['data'] = $this->model_basic->select_where_join_2('tbl_pinjam','tbl_pinjam.*,tbl_barang.nma_perangkat as nma_perangkat,tbl_peminjam.name as name,tbl_barang.merk as merk_perangkat','tbl_pinjam.status','1','tbl_barang','tbl_pinjam.id_perangkat','tbl_barang.id_perangkat','tbl_peminjam','tbl_pinjam.id_peminjam','tbl_peminjam.id_peminjam')->result();
		 //$data['data'] = $this->model_basic->select_where_join_2('tbl_pinjam','tbl_pinjam.*,tbl_barang.nma_perangkat as nma_perangkat,tbl_peminjam.name as name,tbl_barang.merk as merk_perangkat','tbl_pinjam.status','1','tbl_barang','tbl_pinjam.id_perangkat','tbl_barang.id_perangkat','tbl_peminjam','tbl_pinjam.id_peminjam','tbl_peminjam.id_peminjam')->result();
		$data['content'] = $this->load->view('backend/admin_system/laporan_pinjam',$data,true);
		$this->load->view('backend/index',$data);
	}

		function laporan_delete(){
    	$this->check_login_petugas();
		$data['userdata'] = $this->session_petugas;
		$id = $this->input->post('id');
		$do_delete = $this->model_basic->delete('tbl_pinjam','id_perangkat',$id);
		$this->session->set_flashdata('info', 'Riwayat Berhasil Di Hapus!');
		if($do_delete){
			redirect('admin_system/laporan_pinjam');
		}
		else{

		}
  }

	function print_bakembali($id)
	{	
		if ($this->input->post('id_peminjam') == null 	) {
		redirect('admin_system/laporan_pinjam');	
		}
		$data['data'] = $this->m_riwayat->getdataById($this->input->post('id_peminjam'),$this->input->post('kegiatan'));	
		$this->check_login_petugas();
		$img = file_get_contents(site_url('assets/dompdf/img/kominfo-modi.png'));

		$data['userdata'] = $this->session_petugas;
		$data['logo'] = base64_encode($img);
		$data['hari'] = $this->hari_ini();
		$data['tanggal'] = $this->terbilang(date ("d"));
		$data['bulan'] = $this->bulan();
		$data['bulan_angka'] = $this->bulan_angka();
		$data['tahun'] = ucwords($this->terbilang(date ("Y")));
		
		$this->load->library('mypdf');		
		$this->mypdf->generate('backend/admin_system/bakembali', $data);
	}

	function print_bapinjam($id)
	{	
		if ($this->input->post('id_peminjam') == null 	) {
		redirect('admin_system/laporan_pinjam');	
		}
		$data['data'] = $this->m_bapinjam->getdataById($this->input->post('id_peminjam'),$this->input->post('kegiatan'));
		$this->check_login_petugas();
		$img = file_get_contents(site_url('assets/dompdf/img/kominfo-modi.png'));

		$data['userdata'] = $this->session_petugas;
		$data['logo'] = base64_encode($img);
		$data['hari'] = $this->hari_ini();
		$data['tanggal'] = $this->terbilang(date ("d"));
		$data['bulan'] = $this->bulan();
		$data['bulan_angka'] = $this->bulan_angka();
		$data['tahun'] = ucwords($this->terbilang(date ("Y")));
		
		$this->load->library('mypdf');		
		$this->mypdf->generate('backend/admin_system/bapinjam', $data);
	}

	function terbilang($nilai) {		
		if($nilai<0) {
			$hasil = "minus ". trim($this->penyebut($nilai));
		} else {
			$hasil = trim($this->penyebut($nilai));
		}     		
		return $hasil;
	}


	function bulan(){
		$tanggal = date('Y-m-d');
        $bulan = array (
        1 =>   'Januari',
        'Februari',
        'Maret',
        'April',
        'Mei',
        'Juni',
        'Juli',
        'Agustus',
        'September',
        'Oktober',
        'November',
        'Desember'
        );
        
        $pecahkan = explode('-', $tanggal);       
        return $bulan[ (int)$pecahkan[1] ];
    }

    function bulan_angka(){
		$tanggal = date('Y-m-d');
        $bulan = array (
        1 =>   '01',
        '02',
        '03',
        '04',
        '05',
        '06',
        '07',
        '08',
        '09',
        '10',
        '11',
        '12'
        );
        
        $pecahkan = explode('-', $tanggal);       
        return $bulan[ (int)$pecahkan[1] ];
    }
 

	function penyebut($nilai) 
	{
		$nilai = abs($nilai);
		$huruf = array("", "satu", "dua", "tiga", "empat", "lima", "enam", "tujuh", "delapan", "sembilan", "sepuluh", "sebelas");
		$temp = "";
		if ($nilai < 12) {
			$temp = " ". $huruf[$nilai];
		} else if ($nilai <20) {
			$temp = $this->penyebut($nilai - 10). " belas";
		} else if ($nilai < 100) {
			$temp = $this->penyebut($nilai/10)." puluh". $this->penyebut($nilai % 10);
		} else if ($nilai < 200) {
			$temp = " seratus" . $this->penyebut($nilai - 100);
		} else if ($nilai < 1000) {
			$temp = $this->penyebut($nilai/100) . " ratus" . $this->penyebut($nilai % 100);
		} else if ($nilai < 2000) {
			$temp = " seribu" . $this->penyebut($nilai - 1000);
		} else if ($nilai < 1000000) {
			$temp = $this->penyebut($nilai/1000) . " ribu" . $this->penyebut($nilai % 1000);
		} else if ($nilai < 1000000000) {
			$temp = $this->penyebut($nilai/1000000) . " juta" . $this->penyebut($nilai % 1000000);
		} else if ($nilai < 1000000000000) {
			$temp = $this->penyebut($nilai/1000000000) . " milyar" . $this->penyebut(fmod($nilai,1000000000));
		} else if ($nilai < 1000000000000000) {
			$temp = $this->penyebut($nilai/1000000000000) . " trilyun" . $this->penyebut(fmod($nilai,1000000000000));
		}     
		return $temp;
	}

	function hari_ini(){
		$hari = date ("D");
	 
		switch($hari){
			case 'Sun':
				$hari_ini = "Minggu";
			break;
	 
			case 'Mon':			
				$hari_ini = "Senin";
			break;
	 
			case 'Tue':
				$hari_ini = "Selasa";
			break;
	 
			case 'Wed':
				$hari_ini = "Rabu";
			break;
	 
			case 'Thu':
				$hari_ini = "Kamis";
			break;
	 
			case 'Fri':
				$hari_ini = "Jumat";
			break;
	 
			case 'Sat':
				$hari_ini = "Sabtu";
			break;
			
			default:
				$hari_ini = "Tidak di ketahui";		
			break;
	}
 
	return $hari_ini;
 
}

	}
