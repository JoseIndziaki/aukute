<?php /* Smarty version Smarty-3.1.14, created on 2013-10-06 00:06:28
         compiled from "..\templates\register.tpl" */ ?>
<?php /*%%SmartyHeaderCode:168045240ccbdc6e0e7-14991953%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '62e0601b27fc9ce7c8c395f0584f3d5102875013' => 
    array (
      0 => '..\\templates\\register.tpl',
      1 => 1381017936,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '168045240ccbdc6e0e7-14991953',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5240ccbdcd5fb6_89326457',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5240ccbdcd5fb6_89326457')) {function content_5240ccbdcd5fb6_89326457($_smarty_tpl) {?>

<form id="reg" name="form1" method="post" action="../register/registro.php">
  <table align="center">
    <tr>
      <td>Nombre de usuario:</td>
      <td><input type="text" name="user" id="user" required="required" /></td>
      <td>Correo:</td>
      <td><input type="email" name="email" id="email" required="required" /></td>
    </tr>
    <tr>
      <td>Contraseña:</td>
      <td><input type="password" name="pass1" id="pass1" required="required" /></td>
      <td>Repetir contraseña:</td>
      <td><input type="password" name="pass2" id="pass2" required="required" /></td>
    </tr>
    <tr>
      <td>Nombre(s):</td>
      <td><input type="text" name="nombre" pattern="[a-zA-Z]+" id="nombre" required="required" /></td>
      <td>Apellidos:</td>
      <td><input type="text" name="apellidos" pattern="[a-zA-Z]+" id="apellidos" required="required" /></td>
    </tr>
    <tr>
      <td>Teléfono:</td>
      <td><input type="text" name="tel" pattern="[0-9]+" required="required" id="tel" /></td>
      <td>Fecha de Nacimiento:</td>
      <td><input type="date" name="nacimiento" id="nacimiento" max="1995-12-31" required="required" /></td>
    </tr>
    <tr>
      <td>Sexo:</td>
      <td>M
        <input type="radio" name="radio" id="sexo" value="m" /> 
        F
        <input type="radio" name="radio" id="fem" value="f" /></td>
      <td>Nacionalidad:</td>
      <td><input type="text" name="nacionalidad" pattern="[a-zA-Z]+" id="nacionalidad" required="required" /></td>
    </tr>
    <tr>
      <td></td>
      <td></td>
      <td><input type="submit" name="send" onclick="return validarpass()" id="send" value="Enviar" /></td>
      <td></td>
    </tr>
  </table>
  <p>
    
  </p>
</form>
<?php }} ?>