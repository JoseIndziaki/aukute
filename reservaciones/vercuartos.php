<?php
session_start();
require_once('../vars/db_login.php');
require_once('../smarty.php');
$smarty->display('head-reserv.tpl');
$smarty->assign('nombre', $_SESSION['username']);
$conexion = mysqli_connect($dbhost, $dbuser,$dbpass,$db) or die("no se conecta");
$query = "SELECT * FROM habitaciones WHERE ocupado=0";
$rows = mysqli_query($conexion,$query) or die("ncdjs");
while ($row = mysqli_fetch_array($rows)) {
	$cuartos[] = $row;
}
$smarty->assign('cuarto', $cuartos);
$smarty->display('buscar.tpl');

mysqli_close($conexion);
?>