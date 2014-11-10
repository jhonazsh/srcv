<?php
error_reporting(E_ALL ^ E_DEPRECATED);
include("conexionBd.php");

$origen = $_POST['origen'];
$destino = $_POST['destino'];
$fecha_salida = $_POST['fechaSalida'];
$hora_salida = $_POST['horaSalida'];
$dni = $_POST['dni'];
$nombres = $_POST['nombres'];
$apellidos = $_POST['apellidos'];
$fecha_actual = $_POST['fechaActual'];
$asiento = $_POST['nAsiento'];
$precio = $_POST['precio'];


if(isset($origen)&&    !empty ($origen)&&
   isset($destino)&&  !empty ($destino)&&
   isset($fecha_salida)&&        !empty ($fecha_salida)&&
   isset($hora_salida)&&      !empty ($hora_salida)&&
   isset($dni)&&         !empty ($_POST['dni']) &&
   isset($nombres)&&         !empty ($nombres)&&
   isset($apellidos)&&         !empty ($apellidos)&&
   isset($fecha_actual)&&         !empty ($fecha_actual)&&
   isset($asiento)&&         !empty ($asiento)&&
   isset($precio)&&         !empty ($precio)
   )   
{
$con=mysql_connect($host,$user,$pw)or die("Problemas al conectar");
mysql_select_db($db,$con)or die("Problemas al conectar la bd");
mysql_query("INSERT INTO ventas(ORIGEN,DESTINO,FECHA_SALIDA,HORA_SALIDA,DNI,NOMBRES,APELLIDOS,FECHA_ACTUAL,ASIENTO,PRECIO) VALUES ('$_POST[origen]','$_POST[destino]',
	        '$_POST[fechaSalida]','$_POST[horaSalida]','$_POST[dni]','$_POST[nombres]','$_POST[apellidos]',
	        '$_POST[fechaActual]','$_POST[nAsiento]','$_POST[precio]')",$con);

mysql_query("INSERT INTO clientes(NOMBRES,APELLIDOS,DNI) VALUES ('$_POST[nombres]','$_POST[apellidos]','$_POST[dni]')",$con);

echo "Datos insertados"; 

}else
{
echo "llene todos sus datos"; 
}

?>