<?php /* Smarty version Smarty-3.1.14, created on 2013-09-23 00:26:41
         compiled from "..\templates\notas.tpl" */ ?>
<?php /*%%SmartyHeaderCode:24566523f8ac1ca2986-83235617%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4be0a0f176b6f962b74a41243e01f3571baec9a2' => 
    array (
      0 => '..\\templates\\notas.tpl',
      1 => 1379895676,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '24566523f8ac1ca2986-83235617',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'titulo' => 0,
    'noticia' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_523f8ac1d12839_54120793',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_523f8ac1d12839_54120793')) {function content_523f8ac1d12839_54120793($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</title>
<link rel="stylesheet" href="../css/style.css" type="text/css" />
</head>

<body>
<header>
	<div id="logo"><a href="../"><img src="../images/logo.png" width="200" /></a></div>
	<div id="menu">
    	<div id="menu-links">
    	<ul>
        	<li><a href="../">Inicio</a></li>
        	<li><a href="../index.php?id=us">Nosotros</a></li>
        	<li><a href="../index.php?id=news">Noticias</a></li>
        	<li><a href="../index.php?id=contact">Contacto</a></li>
        </ul>
        </div>
        <div id="registro">
    	<ul>
        	<li><a href="../login">Login</a></li>
        	<li><a href="../login/register.php">Register</a></li>
        </ul>
        </div>
    </div>
</header>
<div id="medium">
	<h3><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h3>
    <p><?php echo $_smarty_tpl->tpl_vars['noticia']->value;?>
</p>
</div>
<footer>&copy; Todos los derechos Reservados</footer>
</body>
</html>
<?php }} ?>