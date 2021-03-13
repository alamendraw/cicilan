<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function __construct()
	{
		parent::__construct();  
		 
		$this->load->model('m_pelanggan','pelanggan'); 
		$this->load->model('m_cicilan','cicilan'); 
		 
	}

	public function index()
	{ 
		$this->output->set_template('template');
		$this->data['list'] = $this->pelanggan->get_all();
		if($this->data['list']==false){
			$this->data['list'] = [];
		} 
		$this->load->view('home',$this->data);
	}

	public function detail()
	{
		$id = $_REQUEST['id'];
		$this->output->set_template('template');
		$this->data['pelanggan'] = $this->pelanggan->get(['id'=>$id]);
		$this->data['list'] = $this->cicilan->get_all(['id_pelanggan'=>$id]); 
		$this->load->view('detail',$this->data);
	}

	public function tambah()
	{
		$this->output->set_template('template');
		$this->data['action'] = 'tambah';
		$this->load->view('form_add', $this->data);
	}

	public function edit($id)
	{
		$this->output->set_template('template');
		$this->data['action'] = 'edit';
		$this->data['data'] = $this->pelanggan->get($id);
		$this->load->view('form_add', $this->data);
	}

	public function bayar()
	{
		$id = $_REQUEST['id'];
		$data_cicil = $this->cicilan->get($id); 
		$this->output->set_template('template');
		$this->data['cicilan'] = $this->pelanggan->get(['id'=>$data_cicil->id_pelanggan])->nilai_cicilan; 
		$this->data['list'] = $data_cicil; 
		$this->load->view('form_bayar',$this->data);
	}

	public function simpan_pembeli(){
		$this->input->is_ajax_request() or exit('No direct script access allowed!');
		$data = $this->input->post(null, true); 
		$field['harga_beli'] = str_replace(',','',$data['harga_beli']);
		$field['ongkir'] = str_replace(',','',$data['ongkir']);
		$field['total_harga'] = str_replace(',','',$data['total_harga']);
		$field['laba'] = str_replace(',','',$data['laba']);
		$field['harga_jual'] = str_replace(',','',$data['harga_jual']);
		$field['nilai_cicilan'] = str_replace(',','',$data['nilai_cicilan']);
		$field['tenor'] = str_replace(',','',$data['tenor']); 
		$field['nama'] = $data['nama'];
		$field['produk'] = $data['produk'];
		if($data['id']==''){
			$save = $this->pelanggan->insert($field);
			for ($i=0; $i < $field['tenor']; $i++) { 
				$cicil['id_pelanggan'] = $save;
				$cicil['cicilanke'] = $i+1;
				$cicil['status'] = 'Belum di bayar';
				$save_cicil = $this->cicilan->insert($cicil);
			}
		}else{
			$save = $this->pelanggan->update($field,['id'=>$data['id']]);
		}
		
		if($save){ 
				$return['status'] = 'success';
				$return['message'] = 'Data Berhasil Tersimpan.'; 
		}else{
			$return['status'] = 'error';
         	$return['message'] = 'Data Gagal Tersimpan.'; 
		}
		echo json_encode($return);
	}
	public function simpan_bayar(){
		$this->input->is_ajax_request() or exit('No direct script access allowed!');
		$data = $this->input->post(null, true); 
		$id = $data['id']; 
		$field['nilai'] = str_replace(',','',$data['nilai']);
		$field['tanggal'] = mysql_date($data['tanggal']);	
		$field['status'] = 'Sudah di bayar';	
		$save = $this->cicilan->update($field,['id'=>$id]);

		if($save){ 
				$return['status'] = 'success';
				$return['message'] = 'Data Berhasil Tersimpan.'; 
		}else{
			$return['status'] = 'error';
         	$return['message'] = 'Data Gagal Tersimpan.'; 
		}
		echo json_encode($return);
	}
}