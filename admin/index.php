<?php
require('../smarty.php');
require('../vars/db_login.php');
session_start();

if(!isset($_SESSION['admin'])) header('location: login.php');

else $usuario = $_SESSION['admin'];

$conexion = mysqli_connect($dbhost, $dbuser, $dbpass, $db);

$usernum = mysqli_num_rows($conexion->query("SELECT * FROM usuarios"));
$visitas = 0;
$visitamas = 0;
while($us = mysqli_fetch_array($conexion->query("SELECT * FROM usuarios"))){
	$vi2 = $us['visitas'];
	if($vi2 >= $visitamas) $visitamas = $vi2;
	$visitas = $visitas+$vi2;
}
$freq = mysqli_num_rows($conexion->query("SELECT * FROM usuarios WHERE visitas = $visitamas"));
$reservas = mysqli_num_rows($conexion->query("SELECT * FROM reservas"));
$smarty->assign('usernum', $usernum);
$smarty->assign('visitas', $visitas);
$smarty->assign('freq', $freq);
$smarty->assign('reservas', $reservas);
$smarty->display('templates/index.tpl');

?>