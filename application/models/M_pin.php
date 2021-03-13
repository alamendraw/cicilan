<?php defined('BASEPATH') OR exit('No direct script access allowed');

class M_pin extends MY_Model {

  public $table = 'pin'; 

  public function __construct()
  {
    parent::__construct();
    $this->soft_deletes = FALSE;
  } 
 
  
}