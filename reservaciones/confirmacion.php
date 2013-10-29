<?php
session_start();
$llegada = $_COOKIE['desde'];
$salida = $_COOKIE['hasta'];
$precio = $_POST['precio'];
$dias = $_POST['dias'];
$idhab = $_POST['idhab'];
$nombrecomp = $_POST['nomcomp'];
$email = $_POST['correo'];
$tels = $_POST['telefonos'];
$tipo = $_POST['tipo'];
require_once('../vars/db_login.php');
require_once('../smarty.php');
if(isset($_SESSION['username'])){
	$smarty->assign('sesion', 'Cerrar Sesión');
	$smarty->assign('todo', 'login/logout.php');
	$smarty->assign('opciones', 'Mi cuenta');
}
else{
	$smarty->assign('sesion', 'Regístrate');
	$smarty->assign('todo', '../register');
	$smarty->assign('opciones', 'Login');
}
$smarty->assign('titulo', 'Confirmación del Envío');
$smarty->display('../templates/head-login.tpl');
$conexion = mysqli_connect($dbhost, $dbuser,$dbpass,$db) or die("no se conecta");
$smarty->assign('llegada', $llegada);
$smarty->assign('salida', $salida);
$smarty->assign('nombrecomp', $nombrecomp);
$smarty->assign('correo', $email);
$smarty->assign('telefonos', $tels);
$smarty->assign('tipo', $tipo);
$smarty->assign('precio', $precio);
$smarty->assign('dias', $dias);
$smarty->assign('idhab', $idhab);
$smarty->assign('desde', $llegada);
$smarty->assign('hasta', $salida);
$smarty->display('templates/terminos.tpl');
$smarty->display('../templates/footer.tpl');

?>