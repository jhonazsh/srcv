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
              <input type="text" class="form-control input-sm" placeholder="Origen" value="Trujillo" disabled>
            </div>
            <div class="col-md-3">
              <label>Destino:</label>
              <select class="form-control input-sm">
                <option>Trujillo</option>
                <option>Lima</option>
                <option>Máncora</option>
                <option>Chiclayo</option>
                <option>Piura</option>
              </select>
            </div>
            <div class="col-md-4">
              <label>Fecha de Salida:</label>
              <input type="text" class="form-control input-sm" placeholder="Fecha de Salida">
            </div>
            <div class="col-md-2">
              <label>Hora de Salida:</label>
              <input type="text" class="form-control input-sm" placeholder="Hora de Salida">
            </div>
          </div>

          <div class="row margen-arriba-uno">
            <div class="col-md-2">
              <label>DNI:</label>
              <input type="text" class="form-control input-sm"  placeholder="DNI">
            </div>
            <div class="col-md-5">
              <label>Nombres:</label>
              <input type="text" class="form-control input-sm" placeholder="Nombres">
            </div>
            <div class="col-md-5">
              <label>Apellidos:</label>
              <input type="text" class="form-control input-sm"  placeholder="Apellidos">
            </div>
          </div>

          <div class="row margen-arriba-uno">
            <div class="col-md-3">
              <label>Fecha Actual:</label>
              <input type="text" class="form-control input-sm" id="exampleInputEmail1" placeholder="Fecha Actual">
            </div>
            <div class="col-md-3">
              <label>N° Asiento:</label>
              <input type="text" class="form-control input-sm" id="exampleInputPassword1" placeholder="N° Asiento">
            </div>
            <div class="col-md-3">
              <label>Precio:</label>
              <input type="text" class="form-control input-sm" id="exampleInputPassword1" placeholder="Precio">
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

          <div class="row fila-asiento margen-arriba-uno">
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
    <script type="text/javascript">

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

    </script>
  </body>
</html>

