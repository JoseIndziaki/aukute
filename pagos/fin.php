<?php
session_start();
$y = $_GET['id'];
require_once('../vars/db_login.php');
require_once('../smarty.php');
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
$smarty->assign('titulo', 'Buscar habitaciones');
$smarty->display('../templates/head-login.tpl');
if($y == "error") $smarty->assign('mensaje', "Por el momento nuestro servicio de correo no funciona muy bien pero su reservación fue exitosa");
else if($y == "succes") $smarty->assign('mensaje', "Los datos de su reservación se han enviado a su correo, favor de revisar su bandeja");
else $smarty->assign('mensaje', "Error 404, página no encontrada");
$smarty->display('templates/fin.tpl');
$smarty->display('../templates/footer.tpl');
?>