<?php
class Pedido_controller extends CI_Controller {
  public function __construct() {
    parent::__construct();
    $this->load->model('Pedido_model');  
    $this->load->helper(array('form', 'url'));
    $this->load->library('form_validation');      
  }

  public function index() {    
    $datos['alimentos'] = $this->Pedido_model->get_alimentos();
    $this->load->view('cabecera_view');
    $this->load->view('pedido_formulario_view', $datos);
    $this->load->view('pie_view');
  }  

  public function pedido() {
    $this->load->helper(array('form', 'url'));
    $this->load->library('form_validation');

    $this->form_validation->set_error_delimiters('<div class="error">', '</div>'); 
    $this->form_validation->set_rules(
      'nombre',
      'Nombre',
      'required|alpha',
      array(
        'required' => 'El campo nombre no puede quedar vacío.',
        'alpha' => 'El campo nombre sólo puede contener letras.'
      )
    );

    $this->form_validation->set_rules(
      'apellido',
      'Apellido',
      'required|alpha',
      array(
        'required' => 'El campo apellido no puede quedar vacío.',
        'alpha' => 'El campo apellido sólo puede contener letras.'
      )
    );  

    $this->form_validation->set_rules(
      'email',
      'Email',
      'required|valid_email',
      array(
        'required' => 'El campo email no puede quedar vacío.',
        'valid_email' => 'Ingrese una dirección de email válida.'
      )
    );

    $this->form_validation->set_rules(
      'telefono',
      'Teléfono',
      'required|numeric',
      array(
        'required' => 'El campo teléfono no puede quedar vacío.',
        'numeric' => 'El campo teléfono sólo puede contener números.'
      )
    );

    $this->form_validation->set_rules(
      'direccion',
      'Dirección',
      'required',
      array(
        'required' => 'El campo dirección no puede quedar vacío.'
      )  
    );

    $this->form_validation->set_rules(
      'dni',
      'DNI',
      'required|numeric',
      array(
        'required' => 'El campo DNI no puede quedar vacío.',
        'numeric' => 'El campo DNI sólo puede contener números.'
      )
    );

    if ($this->form_validation->run() == FALSE) {
      $datos['alimentos'] = $this->Pedido_model->get_alimentos();
      $this->load->view('cabecera_view');
      $this->load->view('pedido_formulario_view', $datos);
      $this->load->view('pie_view');
    }
    else {
      $this->Pedido_model->guardar_pedido();
      $this->load->view('cabecera_view');
      $this->load->view('pedido_exito_view');
      $this->load->view('pie_view');
    }
  }  
}