<?php /* Smarty version Smarty-3.1.14, created on 2013-10-22 01:40:45
         compiled from "templates\login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:161815265d37c260820-03511763%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '64dc0f53a42be5b3a7d2ba591c653348a6eeab8a' => 
    array (
      0 => 'templates\\login.tpl',
      1 => 1382406044,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '161815265d37c260820-03511763',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5265d37c2e3539_87516289',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5265d37c2e3539_87516289')) {function content_5265d37c2e3539_87516289($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" href="css/style.css" type="text/css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Administración</title>
</head>

<body id="administrador">
<form id="admins" name="admins" method="post" action="login.php">
	<table align="center">
  <tr>
    <td><label for="user">Usuario: </label></td>
    <td><input type="text" name="user" id="user" /></td>
  </tr>
  <tr>
    <td><label for="pass">Password: </label></td>
    <td><input type="text" name="pass" id="pass" /></td>
  </tr>
  <tr>
  	<td></td>
    <td><input type="submit" name="log_in" id="log_in" value="Enviar" /></td>
  </tr>
  </table>
</form>
</body>
</html>
<?php }} ?>