<div class="row">
  <div class="col-sm-offset-1 col-sm-11">
    <h3>Realizar pedido</h3>
  </div>  
  <div class="col-sm-offset-1 col-sm-11">
    <?php echo validation_errors(); ?>
    <?php echo form_open('Pedido_controller/pedido', 'class="form-horizontal" role="form"'); ?>
      <div class="form-group">
        <label class="control-label col-sm-1" for="nombre">Nombre: </label>        
        <div class="col-sm-10">
          <input type="text" value="<?php echo set_value('nombre'); ?>" class="form-control ancho_30" id="nombre" name="nombre">
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-1" for="apellido">Apellido: </label>        
        <div class="col-sm-10">
          <input type="text" value="<?php echo set_value('apellido'); ?>" class="form-control ancho_30" id="apellido" name="apellido">
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-1" for="email">Email: </label>        
        <div class="col-sm-10">
          <input type="text" value="<?php echo set_value('email'); ?>" class="form-control ancho_30" id="email" name="email">
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-1" for="telefono">Teléfono: </label>        
        <div class="col-sm-10">
          <input type="text" value="<?php echo set_value('telefono'); ?>" class="form-control ancho_30" id="telefono" name="telefono">
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-1" for="direccion">Dirección: </label>        
        <div class="col-sm-10">
          <input type="text" value="<?php echo set_value('direccion'); ?>" class="form-control ancho_60" id="direccion" name="direccion">
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-1" for="dni">DNI: </label>        
        <div class="col-sm-10">
          <input type="text" value="<?php echo set_value('dni'); ?>" class="form-control ancho_30" id="dni" name="dni">
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-1" for="precio">¿Qué desea pedir?: </label>        
        <div class="col-sm-10">
          <select class="form-control ancho_30" multiple name="alimentos[]" id="alimentos[]">    
            <?php foreach ($alimentos as $un_alimento) {?>
              <option value="<?php echo $un_alimento['id']; ?>"><?php echo $un_alimento['nombre']; ?></option>            
            <?php } ?>
          </select>  
        </div>  
      </div>
      <div class="form-group"> 
        <div class="col-sm-offset-1 col-sm-8">
          <input type="submit" value="Realizar pedido"/>
        </div>
      </div>
    </form>
  </div>
</div>