<?php
class Main_controller extends CI_Controller {
  public function __construct() {
    parent::__construct();
    $this->load->model('Main_model');    
  }

  public function index() {
    $this->load->helper('url'); 
    $this->load->view('cabecera_view');
    $this->load->view('main_view');
    $this->load->view('pie_view');
  }  
}