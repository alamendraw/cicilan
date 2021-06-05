<?php defined('BASEPATH') OR exit('No direct script access allowed');

class M_produk extends MY_Model {

  public $table = 'produk';
  public $primary_key = 'id';

  public function __construct()
  {
    parent::__construct();
    $this->soft_deletes = TRUE;
  } 
  
  public function get_transaksi(){
    $data = $this->db->query("SELECT a.id,id_pelanggan,produk,tgl_terima,harga_beli,ongkir,total_harga,laba,harga_jual,nilai_cicilan,tenor,b.nama FROM produk a INNER JOIN pelanggan b ON a.id_pelanggan=b.id");
    return $data->result_array();
  }
  
  public function get_detail($id){
    $data = $this->db->query("SELECT a.id,id_pelanggan,produk,tgl_terima,harga_beli,ongkir,total_harga,laba,harga_jual,nilai_cicilan,tenor,b.nama FROM produk a INNER JOIN pelanggan b ON a.id_pelanggan=b.id where a.id='$id'");
    return $data->result_array();
  }
  
}