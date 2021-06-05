<?php defined('BASEPATH') OR exit('No direct script access allowed');

class M_cicilan extends MY_Model {

  public $table = 'cicilan';
  public $primary_key = 'id';

  public function __construct()
  {
    parent::__construct();
    $this->soft_deletes = TRUE;
  } 
 
  public function get_belum(){
    $month = date('m'); 
    $bulan = (substr($month,0,1)==0)?substr($month,1):$month;
    $data = $this->db->query("SELECT COUNT(*) jml FROM cicilan WHERE bln_tagihan='$bulan' AND STATUS='Belum di bayar'")->row('jml');
    return $data;
  }
 
  public function get_sudah(){
    $month = date('m'); 
    $bulan = (substr($month,0,1)==0)?substr($month,1):$month;
    $data = $this->db->query("SELECT COUNT(*) jml FROM cicilan WHERE bln_tagihan='$bulan' AND STATUS='Sudah di bayar'")->row('jml');
    return $data;
  }
  
  public function get_list($id){
    $data = $this->db->query("SELECT * FROM produk WHERE id_pelanggan='$id' GROUP BY id");
    return $data->result_array();
  }

}