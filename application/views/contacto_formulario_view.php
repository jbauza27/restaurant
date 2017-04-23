<div class="row">
  <div class="col-sm-offset-1 col-sm-11">
    <h3>Déjenos un comentario</h3>
  </div>  
  <div class="col-sm-offset-1 col-sm-11">
    <?php echo validation_errors(); ?>
    <?php echo form_open('Contacto_controller/comentario', 'class="form-horizontal" role="form"'); ?>
      <div class="form-group">
        <label class="control-label col-sm-1" for="nombre">Nombre: </label>        
        <div class="col-sm-11">
          <input type="text" value="<?php echo set_value('nombre'); ?>" class="form-control ancho_30" id="nombre" name="nombre">
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-1" for="email">Email: </label>        
        <div class="col-sm-11">
          <input type="text" value="<?php echo set_value('email'); ?>" class="form-control ancho_30" id="email" name="email">
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-1" for="comentario">Comentario: </label>        
        <div class="col-sm-11">
          <textarea value="<?php echo set_value('comentario'); ?>" class="form-control ancho_60" rows="5" id="comentario" name="comentario"></textarea>
        </div>
      </div>

      <div class="form-group"> 
        <div class="col-sm-offset-1 col-sm-8">
          <input type="submit" value="Enviar comentario"/>
        </div>
      </div>
    </form>
  </div>
</div>