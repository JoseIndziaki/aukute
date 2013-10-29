<?php
require('../smarty.php');
require('../vars/db_login.php');
session_start();

if(isset($_POST['user']) && isset($_POST['pass'])){
	$admin = $_POST['user'];
	$paswd = md5($_POST['pass']);
	$conexion = mysqli_connect($dbhost, $dbuser, $dbpass, $db);
	$result = $conexion->query("SELECT * FROM administracion WHERE username = '$admin' AND password = '$paswd'");
	if($result->num_rows >0){
		$_SESSION['admin'] = $admin;
		header('location: index.php');
	}
	else echo "<script>alert('Usuario y/o contraseña incorrectos')</script>";
	
}
$smarty->assign('home', '..');
$smarty->display('templates/login.tpl');



?>