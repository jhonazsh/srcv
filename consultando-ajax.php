<?php

include("conexionBd.php");

$dni_consulta = $_POST['dniConsulta'];

$consulta = mysql_query("SELECT * FROM clientes WHERE DNI='$dni_consulta' ",$con);

$row = mysql_fetch_array($consulta);
echo $dni_consulta;
?>
