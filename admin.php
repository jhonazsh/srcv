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

    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <p class="margen-arriba-uno color-text-concrete font-size-3 text-center">
            Empresa de Transportes Turismo Erick el Rojo
          </p>
        </div>
      </div>

      <div class="row margen-arriba-3">
        <div class="col-md-4 col-md-offset-4">
          <div class="panel panel-default">
            <div class="panel-body">
              <div class="row">
                <div class="col-md-12">
                  <label>Usuario:</label>
                  <input type="text" class="form-control input-sm" placeholder="Usuario" id="user">
                </div>
                <div class="col-md-12 margen-arriba-uno">
                  <label>Contraseña:</label>
                  <input type="password" class="form-control input-sm" placeholder="Contraseña" id="pass">
                </div>
                <div class="col-md-12 margen-arriba-uno">
                  <button class="btn btn-primary btn-sm btn-ancho" id="ingresar">Ingresar</button>
                </div>
                <div class="col-md-12 margen-arriba-uno text-center">
                  <span>* Has olvidado tu contraseña? <a href="">!has click aquí!</a></span>
                </div>
              </div>
            </div>
          </div>
          
        </div>
      </div>

      <div class="row">
        <div class="col-md-4 col-md-offset-4">
          <p class="text-center">
            <img src="img/rojo.jpg">
          </p>
          
        </div>
      </div>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>-->
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bower_components/jquery/dist/jquery.min.js"></script>
    <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <script>
      $('#ingresar').on('click', ingresando);
      //$(document).on('keypress', ingresando)

      function ingresando(){

        //if(e.which == 13){
        //  ingresandoAjax();
        //}

        ingresandoAjax();
        
      }

      function ingresandoAjax(){
        $.ajax({
          data: {usuario: $('#user').val(), pass: $('#pass').val()},
          type: 'POST',
          url: 'login.php',
          success: function(data){
            console.log(data);
            window.location.href = data;
          }
        });
      }
      
      
    </script>
  </body>
</html>