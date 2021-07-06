<?php defined('BASEPATH') OR exit('No direct script access allowed');

class M_pinjam extends MY_Model {

  public $table = 'pinjam';
  public $primary_key = 'id';

  public function __construct()
  {
    parent::__construct();
    $this->soft_deletes = TRUE;
  } 
  

}