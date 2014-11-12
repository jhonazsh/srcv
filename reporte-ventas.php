<?php include 'base-dashboard.php' ?>

<?php startblock('cuerpo') ?>

<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title">Reporte de Ventas de Pasajes</h3>
        </div>
        <div class="panel-body">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th>Código</th>
                <th>Fecha y Hora de Salida</th>
                <th>Nombres y Apellidos</th>
                <th>DNI</th>
                <th>N° Asiento</th>
                <th>Precio</th>
                <th>Fecha de Venta</th>
                <th>Origen</th>
                <th>Destino</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>39423UU</td>
                <td>12/11/2014, 03:45 pm</td>
                <td>Jhon Felipe Medina Zapata</td>
                <td>46622539</td>
                <td>45</td>
                <td>30.00</td>
                <td>12/11/2014</td>
                <td>Trujillo</td>
                <td>Máncora</td>
              </tr>
              <tr>
                <td>39423UU</td>
                <td>12/11/2014, 03:45 pm</td>
                <td>Jhon Felipe Medina Zapata</td>
                <td>46622539</td>
                <td>45</td>
                <td>30.00</td>
                <td>12/11/2014</td>
                <td>Trujillo</td>
                <td>Máncora</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>

<?php endblock(); ?>

<?php startblock('js') ?>
<script type="text/javascript">
  $(document).on('ready', inicio);

  function inicio(){
    $.ajax({
      
    })
  }
</script>
<?php endblock(); ?>