<?php
session_start();
$llegada = $_POST['desde'];
$salida = $_POST['hasta'];
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
$smarty->assign('titulo', 'Fin de la Reservación');
$smarty->display('../templates/head-login.tpl');
$fecha = date('d-m-Y');
$conexion = mysqli_connect($dbhost, $dbuser,$dbpass,$db) or die("no se conecta");
$consulta = "INSERT INTO reservas(fecha, hab, costo, correo, tels) VALUES ('$fecha', $idhab, $precio, '$email', '$tels')";
$conexion->query($consulta);
if($conexion->affected_rows ==1){
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
	$smarty->assign('preciohab', $precio/$dias);
	$smarty->display('templates/finbueno.tpl');
}
else{
	$smarty->display('templates/finerror.tpl');
}

$smarty->display('../templates/footer.tpl');

mysqli_close($conexion);


?>