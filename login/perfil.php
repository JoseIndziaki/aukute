<?php
session_start();
$band = 0;
$un = $_SESSION['username'];
require('../vars/db_login.php');
$conexion = mysqli_connect($dbhost, $dbuser, $dbpass, $db);

if(isset($_POST['nombre']) && !empty($_POST['nombre'])){
	$nombre = $_POST['nombre'];
	$conexion->query("UPDATE usuarios SET nombre = '$nombre' WHERE usuario = '$un'");
	$band = 1;
}
if(isset($_POST['pass2']) && !empty($_POST['pass2'])){
	$pass = $_POST['pass2'];
	$conexion->query("UPDATE usuarios SET password = md5('$pass') WHERE usuario = '$un'");
	$band = 1;
}
if(isset($_POST['correo']) && !empty($_POST['correo'])){
	$mail = $_POST['correo'];
	$conexion->query("UPDATE usuarios SET email = '$mail' WHERE usuario = '$un'");
	$band = 1;
}
if($band==1) echo "<script>alert('Datos Cambiados Correctamente')</script>";
	
$result = $conexion->query("SELECT * FROM usuarios WHERE usuario = '$un'");
$row = mysqli_fetch_array($result);
$name = $row['nombre'];
$correo = $row['email'];

mysqli_close($conexion);
	
require('../smarty.php');
$smarty->assign('name', $name);
$smarty->assign('correo', $correo);
$smarty->display('templates/perfil.tpl');
?>