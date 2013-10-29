<?php /* Smarty version Smarty-3.1.14, created on 2013-10-13 22:59:24
         compiled from "..\templates\head-login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:27782524869f3c73357-35422267%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '21e9e6c50e440ed6ac5a57bfd128207c714b8109' => 
    array (
      0 => '..\\templates\\head-login.tpl',
      1 => 1381644719,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '27782524869f3c73357-35422267',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_524869f3d8c549_83224066',
  'variables' => 
  array (
    'titulo' => 0,
    'opciones' => 0,
    'todo' => 0,
    'sesion' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_524869f3d8c549_83224066')) {function content_524869f3d8c549_83224066($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</title>
<link rel="stylesheet" href="../css/style.css" type="text/css" />
<script>
function validarpass(){
var pass1 = document.getElementById('pass1').value;
var pass2 = document.getElementById('pass2').value;
	if(pass1 != pass2){
		alert('Las contraseñas no coinciden');
		return false;
	}
}
</script>
<script>
function validartels(){
var mail1 = document.getElementById('email').value;
var mail2 = document.getElementById('email2').value;
var casa = document.getElementById('telcasa').value;
var cel = document.getElementById('celular').value;
	if(mail1 != mail2){
		alert('Los correos no coinciden');
		return false;
	}
	else if(casa=="" && cel==""){
		alert('Por lo menos anota un número telefónico');
		return false;
	}
}
</script>
<script>
function mostrar(frm) { 
	num = frm.options[frm.selectedIndex].value;
  if(num=='México') { 
    document.getElementById('estado').style.visibility='visible'; 
    document.getElementById('state').style.visibility='hidden';   
  } 
  else if(num=='USA'){ 
    document.getElementById('state').style.visibility='visible'; 
    document.getElementById('estado').style.visibility='hidden';  
  } 
} 
</script>
<script>
function validarpago() { 
	pago = document.getElementById("seguir").value;
	if(pago == "Pagar con PayPal") return "../pagos/SetExpressCheckout.php";
	else if(pago == "Pagar con Tarjeta") return "../pagos/DoDirectPayment2.php";
} 
</script>

</head>

<body id="principal">
<header>
	<div id="logo"><a href="../"><img src="../images/logo.png" width="200" /></a></div>
	<div id="menu">
    	<div id="menu-links">
    	<ul>
        	<li><a href="../">Inicio</a></li>
        	<li><a href="../index.php?id=reserv">Reservaciones</a></li>
        	<li><a href="../index.php?id=us">Nosotros</a></li>
        	<li><a href="../index.php?id=news">Noticias</a></li>
        	<li><a href="../index.php?id=contact">Contacto</a></li>
        </ul>
        </div>
        <div id="registro">
    	<ul>
        	<li><a href="../login"><?php echo $_smarty_tpl->tpl_vars['opciones']->value;?>
</a></li>
        	<li><a href="<?php echo $_smarty_tpl->tpl_vars['todo']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['sesion']->value;?>
</a></li>
        </ul>
        </div>
    </div>
</header>
<div id="medium"><?php }} ?>