<?php
session_start();
 //require_once('conexion.php');
$user = $_POST['usuario'];
$pass = $_POST['pass'];

$usuarios = array(
		array("jhonazsh","medina11"),
		array("marin","marin"),
	);
 //$consulta = "SELECT * FROM usuario WHERE correo='$correo' and clave='$clave'";
//$query = mysql_query($consulta,$conexion); 
//if($row = mysql_fetch_assoc($query)) { $_SESSION['nombre'] = $row['nombre']; $_SESSION['apellido'] = $row['apellido'];

if($user == $usuarios[0][0] and $pass == $usuarios[0][1]){
	$_SESSION['admin'] = $user;
	echo 'admin-index.php';
}

else{
	echo "error";
}

?>