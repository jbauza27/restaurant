<div class="container-fluid">
  <div class="row">
    <div class="col-sm-offset-1 col-sm-10 col-sm-offset-1">
      <table class="table table-condensed">
        <thead>
          <tr>
            <th class="text-center">Alimento</th>
            <th class="text-center">Precio</th>
            <th class="text-center">Descripción</th>             
          </tr>
        </thead>
        <tbody>
          <?php
            foreach ($menu as $un_alimento) {
              echo '<tr>';
              echo '<td class="text-center">' . $un_alimento['nombre'] . '</td>'; 
              echo '<td class="text-center">' . $un_alimento['precio'] . '</td>';
              echo '<td class="text-center">' . $un_alimento['descripcion'] . '</td>';      
              echo '</tr>';
            }
          ?>
        </tbody>
      </table>
    </div>
  </div>
</div>