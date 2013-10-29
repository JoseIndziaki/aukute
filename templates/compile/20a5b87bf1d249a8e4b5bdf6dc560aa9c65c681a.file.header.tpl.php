<?php /* Smarty version Smarty-3.1.14, created on 2013-10-22 01:22:59
         compiled from "templates\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2574452479f0b343514-36093516%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '20a5b87bf1d249a8e4b5bdf6dc560aa9c65c681a' => 
    array (
      0 => 'templates\\header.tpl',
      1 => 1381799202,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2574452479f0b343514-36093516',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52479f0b3c1f20_38446811',
  'variables' => 
  array (
    'titulo' => 0,
    'opciones' => 0,
    'todo' => 0,
    'sesion' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52479f0b3c1f20_38446811')) {function content_52479f0b3c1f20_38446811($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</title>
<link rel="stylesheet" href="css/style.css" type="text/css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script src="js/galleria-1.2.9.min.js"></script>
<script src="js/readmore.js"></script>

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