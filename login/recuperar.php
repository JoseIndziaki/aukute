<?php
require_once('../vars/db_login.php');
require_once('../smarty.php');
$smarty->assign('opciones', "Login");
$smarty->assign('sesion', "Regístrate");
$smarty->assign('todo', "../register");
$smarty->assign('titulo', "Recuperar usuario o contraseña");
$smarty->display('../templates/head-login.tpl');
if(isset($_POST['recup']) && isset($_POST['correo'])){
	$opcion = $_POST['recup'];
	$email = $_POST['correo'];
	$conexion = mysqli_connect($dbhost, $dbuser, $dbpass, $db);
	$buscar = "SELECT * FROM usuarios WHERE email = '$email'";
	$result = $conexion->query($buscar) or die("error");
	if (mysqli_num_rows($result) > 0) {
		$row = mysqli_fetch_array($result);
		$user = $row['usuario'];
		if($opcion == 'user'){
			mail($email,"recuperar usuario","Usuario: ".$user, 'From:recuperar_aukute@gmail.com');
		}
		else if($opcion == 'pass'){
			$pass = rand(1, 100).$user;
			$cambiar = "UPDATE usuarios SET password = md5('$pass)' WHERE email = '$email'";
			$result = $conexion->query($cambiar) or die("error");
			if(mysqli_affected_rows($result) == 0){
				echo "<script>alert('Contraseña cambiada, revisa tu correo')</script>";
				mail($email,"recuperar contraseña","Nueva contraseña ".$pass." para: ".$user, 'From:recuperar_aukute@gmail.com');
			}
		}
	}
}

$smarty->display('templates/recuperar.tpl');
mysqli_close($conexion);

?>