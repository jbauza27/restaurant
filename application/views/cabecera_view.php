<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Restaurant Buen Gusto</title>  
  <link rel="stylesheet" href="<?php echo base_url("bootstrap/css/bootstrap.css"); ?>" /> 
  <link rel="stylesheet" href="<?php echo base_url("css/estilos.css"); ?>" />   
</head>
<body>
<div class="container">
  <div class="row">
    <div class="col-sm-4"><img id="logo1" src="<?php echo base_url('images/logo.jpg'); ?>"/></div>
    <div class="col-sm-4 alin-cen"><h1>Restaurant<br/>'Buen Gusto'</h1></div>
    <div class="col-sm-4"><img id="logo2" src="<?php echo base_url('images/logo.jpg'); ?>"/></div>
    </div>
  </div>
</div>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <ul class="nav navbar-nav">
      <li><a href="<?php echo site_url('Main_controller/index'); ?>">Inicio</a></li>
      <li><a href="<?php echo site_url('Menu_controller/index'); ?>">Menú</a></li>
      <li><a href="<?php echo site_url('Pedido_controller/index'); ?>">Pedido</a></li>
      <li><a href="<?php echo site_url('Contacto_controller/index'); ?>">Contacto</a></li>
    </ul>
  </div>
</nav>
