<?php
error_reporting(E_ALL ^ E_DEPRECATED);
include("conexionBd.php");
if(isset($_POST['origen'])&&    !empty ($_POST['origen'])&&
   isset($_POST['destino'])&&  !empty ($_POST['destino'])&&
   isset($_POST['fecha_salida'])&&        !empty ($_POST['fecha_salida'])&&
   isset($_POST['hora_salida'])&&      !empty ($_POST['hora_salida'])&&
   isset($_POST['dni'])&&         !empty ($_POST['dni']) &&
   isset($_POST['nombres'])&&         !empty ($_POST['nombres'])&&
   isset($_POST['apellidos'])&&         !empty ($_POST['apellidos'])&&
   isset($_POST['fecha_actual'])&&         !empty ($_POST['fecha_actual'])&&
   isset($_POST['asiento'])&&         !empty ($_POST['asiento'])&&
   isset($_POST['precio'])&&         !empty ($_POST['precio'])
   )   
{
$con=mysql_connect($host,$user,$pw)or die("Problemas al conectar");
mysql_select_db($db,$con)or die("Problemas al conectar la bd");
mysql_query("INSERT INTO ventas(ORIGEN,DESTINO,FECHA_SALIDA,HORA_SALIDA,DNI,NOMBRES,APELLIDOS,FECHA_ACTUAL,ASIENTO,PRECIO) VALUES ('$_POST[origen]','$_POST[destino]',
	        '$_POST[fecha_salida]','$_POST[hora_salida]','$_POST[dni]','$_POST[nombres]','$_POST[apellidos]',
	        '$_POST[fecha_actual]','$_POST[asiento]','$_POST[precio]')",$con);

echo "Datos insertados"; 

}else
{
echo "llene todos sus datos"; 
}

?>