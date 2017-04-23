<?php
class Pedido_model extends CI_Model {
  public function __construct() {
    parent::__construct();
    $this->load->database();
  }

  public function get_alimentos() {
    $query = $this->db->get('alimentos');
    return $query->result_array();    
  }    

  public function guardar_pedido() {
    // me fijo si el cliente ya está en la base de datos
    $cliente = $this->db->get_where('clientes', array('dni' => $_POST['dni']));

    // si no lo está, el resultado será un arreglo vacío, y si este es el caso, procedo a guardar el cliente en la base de datos
    if(count($cliente->result_array()) == 0) {
      $cliente = array(
        'nombre' => $_POST['nombre'],
        'apellido' => $_POST['apellido'],      
        'email' => $_POST['email'],
        'telefono' => $_POST['telefono'],
        'direccion' => $_POST['direccion'],
        'dni' => $_POST['dni'],
      );

      $this->db->insert('clientes', $cliente);
    }

    // obtengo fecha y hora actual
    date_default_timezone_set('America/Argentina/Mendoza');
    $fechamysql = date('Y-m-d H:i:s');

    // necesito el id del cliente para guardarlo en la tabla pedidos
    $cliente = $this->db->get_where('clientes', array('dni' => $_POST['dni']));
    $cliente_actual = $cliente->row_array();    

    // guardo el pedido en la tabla pedidos
    $pedido = array(
      'dia_y_hora' => $fechamysql,
      'cliente_id' => $cliente_actual['id']
    );
    $this->db->insert('pedidos', $pedido);

    // necesito el id del pedido para guardarlo en la tabla intermedia
    $pedido = $this->db->get_where('pedidos', array('dia_y_hora' => $fechamysql));
    $pedido_actual = $pedido->row_array();

    // obtengo los alimentos seleccionados, y voy guardando alimentos y cliente en un registro distinto de la tabla alimentos_pedidos
    foreach($_POST['alimentos'] as $un_alimento) {    
      $registro = array('alimento_id' => $un_alimento, 'pedido_id' => $pedido_actual['id']);
      $this->db->insert('alimentos_pedidos', $registro);
    }
  }
}