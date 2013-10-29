<?php
require_once('../vars/db_login.php');
require_once('../smarty.php');

session_start();
	$smarty->assign('opciones', "Login");
	$smarty->assign('sesion', "Regístrate");
	$smarty->assign('todo', "../register");
$smarty->assign('titulo', "Login");
$smarty->display('../templates/head-login.tpl');
$smarty->display('../templates/login.tpl');
if(!empty($_POST['user']) && !empty($_POST['pass'])){
	$conexion = mysqli_connect($dbhost, $dbuser, $dbpass,$db);
	if (!$conexion) die("Unable to connect to MySQL: " . mysqli_error());
	
	$usuario = mysqli_real_escape_string($conexion,trim($_REQUEST['user']));
	$password = md5(mysqli_real_escape_string($conexion,trim($_REQUEST['pass'])));
	
	$query = "SELECT * FROM usuarios WHERE usuario='$usuario' AND password='$password'";
	$result = $conexion->query($query);
	
	if (mysqli_num_rows($result) == 1) {
		$row = mysqli_fetch_array($result);
		$_SESSION['username'] = $row['usuario'];
		header('location: index.php');
	}
	else echo"<script>alert('Usuario o contraseña incorrectos')</script>";
}
	$smarty->assign('info', " ");
$smarty->display('../templates/footer.tpl');


mysqli_close($conexion);
?>