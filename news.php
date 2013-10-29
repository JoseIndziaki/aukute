
<?php
	session_start();
	require_once('vars/db_login.php');
	if(isset($_GET['id']) && !empty($_GET['id'])) $id = $_GET['id'];
	else $id = 0;
	require_once('smarty.php');
	
	$conexion = mysqli_connect($dbhost, $dbuser,$dbpass,$db) or die("no se conecta");
	$query = "SELECT * FROM news WHERE id=$id";
	$rows = $conexion->query($query);
			if(isset($_SESSION['username'])){
				$smarty->assign('todo', 'login/logout.php');
				$smarty->assign('sesion', 'Cerrar Sesión');
				$smarty->assign('opciones', 'Mi cuenta');
			}
			else{
				$smarty->assign('todo', 'register');
				$smarty->assign('opciones', 'Login');
				$smarty->assign('sesion', 'Regístrate');
			}
	if(mysqli_num_rows($rows) == 1){
		$row = mysqli_fetch_array($rows);
		$smarty->assign('titulo', $row['titulo']);
		$smarty->display('templates/header.tpl');
		$smarty->assign('titulo', $row['titulo']);
		$smarty->assign('fecha', $row['fecha']);
		$smarty->assign('noticia', $row['noticia']);
		$smarty->display('templates/noticias.tpl');
	}
	mysqli_close($conexion);
	$smarty->display('templates/footer.tpl');

?>