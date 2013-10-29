<?php
session_start();
require_once('../vars/db_login.php');
require_once('../smarty.php');
$smarty->assign('fecha', date('Y-m-d'));
$smarty->display('templates/buscar.tpl');

?>