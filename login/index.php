<?php
	require_once('../vars/db_login.php');
	require_once('../smarty.php');
	session_start();
	if(!isset($_SESSION['username'])) header('location: login.php');
	else{
		$smarty->assign('sesion', "Cerrar Sesion");
		$smarty->assign('opciones', "Mi cuenta");
		$smarty->assign('todo', "logout.php");
		$smarty->assign('titulo', "Perfil de ".$_SESSION['username']);
		$smarty->display('../templates/head-login.tpl');
		$smarty->display('templates/clientes.tpl');
		$smarty->assign('info', " ");
		$smarty->display('../templates/footer.tpl');
	}


?>