<?php /* Smarty version Smarty-3.1.14, created on 2013-09-29 17:55:32
         compiled from "..\templates\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:29035524869943960e7-05969879%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b55ed6b4f266b986c43149d162d3e779b8d73ecc' => 
    array (
      0 => '..\\templates\\header.tpl',
      1 => 1380429282,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '29035524869943960e7-05969879',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'titulo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_524869944c02f1_91675044',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_524869944c02f1_91675044')) {function content_524869944c02f1_91675044($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</title>
<link rel="stylesheet" href="css/style.css" type="text/css" />
<script type="text/javascript" src="js/jquery.js"></script>
<script src="js/galleria-1.2.9.min.js"></script>
</head>

<body>
<header>
	<div id="logo"><a href="."><img src="images/logo.png" width="200" /></a></div>
	<div id="menu">
    	<div id="menu-links">
    	<ul>
        	<li><a href=".">Inicio</a></li>
        	<li><a href="index.php?id=us">Nosotros</a></li>
        	<li><a href="index.php?id=news">Noticias</a></li>
        	<li><a href="index.php?id=contact">Contacto</a></li>
        </ul>
        </div>
        <div id="registro">
    	<ul>
        	<li><a href="login">Login</a></li>
        	<li><a href="register">Register</a></li>
        </ul>
        </div>
    </div>
</header>
<div id="medium"><?php }} ?>