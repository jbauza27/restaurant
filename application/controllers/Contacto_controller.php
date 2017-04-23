<?php
class Contacto_controller extends CI_Controller {
  public function __construct() {
    parent::__construct();
    $this->load->model('Pedido_model');  
    $this->load->helper(array('form', 'url'));
    $this->load->library('form_validation');  
    $this->load->library('email');    
  }

  public function index() {
    $this->load->view('cabecera_view');
    $this->load->view('contacto_formulario_view');
    $this->load->view('pie_view');    
  }

  public function comentario() {
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
      'email',
      'Email',
      'required|valid_email',
      array(
        'required' => 'El campo email no puede quedar vacío.',
        'valid_email' => 'Ingrese una dirección de email válida.'
      )
    );

    $this->form_validation->set_rules(
      'comentario',
      'Comentario',
      'required',
      array(
        'required' => 'El campo comentario no puede quedar vacío.'
      )  
    );

    if ($this->form_validation->run() == FALSE) {      
      $this->load->view('cabecera_view');
      $this->load->view('contacto_formulario_view');
      $this->load->view('pie_view');
    }
    else {
      $this->email->from($_POST['email'], $_POST['nombre']);
      $this->email->to('restbg@gmail.com');
      $this->email->subject('Comentario de navegante');
      $this->email->message($_POST['comentario']);
      $this->email->send();      
      
      $this->load->view('cabecera_view');
      $this->load->view('contacto_exito_view');
      $this->load->view('pie_view');
    }
  }  
}