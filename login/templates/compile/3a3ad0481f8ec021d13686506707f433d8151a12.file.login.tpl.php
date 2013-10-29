<?php /* Smarty version Smarty-3.1.14, created on 2013-10-01 02:03:25
         compiled from "..\templates\login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:242715237ac5cc7adb6-63667319%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3a3ad0481f8ec021d13686506707f433d8151a12' => 
    array (
      0 => '..\\templates\\login.tpl',
      1 => 1380593004,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '242715237ac5cc7adb6-63667319',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5237ac5ccd7431_82739965',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5237ac5ccd7431_82739965')) {function content_5237ac5ccd7431_82739965($_smarty_tpl) {?>
	<div id="login">
	<form id="form1" name="form1" method="post" action="../login/login.php">
    
      <table align="center">
      <tr>
	  	<td><label for="user">Usuario</label></td>
	    <td><input type="text" name="user" id="user" required="required" /></td>
       </tr>
	    <td><label for="pass">Contraseña</label></td>
	    <td><input type="password" name="pass" id="pass" required="required" /></td>
       </tr>
       </table>
	    <input type="submit" name="send" id="send" value="Entrar" />
	  </p>
      <p>&nbsp;</p>
  <p>¿No tienes usuario?  <a href="../register/index.php">Regístrate</a></p>
  		<p><a href="recuperar.php">Recuperar usuario o contraseña</a></p>
  </form>
  </div>
<?php }} ?>