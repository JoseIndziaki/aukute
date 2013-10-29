<?php
session_start();
require_once('../vars/db_login.php');
require_once('../smarty.php');
$hab = $_GET['id'];
$dias = $_GET['dias'];
$desde = $_COOKIE['desde'];
$hasta = $_COOKIE['hasta'];
if(isset($_SESSION['username'])){
	$smarty->assign('sesion', 'Cerrar Sesión');
	$smarty->assign('todo', '../login/logout.php');
	$smarty->assign('opciones', 'Mi cuenta');
}
else{
	$smarty->assign('sesion', 'Regístrate');
	$smarty->assign('todo', '../register');
	$smarty->assign('opciones', 'Login');
}
$smarty->assign('titulo', 'Datos Generales');
$smarty->display('../templates/head-login.tpl');
$conexion = mysqli_connect($dbhost, $dbuser,$dbpass,$db) or die("no se conecta");
$buscar = "SELECT * FROM habitaciones WHERE id=$hab";
$result = $conexion->query($buscar);
if(mysqli_num_rows($result) > 0){
	$row = mysqli_fetch_array($result);
		$precio = $row['precio']*$dias;
	}
$smarty->assign('precio', $precio);
$smarty->assign('dias', $dias);
$smarty->assign('idhab', $hab);
$smarty->assign('desde', $desde);
$smarty->assign('hasta', $hasta);
$smarty->display('templates/datosreserva.tpl');
$smarty->display('../templates/footer.tpl');

mysqli_close($conexion);
?>