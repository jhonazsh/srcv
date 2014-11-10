<?php

include("conexionBd.php");

$dni_consulta = $_GET['dniConsulta'];
$dni_json = array();
$i=0;

$consulta = mysqli_query($con,"SELECT * FROM clientes");

 
while($row = mysqli_fetch_array($consulta,MYSQLI_ASSOC)){
    $dni_json[$i] = $row;
    $i++;
}

echo json_encode($dni_json);

?>