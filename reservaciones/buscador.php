<?php
session_start();
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
if(isset($_POST['desde']) && isset($_POST['hasta']) && isset($_POST['habitaciones']) && isset($_POST['adultos']) && isset($_POST['ninos'])){
	$desde = $_POST['desde'];
	$hasta = $_POST['hasta'];
	$ninos = $_POST['ninos'];
	$adultos = $_POST['adultos'];
	$dias = (strtotime($hasta)-strtotime($desde))/86400;
	$dias = abs($dias);
	$num = $_POST['habitaciones'];
	$conexion = mysqli_connect($dbhost, $dbuser,$dbpass,$db) or die("no se conecta");
	$query = "SELECT * FROM habitaciones WHERE camas>=$num AND hasta<'$desde' AND adultos>=$adultos AND ninos>=$ninos";
	$rows = mysqli_query($conexion,$query) or die("ncdjs");
	if(mysqli_num_rows($rows) > 0)
	while ($row = mysqli_fetch_array($rows)) {
		$cuartos[] = $row;
	}
	else{
		$cuartos="";
		echo "<p>No se encontraron habitaciones</p>";
	}
	setcookie('desde',$desde, time()+60*60);
	setcookie('hasta',$hasta, time()+60*60);
	$smarty->assign('cuarto', $cuartos);
	$smarty->assign('dias', $dias);
	$smarty->display('templates/buscador.tpl');
	$smarty->display('../templates/footer.tpl');
}

mysqli_close($conexion);
?>