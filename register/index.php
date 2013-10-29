<?php
require_once('../smarty.php');
require_once('../vars/db_login.php');
	$smarty->assign('opciones', "Login");
	$smarty->assign('sesion', "Registro");
	$smarty->assign('todo', ".");
$smarty->assign('titulo', "Registro");
$smarty->display('../templates/head-login.tpl');
$smarty->display('../templates/register.tpl');
$smarty->display('../templates/footer.tpl');

?>