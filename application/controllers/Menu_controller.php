<?php
class Menu_controller extends CI_Controller {
  public function __construct() {
    parent::__construct();
    $this->load->model('Menu_model');    
  }

  public function index() {
    $this->load->helper('url'); 
    $datos['menu'] = $this->Menu_model->get_menu();
    $this->load->view('cabecera_view');
    $this->load->view('menu_view', $datos);
    $this->load->view('pie_view');
  }  
}