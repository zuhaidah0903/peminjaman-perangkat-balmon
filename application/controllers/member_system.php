<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Member_system extends PX_Controller {
	public function __construct() {
			parent::__construct();
			$this->load->model('m_peminjaman');
			$this->load->model('m_spt');
		}

	public function index(){

	}

	function profile(){
		$this->check_login_peminjam();
		$data['userdata'] = $this->session_peminjam;
		$data['data'] = $this->model_basic->select_where('tbl_peminjam','id_peminjam',$this->session_peminjam['id_peminjam'])->row();
		$data['content'] = $this->load->view('frontend/member_system/profile',$data,true);
		$this->load->view('frontend/index',$data);
	}

	function perangkat(){
		$this->check_login_peminjam();
		$data['userdata'] = $this->session_peminjam;
		$data['data'] = $this->model_basic->select_all('tbl_barang');
		$data['content'] = $this->load->view('frontend/member_system/perangkat',$data,true);
		$this->load->view('frontend/index',$data);
	}

	// function perangkat_form(){
	// 	$this->check_login_peminjam();
	// 	$data['userdata'] = $this->session_peminjam;
	// 	$id = $this->input->post('id');
	// 	if($id){
	// 	$data['data'] = $this->model_basic->select_where('tbl_barang','id_perangkat',$id)->row();
	// 	}else{
	// 	$data['data'] = null;
	// 	}
	// 	$data['content'] = $this->load->view('backend/admin_system/perangkat_form',$data,true);
	// 	$this->load->view('backend/index',$data);
 //  }

	function pinjam_perangkat(){
		$this->check_login_peminjam();
		$data['userdata'] = $this->session_peminjam;
		$id = $this->input->post('id');
		$data['data'] = $this->model_basic->select_where('tbl_barang','id_perangkat',$id)->row();
		$data['content'] = $this->load->view('frontend/member_system/pinjam_perangkat',$data,true);
		$this->load->view('frontend/index',$data);
  }

 //    function pinjam_perangkat(){
 //  	$this->check_login_peminjam();
	// $data['userdata'] = $this->session_peminjam;
	// $id = $this->input->post('id');
	// $data = $this->m_peminjaman->getDataById($id);
	// $data['content'] = $this->load->view('frontend/member_system/perangkat_detail',$data,true);
	// $this->load->view('frontend/index',$data);

 //  }

    	function perangkat_detail(){
		$this->check_login_petugas();
		$data['userdata'] = $this->session_petugas;
		$id = $this->input->post('id');
		$data['data'] = $this->model_basic->select_where('tbl_barang','id_perangkat',$id)->row();
		$data['content'] = $this->load->view('frontend/member_system/perangkat_detail',$data,true);
		$this->load->view('frontend/index',$data);
  		}

  		//main
  		function upload_spt(){
 	    $this->check_login_peminjam();
		$data['userdata'] = $this->session_peminjam;
		$data['files'] = directory_map("./file_SPT");
		$data['data'] =  $this->db->get('tbl_file')->result();
		$data['content'] = $this->load->view('frontend/member_system/spt',$data,true);
		$this->load->view('frontend/index',$data);
	}

	public function tambah_spt()
	{
		$this->check_login_peminjam();
		$data['userdata'] = $this->session_peminjam;
		$data['content'] = $this->load->view('frontend/member_system/form_spt',$data,true);
		$this->load->view('frontend/index',$data);
	}

		//delete
		function delete_file($id){
	    $this->check_login_peminjam();
	    $data['userdata'] = $this->session_peminjam;
		$query = $this->m_spt->hapus($id);
		if ($query = true) {
			redirect('member_system/upload_spt');
		}

		$data['content'] = $this->load->view('frontend/member_system/spt',$data,true);
		$this->load->view('frontend/index',$data);
	}

		//Upload
		function upload(){
		$config['upload_path'] = './file_SPT/';
		$config['allowed_types'] = '*';
		$config['max_size']      = 0;
        $this->load->library('upload');
        $this->upload->initialize($config);


		if(!$this->upload->do_upload('file')){
			echo "Anda gagal menggunggah file!";
			
		} else {

			$file = $this->upload->data();
			$file =  $file['file_name'];
			$nip = $this->input->post('nip', TRUE);
            $nama_peminjam = $this->input->post('nama_peminjam', TRUE);
			// $kegiatan = $this->input->post('kegiatan', TRUE);

			$data = array(
				
				'nip' => $nip,
                'nama_peminjam' => $nama_peminjam,
				'file' => $file,
			);

			$this->db->insert('tbl_file', $data);	
			redirect('member_system/upload_spt');
		}
	}

	function pinjam_perangkat_act(){
		$this->check_login_peminjam();
		$data['userdata'] = $this->session_peminjam;
		$table_field = $this->db->list_fields('tbl_pinjam');
		$insert = array();
		foreach ($table_field as $field) {
			$insert[$field] = $this->input->post($field);
		}
		
		$limit = array(
			'id_peminjam' => $this->session_peminjam['id_peminjam'],
			'id_perangkat' => $insert['id_perangkat']
		);

		$check = $this->model_basic->select_where('tbl_barang','id_perangkat',$insert['id_perangkat'])->row();
		$limits = $this->model_basic->select_where_array('tbl_pinjam',$limit)->result();
		$check_limit = 0;
		foreach ($limits as $limit){
			$check_limit += $limit->jml;
		}
		if($check_limit + $insert['jml'] > '5'){
			$this->returnJson(array('status' => 'error','msg' => 'Jumlah Pinjam Maksimal Adalah 5!'));
		}else{
			if($check->stock_perangkat < $insert['jml']){
				$this->returnJson(array('status' => 'error','msg' => 'Stock Kurang!'));
			}elseif($insert['jml'] <= '0'){
				$this->returnJson(array('status' => 'error','msg' => 'Jumlah Pinjam Tidak Boleh Nol!'));
			}else{
				if($insert){
						$update['stock_perangkat'] = $check->stock_perangkat - $insert['jml'];
						$do_update = $this->model_basic->update('tbl_barang',$update,'id_perangkat',$insert['id_perangkat']);
						$do_insert = $this->model_basic->insert_all('tbl_pinjam',$insert);
						$this->returnJson(array('status' => 'ok','msg' => 'Pinjam Barang Berhasil', 'redirect' => 'perangkat'));
				}else{
					$this->returnJson(array('status' => 'error','msg' => 'Periksa kembali form'));
				}
			}
		}
	}
	

	function pinjam(){
		$this->check_login_peminjam();
		$data['userdata'] = $this->session_peminjam;
		//$data['data'] = $this->model_basic->select_where_join('tbl_pinjam','tbl_pinjam.*,tbl_barang.nma_perangkat','id_peminjam',$this->session_peminjam['id_peminjam'],'tbl_barang','tbl_pinjam.id_perangkat','tbl_barang.id_perangkat','tbl_pinjam.merk','tbl_barang.merk')->result();
		$data['data'] = $this->m_peminjaman->getDataPeminjamanMember();
		$data['content'] = $this->load->view('frontend/member_system/pinjam',$data,true);
		$this->load->view('frontend/index',$data);
	}

	function pinjam_kembali(){
		$this->check_login_peminjam();
		$data['userdata'] = $this->session_peminjam;
		$id = $this->input->post('id');
		$tgl_kembali = $this->input->post('tgl_kembali');
		$update['status'] = '2';
		$update['tgl_kembali'] = $tgl_kembali;

		if($update){
			$do_update = $this->model_basic->update('tbl_pinjam',$update,'id_pinjam',$id);
			if($do_update){
				redirect('member_system/pinjam');
			}
		}
	}

	function riwayat(){
		$this->check_login_peminjam();
		$data['userdata'] = $this->session_peminjam;
		//$data['data'] = $this->m_riwayat->getDataRiwayat();
		 $data['data'] = $this->model_basic->select_where_join_2('tbl_riwayat','tbl_riwayat.*,tbl_barang.nma_perangkat as nma_perangkat,tbl_peminjam.name as name,tbl_barang.merk as merk_perangkat','tbl_riwayat.id_peminjam',$this->session_peminjam['id_peminjam'],'tbl_barang','tbl_riwayat.id_perangkat','tbl_barang.id_perangkat','tbl_peminjam','tbl_riwayat.id_peminjam','tbl_peminjam.id_peminjam')->result();
		$data['content'] = $this->load->view('frontend/member_system/riwayat',$data,true);
		$this->load->view('frontend/index',$data);
	}
}