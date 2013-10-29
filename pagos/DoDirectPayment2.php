<?php

/************************************************************
This is the main web page for the DoDirectPayment sample.
This page allows the user to enter name, address, amount,
and credit card information. It also accept input variable
paymentType which becomes the value of the PAYMENTACTION
parameter.

When the user clicks the Submit button, DoDirectPaymentReceipt.php
is called.

Called by index.html.

Calls DoDirectPaymentReceipt.php.

************************************************************/
// clearing the session before starting new API Call
session_start();
$idhab = $_POST['idhab'];
$llegada = $_POST['desde'];
$salida = $_POST['hasta'];
$dias = $_POST['dias'];
$nombre = $_POST['nombre'];
$ape = $_POST['apellidos'];
$email = $_POST['email'];
$casa = $_POST['telcasa'];
$celular = $_POST['celular'];
$tipo = $_POST['seguir'];

$nombrecomp = $nombre.' '.$ape;
$tels = $casa.', '.$celular;

$paymentType = 'sale';
$total = $_POST['precio'];


require('../smarty.php');
if(isset($_SESSION['username'])){
	$smarty->assign('sesion', 'Cerrar Sesión');
	$smarty->assign('todo', 'login/logout.php');
	$smarty->assign('opciones', 'Mi cuenta');
}
else{
	$smarty->assign('sesion', 'Regístrate');
	$smarty->assign('todo', '../register');
	$smarty->assign('opciones', 'Login');
}
$smarty->assign('titulo', 'Pago con PayPal');
$smarty->display('../templates/head-login.tpl');
$smarty->assign('paytype', $paymentType);
$smarty->assign('total', $total);

$smarty->assign('hab', $idhab);
$smarty->assign('dias', $dias);
$smarty->assign('desde', $llegada);
$smarty->assign('hasta', $salida);
$smarty->assign('email', $email);
$smarty->assign('tipo', $tipo);
$smarty->assign('telefonos', $tels);
$smarty->assign('nombcomp', $nombrecomp);
$smarty->display('templates/tarjeta.tpl');
$smarty->display('../templates/footer.tpl');

?>
