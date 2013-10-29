<?php /* Smarty version Smarty-3.1.14, created on 2013-10-06 00:54:36
         compiled from "..\templates\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:29035524bb0ffa16fe2-60046979%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b55ed6b4f266b986c43149d162d3e779b8d73ecc' => 
    array (
      0 => '..\\templates\\header.tpl',
      1 => 1380949235,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '29035524bb0ffa16fe2-60046979',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_524bb0ffb5a532_81932200',
  'variables' => 
  array (
    'titulo' => 0,
    'opciones' => 0,
    'todo' => 0,
    'sesion' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_524bb0ffb5a532_81932200')) {function content_524bb0ffb5a532_81932200($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</title>
<link rel="stylesheet" href="css/style.css" type="text/css" />
<script type="text/javascript" src="js/jquery.js"></script>
<script src="js/galleria-1.2.9.min.js"></script>
</head>

<body id="principal">
<header>
	<div id="logo"><a href="."><img src="images/logo.png" width="200" /></a></div>
	<div id="menu">
    	<div id="menu-links">
    	<ul>
        	<li><a href=".">Inicio</a></li>
        	<li><a href="index.php?id=reserv">Reservaciones</a></li>
        	<li><a href="index.php?id=us">Nosotros</a></li>
        	<li><a href="index.php?id=news">Noticias</a></li>
        	<li><a href="index.php?id=contact">Contacto</a></li>
        </ul>
        </div>
        <div id="registro">
    	<ul>
        	<li><a href="login"><?php echo $_smarty_tpl->tpl_vars['opciones']->value;?>
</a></li>
        	<li><a href="<?php echo $_smarty_tpl->tpl_vars['todo']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['sesion']->value;?>
</a></li>
        </ul>
        </div>
    </div>
</header>
<div id="medium"><?php }} ?>