<?php defined('BASEPATH') OR exit('No direct script access allowed');

class M_cicilan extends MY_Model {

  public $table = 'cicilan';
  public $primary_key = 'id';

  public function __construct()
  {
    parent::__construct();
    $this->soft_deletes = TRUE;
  } 
 
  
}