<?php /* Smarty version Smarty-3.1.14, created on 2013-09-17 00:25:14
         compiled from "pla-ini.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3194052379bbf887c85-67175401%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd9b8364d4b9e52bda3ca0d8ff90838592fb4ca61' => 
    array (
      0 => 'pla-ini.tpl',
      1 => 1379377511,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3194052379bbf887c85-67175401',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52379bbfc1a3c8_92206318',
  'variables' => 
  array (
    'loop' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52379bbfc1a3c8_92206318')) {function content_52379bbfc1a3c8_92206318($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
<link rel="stylesheet" href="style.css" type="text/css" />
<script type="text/javascript" src="js/jquery.js"></script>
<script src="js/galleria-1.2.9.min.js"></script>
</head>

<body>
<header>
	<div id="logo"><a href="ind2.php?id=index"><img src="images/logo.png" width="200" /></a></div>
	<div id="menu">
    	<div id="menu-links">
    	<ul>
        	<li><a href="ind2.php?id=index">Inicio</a></li>
        	<li>Sobre Nosotros</li>
        	<li>Noticias</li>
        	<li><a href="ind2.php?id=contact">Contacto</a></li>
        </ul>
        </div>
        <div id="registro">
    	<ul>
        	<li><a href="index.php">Login</a></li>
        	<li><a href="contact.php">Sing in</a></li>
        </ul>
        </div>
    </div>
	<div id="register"></div>
</header>
<div id="medium">
	<?php echo $_smarty_tpl->tpl_vars['loop']->value;?>

</div>
<footer>&copy; Todos los derechos Reservados</footer>

</body>
</html><?php }} ?>