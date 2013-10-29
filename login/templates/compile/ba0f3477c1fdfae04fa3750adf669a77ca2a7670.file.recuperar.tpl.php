<?php /* Smarty version Smarty-3.1.14, created on 2013-10-05 16:11:24
         compiled from "templates\recuperar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10278524a2d703a3b46-36060781%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ba0f3477c1fdfae04fa3750adf669a77ca2a7670' => 
    array (
      0 => 'templates\\recuperar.tpl',
      1 => 1380989467,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10278524a2d703a3b46-36060781',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_524a2d703fd247_73295558',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_524a2d703fd247_73295558')) {function content_524a2d703fd247_73295558($_smarty_tpl) {?><form name="form1" method="post" action="recuperar.php">
  <table>
    <tr>
      <td><input type="radio" name="recup" id="usuario" value="user"></td>
      <td>Recuperar usuario</td>
    </tr>
    <tr>
      <td><input type="radio" name="recup" id="pass" value="pass"></td>
      <td>Recuperar contraseña</td>
    </tr>
    <tr>
      <td>E-mail:</td>
      <td><input type="text" name="correo" id="correo"></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="submit" name="enviar" id="enviar" value="Enviar"></td>
    </tr>
  </table>
</form>
<?php }} ?>