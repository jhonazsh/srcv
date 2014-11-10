<?php

session_start();


?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/estilos.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->


  </head>
  <body>

    <?php 
      if(isset($_SESSION['admin'])){
    ?>

    <div class="container">
      <br>
      
      <div class="row">
        <div class="col-md-3 col-md-offset-9">
          <?php
            
              echo "Haz ingresado como: ".$_SESSION['admin'];
              echo "&nbsp;&nbsp;<btn class='btn btn-primary btn-xs' id='salir'>Salir <span class='glyphicon glyphicon-off'></span></btn>";
          ?>
        </div>
      </div>
      <br>
        

      <nav class="navbar navbar-default" role="navigation">
        <div class="container-fluid">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="admin-index.php">SRCV</a>
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
              <li><a href="ventas.php">Ventas</a></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Reportes <span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="#">De Ventas</a></li>
                  <li><a href="#">De Clientes</a></li>
                </ul>
              </li>
              <li><a href="#">Reservaciones</a></li>
              <li><a href="#">Horarios</a></li>
            </ul>
            
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
      </nav>
    </div>
    
    <div class="container">


    
      <div class="panel panel-default panel-ventas">
        <div class="panel-body">

          <div class="row">
            <div class="col-md-3">
              <label>Origen:</label>
              <input type="text" id="origen" class="form-control input-sm" placeholder="Origen" value="Trujillo" disabled>
            </div>
            <div class="col-md-3">
              <label>Destino:</label>
              <select class="form-control input-sm" id="destino">
                <option>--- Elegir Destino ---</option>
                <option>Trujillo</option>
                <option>Lima</option>
                <option>Máncora</option>
                <option>Chiclayo</option>
                <option>Piura</option>
              </select>
            </div>
            <div class="col-md-4">
              <label>Fecha de Salida:</label>
              <input type="date" id="fecha-salida" class="form-control input-sm">
            </div>
            <div class="col-md-2">
              <label>Hora de Salida:</label>
              <select class="form-control input-sm" id="hora-salida">
                <option>--- Elegir Hora ---</option>
                <option>2:30 pm</option>
                <option>3:30 pm</option>
                <option>8:20 pm</option>
                <option>9:00 am</option>
                <option>10:00 am</option>
              </select>
            </div>
          </div>

          <div class="row margen-arriba-uno">
            <div class="col-md-2">
              <label>DNI:</label>
              <input type="text" id="dni" class="form-control input-sm"  placeholder="DNI">
            </div>
            <div class="col-md-5">
              <label>Nombres:</label>
              <input type="text" id="nombre" class="form-control input-sm" placeholder="Nombres">
            </div>
            <div class="col-md-5">
              <label>Apellidos:</label>
              <input type="text" id="apellido" class="form-control input-sm"  placeholder="Apellidos">
            </div>
          </div>

          <div class="row margen-arriba-uno">
            <div class="col-md-3">
              <label>Fecha Actual:</label>
              <input type="text" id="fecha-actual" class="form-control input-sm" disabled>
            </div>
            <div class="col-md-3">
              <label>N° Asiento:</label>
              <div class="input-group input-group-sm">
                <span class="input-group-addon">N°</span>
                <input type="text" id="n-asiento" class="form-control" placeholder="Asiento">
              </div>
            </div>
            <div class="col-md-3">
              <label>Precio:</label>
              <div class="input-group input-group-sm">
                <span class="input-group-addon">S/.</span>
                <input type="text" id="precio" class="form-control" placeholder="Precio">
                <span class="input-group-addon">.00</span>
              </div>
            </div>
      
            <div class="col-md-3">
              <button class="btn btn-danger btn-sm margen-arriba-dos" style="width:100%" id="vender" data-target="#myModal">Vender Pasaje</button>
            </div>

          </div>

        </div>
      </div>
      
      

      <br>
      <div class="panel panel-default">
        <div class="panel-body">

          <div class="row">
            <div class="col-md-10">

              <div class="row fila-asiento">
                <div class="col-md-12">

                  <div class="row">
                    <div class="col-md-1">
                      <div class="panel panel-default panel-customize">
                        <div class="panel-body panel-body-customize">
                          <span class="glyphicon glyphicon-user"></span>&nbsp;45
                        </div>
                      </div>
                    </div>
                    <div class="col-md-1">
                      <div class="panel panel-default panel-customize">
                        <div class="panel-body panel-body-customize">
                          <span class="glyphicon glyphicon-user"></span>&nbsp;41
                        </div>
                      </div>
                    </div>
                    <div class="col-md-1">
                      <div class="panel panel-default panel-customize">
                        <div class="panel-body panel-body-customize">
                          <span class="glyphicon glyphicon-user"></span>&nbsp;37
                        </div>
                      </div>
                    </div>
                    <div class="col-md-1">
                      <div class="panel panel-default panel-customize">
                        <div class="panel-body panel-body-customize">
                          <span class="glyphicon glyphicon-user"></span>&nbsp;33
                        </div>
                      </div>
                    </div>
                    <div class="col-md-1">
                      <div class="panel panel-default panel-customize">
                        <div class="panel-body panel-body-customize">
                          <span class="glyphicon glyphicon-user"></span>&nbsp;29
                        </div>
                      </div>
                    </div>
                    <div class="col-md-1">
                      <div class="panel panel-default panel-customize">
                        <div class="panel-body panel-body-customize">
                          <span class="glyphicon glyphicon-user"></span>&nbsp;25
                        </div>
                      </div>
                    </div>
                    <div class="col-md-1">
                      <div class="panel panel-default panel-customize">
                        <div class="panel-body panel-body-customize">
                          <span class="glyphicon glyphicon-user"></span>&nbsp;21
                        </div>
                      </div>
                    </div>
                    <div class="col-md-1">
                      <div class="panel panel-default panel-customize">
                        <div class="panel-body panel-body-customize">
                          <span class="glyphicon glyphicon-user"></span>&nbsp;17
                        </div>
                      </div>
                    </div>
                    <div class="col-md-1">
                      <div class="panel panel-default panel-customize">
                        <div class="panel-body panel-body-customize">
                          <span class="glyphicon glyphicon-user"></span>&nbsp;13
                        </div>
                      </div>
                    </div>
                    <div class="col-md-1">
                      <div class="panel panel-default panel-customize">
                        <div class="panel-body panel-body-customize">
                          <span class="glyphicon glyphicon-user"></span>&nbsp;9
                        </div>
                      </div>
                    </div>
                    <div class="col-md-1">
                      <div class="panel panel-default panel-customize">
                        <div class="panel-body panel-body-customize">
                          <span class="glyphicon glyphicon-user"></span>&nbsp;5
                        </div>
                      </div>
                    </div>
                    <div class="col-md-1">
                      <div class="panel panel-default panel-customize">
                        <div class="panel-body panel-body-customize">
                          <span class="glyphicon glyphicon-user"></span>&nbsp;1
                        </div>
                      </div>
                    </div>
                  </div>

                </div>
              </div>

              <div class="row fila-asiento">
            <div class="col-md-12">

              <div class="row">
                <div class="col-md-1">
                  <div class="panel panel-default panel-customize">
                    <div class="panel-body panel-body-customize">
                      <span class="glyphicon glyphicon-user"></span>&nbsp;46
                    </div>
                  </div>
                </div>
                <div class="col-md-1">
                  <div class="panel panel-default panel-customize">
                    <div class="panel-body panel-body-customize">
                      <span class="glyphicon glyphicon-user"></span>&nbsp;42
                    </div>
                  </div>
                </div>
                <div class="col-md-1">
                  <div class="panel panel-default panel-customize">
                    <div class="panel-body panel-body-customize">
                      <span class="glyphicon glyphicon-user"></span>&nbsp;38
                    </div>
                  </div>
                </div>
                <div class="col-md-1">
                  <div class="panel panel-default panel-customize">
                    <div class="panel-body panel-body-customize">
                      <span class="glyphicon glyphicon-user"></span>&nbsp;34
                    </div>
                  </div>
                </div>
                <div class="col-md-1">
                  <div class="panel panel-default panel-customize">
                    <div class="panel-body panel-body-customize">
                      <span class="glyphicon glyphicon-user"></span>&nbsp;30
                    </div>
                  </div>
                </div>
                <div class="col-md-1">
                  <div class="panel panel-default panel-customize">
                    <div class="panel-body panel-body-customize">
                      <span class="glyphicon glyphicon-user"></span>&nbsp;26
                    </div>
                  </div>
                </div>
                <div class="col-md-1">
                  <div class="panel panel-default panel-customize">
                    <div class="panel-body panel-body-customize">
                      <span class="glyphicon glyphicon-user"></span>&nbsp;22
                    </div>
                  </div>
                </div>
                <div class="col-md-1">
                  <div class="panel panel-default panel-customize">
                    <div class="panel-body panel-body-customize">
                      <span class="glyphicon glyphicon-user"></span>&nbsp;18
                    </div>
                  </div>
                </div>
                <div class="col-md-1">
                  <div class="panel panel-default panel-customize">
                    <div class="panel-body panel-body-customize">
                      <span class="glyphicon glyphicon-user"></span>&nbsp;14
                    </div>
                  </div>
                </div>
                <div class="col-md-1">
                  <div class="panel panel-default panel-customize">
                    <div class="panel-body panel-body-customize">
                      <span class="glyphicon glyphicon-user"></span>&nbsp;10
                    </div>
                  </div>
                </div>
                <div class="col-md-1">
                  <div class="panel panel-default panel-customize">
                    <div class="panel-body panel-body-customize">
                      <span class="glyphicon glyphicon-user"></span>&nbsp;6
                    </div>
                  </div>
                </div>
                <div class="col-md-1">
                  <div class="panel panel-default panel-customize">
                    <div class="panel-body panel-body-customize">
                      <span class="glyphicon glyphicon-user"></span>&nbsp;2
                    </div>
                  </div>
                </div>
              </div>

              
            </div>
          </div>

          <div class="row fila-asiento ">
            <div class="col-md-12">

              <div class="row">
                <div class="col-md-1">
                  <div class="panel panel-default panel-customize">
                    <div class="panel-body panel-body-customize">
                      <span class="glyphicon glyphicon-user"></span>&nbsp;48
                    </div>
                  </div>
                </div>
                <div class="col-md-1">
                  <div class="panel panel-default panel-customize">
                    <div class="panel-body panel-body-customize">
                      <span class="glyphicon glyphicon-user"></span>&nbsp;44
                    </div>
                  </div>
                </div>
                <div class="col-md-1">
                  <div class="panel panel-default panel-customize">
                    <div class="panel-body panel-body-customize">
                      <span class="glyphicon glyphicon-user"></span>&nbsp;40
                    </div>
                  </div>
                </div>
                <div class="col-md-1">
                  <div class="panel panel-default panel-customize">
                    <div class="panel-body panel-body-customize">
                      <span class="glyphicon glyphicon-user"></span>&nbsp;36
                    </div>
                  </div>
                </div>
                <div class="col-md-1">
                  <div class="panel panel-default panel-customize">
                    <div class="panel-body panel-body-customize">
                      <span class="glyphicon glyphicon-user"></span>&nbsp;32
                    </div>
                  </div>
                </div>
                <div class="col-md-1">
                  <div class="panel panel-default panel-customize">
                    <div class="panel-body panel-body-customize">
                      <span class="glyphicon glyphicon-user"></span>&nbsp;28
                    </div>
                  </div>
                </div>
                <div class="col-md-1">
                  <div class="panel panel-default panel-customize">
                    <div class="panel-body panel-body-customize">
                      <span class="glyphicon glyphicon-user"></span>&nbsp;24
                    </div>
                  </div>
                </div>
                <div class="col-md-1">
                  <div class="panel panel-default panel-customize">
                    <div class="panel-body panel-body-customize">
                      <span class="glyphicon glyphicon-user"></span>&nbsp;20
                    </div>
                  </div>
                </div>
                <div class="col-md-1">
                  <div class="panel panel-default panel-customize">
                    <div class="panel-body panel-body-customize">
                      <span class="glyphicon glyphicon-user"></span>&nbsp;16
                    </div>
                  </div>
                </div>
                <div class="col-md-1">
                  <div class="panel panel-default panel-customize">
                    <div class="panel-body panel-body-customize">
                      <span class="glyphicon glyphicon-user"></span>&nbsp;12
                    </div>
                  </div>
                </div>
                <div class="col-md-1">
                  <div class="panel panel-default panel-customize">
                    <div class="panel-body panel-body-customize">
                      <span class="glyphicon glyphicon-user"></span>&nbsp;8
                    </div>
                  </div>
                </div>
                <div class="col-md-1">
                  <div class="panel panel-default panel-customize">
                    <div class="panel-body panel-body-customize">
                      <span class="glyphicon glyphicon-user"></span>&nbsp;4
                    </div>
                  </div>
                </div>
              </div>
              
            </div>
          </div>

          <div class="row fila-asiento">
            <div class="col-md-12">

              <div class="row">
                <div class="col-md-1">
                  <div class="panel panel-default panel-customize">
                    <div class="panel-body panel-body-customize">
                      <span class="glyphicon glyphicon-user"></span>&nbsp;47
                    </div>
                  </div>
                </div>
                <div class="col-md-1">
                  <div class="panel panel-default panel-customize">
                    <div class="panel-body panel-body-customize">
                      <span class="glyphicon glyphicon-user"></span>&nbsp;43
                    </div>
                  </div>
                </div>
                <div class="col-md-1">
                  <div class="panel panel-default panel-customize">
                    <div class="panel-body panel-body-customize">
                      <span class="glyphicon glyphicon-user"></span>&nbsp;39
                    </div>
                  </div>
                </div>
                <div class="col-md-1">
                  <div class="panel panel-default panel-customize">
                    <div class="panel-body panel-body-customize">
                      <span class="glyphicon glyphicon-user"></span>&nbsp;35
                    </div>
                  </div>
                </div>
                <div class="col-md-1">
                  <div class="panel panel-default panel-customize">
                    <div class="panel-body panel-body-customize">
                      <span class="glyphicon glyphicon-user"></span>&nbsp;31
                    </div>
                  </div>
                </div>
                <div class="col-md-1">
                  <div class="panel panel-default panel-customize">
                    <div class="panel-body panel-body-customize">
                      <span class="glyphicon glyphicon-user"></span>&nbsp;27
                    </div>
                  </div>
                </div>
                <div class="col-md-1">
                  <div class="panel panel-default panel-customize">
                    <div class="panel-body panel-body-customize">
                      <span class="glyphicon glyphicon-user"></span>&nbsp;23
                    </div>
                  </div>
                </div>
                <div class="col-md-1">
                  <div class="panel panel-default panel-customize">
                    <div class="panel-body panel-body-customize">
                      <span class="glyphicon glyphicon-user"></span>&nbsp;19
                    </div>
                  </div>
                </div>
                <div class="col-md-1">
                  <div class="panel panel-default panel-customize">
                    <div class="panel-body panel-body-customize">
                      <span class="glyphicon glyphicon-user"></span>&nbsp;15
                    </div>
                  </div>
                </div>
                <div class="col-md-1">
                  <div class="panel panel-default panel-customize">
                    <div class="panel-body panel-body-customize">
                      <span class="glyphicon glyphicon-user"></span>&nbsp;11
                    </div>
                  </div>
                </div>
                <div class="col-md-1">
                  <div class="panel panel-default panel-customize">
                    <div class="panel-body panel-body-customize">
                      <span class="glyphicon glyphicon-user"></span>&nbsp;7
                    </div>
                  </div>
                </div>
                <div class="col-md-1">
                  <div class="panel panel-default panel-customize">
                    <div class="panel-body panel-body-customize">
                      <span class="glyphicon glyphicon-user"></span>&nbsp;3
                    </div>
                  </div>
                </div>
              </div>

            </div>
          </div>

            </div>

            <div class="col-md-2">
              <div class="panel panel-default">
                <div class="panel-body">
                  <h1 class="text-center">BUS</h1>
                  <h4 class="text-center">0293898</h4>
                </div>  
              </div>
            </div>
          </div>
          

          

        </div>
      </div>

    </div>

    <div id="modal-template">

    </div>

      <?php
        }
        else{

      ?>

      <div class="container">
        <div class="row margen-arriba-3">
          <div class="col-md-6 col-md-offset-3">
            <p class="text-center font-size-3">
              <span class="glyphicon glyphicon-remove"></span>
            </p>
            <p class="text-center font-size-2">
              Logueate para Ingresar a esta sección.
            </p>
            <p class="text-center margen-arriba-uno">
              <a href="admin.php" class="btn btn-default btn-sm btn-primary"> Logueate </a>
            </p>
            
          </div>
        </div>
      </div>
   
      <?php
        }
      ?>
     
    

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>-->
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bower_components/jquery/dist/jquery.min.js"></script>
    <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="http://ajax.aspnetcdn.com/ajax/jquery.templates/beta1/jquery.tmpl.min.js"></script>

    <script id="modal-venta" type="text/x-jquery-template">
      <div class="modal fade" id="myModal">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
              <h4 class="modal-title">Venta de Pasaje: (Detalle)</h4>
            </div>
            <div class="modal-body">
              <p class="text-justify">
                La venta de este pasaje se ha hecho correctamente, para poder terminar el proceso de venta
                debes imprimir el boleto.
              </p>
              <p class="text-center"><b>Origen:</b> ${origen}</p>
              <p class="text-center"><b>Destino:</b> ${destino}</p>
              <p class="text-center"><b>Fecha de Salida:</b> ${fechaSalida}</p>
              <p class="text-center"><b>Hora de Salida:</b> ${horaSalida}</p>
              <p class="text-center"><b>Documento (DNI):</b> ${dni}</p>
              <p class="text-center"><b>Pasajero:</b> ${nombres} ${apellidos}</p>
              <p class="text-center"><b>N° Asiento:</b> ${nAsiento}</p>
              <p class="text-center"><b>Precio:</b> ${precio}</p>
              <p class="text-center"><b>Fecha de Venta:</b> ${fechaActual}</p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-primary btn-sm" data-dismiss="modal" id="imp">Imprimir Boleto</button>
            </div>
          </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
      </div><!-- /.modal -->
    </script>

    <script type="text/javascript">

    function diaActual(){
      var ahora = new Date();

      var dia;
      var mes = String(ahora.getMonth()+1);
      var anio = ahora.getFullYear();

      if(ahora.getDate()< 10){
        dia = String("0"+ahora.getDate());
      }
      else{
        dia = ahora.getDate();
      }

      $('#fecha-actual').val(dia+"/"+mes+"/"+anio);
      $('#fecha-salida').val(anio+"-"+mes+"-"+dia);
    }
    
    diaActual();
    

    $('#salir').on('click', saliendo);

    function saliendo(){

      $.ajax({
        type: "GET",
        url: 'logout.php',
        success: function(data){
          window.location.href = data;
        }
      });
    }

    $('#dni').on('keypress', consultandoAjax);

    function consultandoAjax(e){

      if(e.which == 13){
        var dniAjax = $('#dni').val();

        $.ajax({
          data: {'dniConsulta':dniAjax},
          type:'GET',
          url:'consultando-ajax.php',
          dataType: 'json',
          success: function(data){
            console.log(data);
          }
        });
      }
    }
    

    // enlazador con la función vendiendo
    $('#vender').on('click', vendiendo);

    function vendiendo(){

      //objeto que contiene todos los datos del formulario de ventas
      var pasajeVenta = {
        origen: $('#origen').val(),
        destino: $('#destino').val(),
        fechaSalida: $('#fecha-salida').val(),
        horaSalida: $('#hora-salida').val(),
        dni: $('#dni').val(),
        nombres: $('#nombre').val(),
        apellidos: $('#apellido').val(),
        fechaActual: $('#fecha-actual').val(),
        nAsiento: $('#n-asiento').val(),
        precio: $('#precio').val()
      };

      // ajax para pasar los datos del formulario
      $.ajax({
        data: pasajeVenta,
        type:'POST',
        url:'registro.php',
        success: function(data){
          console.log(data);
          $('#modal-venta').tmpl(pasajeVenta).appendTo('#modal-template');
          $('#myModal').modal('show');

          $('#imp').on('click', refresh);

        }
      });

    }

    function refresh(){
      window.location.href='ventas.php';
      console.log('hola');
    }

    </script>
  </body>
</html>

