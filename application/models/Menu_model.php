<?php
class Menu_model extends CI_Model {
  public function __construct() {
    parent::__construct();
    $this->load->database();
  }

  public function get_menu() {
    $query = $this->db->get('alimentos');
    return $query->result_array();    
  }    
}