<?php
	session_start();
	require_once('vars/db_login.php');
	if(isset($_GET['nota']) && !empty($_GET['nota'])) $nota = $_GET['nota'];
	else $nota = 0;
	require_once('smarty.php');
	require_once('vars/Strings.php');
	if(isset($_GET['id']) && !empty($_GET['id'])) $id = $_GET['id'];
	else {
		$id='index';
	}
	switch($id){
		case 'index': $titulo = 'Aukute Inn Hotel'; break;
		case 'reserv': $titulo = 'Reservaciones'; break;
		case 'contact': $titulo = 'Contacto'; break;
		case 'us': $titulo = 'Nosotros'; break;
		case 'news': $titulo = 'Recientes'; break;
		default: $titulo = '404 no encontrado'; break;
	}
	
	if(isset($_SESSION['username'])){
		$smarty->assign('sesion', 'Cerrar Sesión');
		$smarty->assign('todo', 'login/logout.php');
		$smarty->assign('opciones', 'Mi cuenta');
	}
	else{
		$smarty->assign('opciones', 'Login');
		$smarty->assign('todo', 'register');
		$smarty->assign('sesion', 'Regístrate');
	}
	$smarty->assign('titulo', $titulo);
	$smarty->display('templates/header.tpl');
	
	if($id == 'contact'){
		$blog = $form;
	}
	else if($id == 'index'){
		$blog = $slide;
	}
	else if($id == 'us'){
		$blog = $us;
	}
	else if($id == 'reserv'){
		$blog = $reserv;
	}
	else if($id == 'news'){
		
		$conexion = mysqli_connect($dbhost, $dbuser,$dbpass,$db) or die("no se conecta");
		$query = "SELECT * FROM news ORDER BY id DESC LIMIT 4";
		$rows = mysqli_query($conexion,$query);
		while ($row = mysqli_fetch_array($rows)) {
			$notas[] = $row;
		}
		$smarty->assign('post', $notas);
		$smarty->display('posts.tpl');
		mysqli_close($conexion);
			$blog = "";
	}
	else{
		$blog = "Error 404, página no encontrada";
	}
	$smarty->assign('var', $blog);
	$smarty->display('templates/pla-ini.tpl');
	if($id == 'index'){
		$conexion = mysqli_connect($dbhost, $dbuser,$dbpass,$db) or die("no se conecta");
		$query = "SELECT * FROM general WHERE id = 1";
		$rows = mysqli_query($conexion,$query);
		while ($row = mysqli_fetch_array($rows)) {
			$notas = $row['bienvenida'];
		}
		$smarty->assign('bienv', $notas);
		$smarty->display('templates/bienvenida.tpl');
		}
		
	
	$smarty->display('templates/comentarios.tpl');
	$smarty->assign('info', $foot);
	$smarty->display('templates/footer.tpl');
?>