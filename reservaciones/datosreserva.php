<?php
session_start();
$precio = $_POST['precio'];
$dias = $_POST['dias'];
$idhab = $_POST['idhab'];
$nombre = $_POST['nombre'];
$apell = $_POST['apellidos'];
$nombrecomp = $nombre." ".$apell;
$email = $_POST['email'];
$telcasa = $_POST['telcasa'];
$cel = $_POST['celular'];
$telefono = $telcasa." ".$cel;
$tipo = $_POST['tipotarj'];
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
$smarty->assign('titulo', 'Datos Generales');
$smarty->display('../templates/head-login.tpl');
$conexion = mysqli_connect($dbhost, $dbuser,$dbpass,$db) or die("no se conecta");
$smarty->assign('nombrecomp', $nombrecomp);
$smarty->assign('correo', $email);
$smarty->assign('telefonos', $telefono);
$smarty->assign('tipo', $tipo);
$smarty->assign('precio', $precio);
$smarty->assign('dias', $dias);
$smarty->assign('idhab', $idhab);
$smarty->display('templates/datostarjeta.tpl');
$smarty->display('../templates/footer.tpl');

?>