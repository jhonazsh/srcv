<?php require_once 'ti.php' ?>

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
                  <li><a href="reporte-ventas.php">De Ventas</a></li>
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

    <?php startblock('cuerpo') ?>

    <?php endblock() ?>

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

    <?php startblock('js') ?>
    <?php endblock() ?>

  </body>
</html>