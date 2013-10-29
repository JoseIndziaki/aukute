<?php /* Smarty version Smarty-3.1.14, created on 2013-10-12 19:50:21
         compiled from "templates\datosreserva.tpl" */ ?>
<?php /*%%SmartyHeaderCode:253355250b40384d1a0-17927692%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cadd37d99cc8d0e26199782a96a926ef024414b1' => 
    array (
      0 => 'templates\\datosreserva.tpl',
      1 => 1381192265,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '253355250b40384d1a0-17927692',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5250b403933945_67012433',
  'variables' => 
  array (
    'precio' => 0,
    'dias' => 0,
    'idhab' => 0,
    'desde' => 0,
    'hasta' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5250b403933945_67012433')) {function content_5250b403933945_67012433($_smarty_tpl) {?><div>
<h2>Información General:</h2>
<h3>El Precio total a pagar es: <b><?php echo $_smarty_tpl->tpl_vars['precio']->value;?>
</b></h3>
<form name="form1" method="post" onSubmit="return validartels()" >
  <table align="center">
    <tr>
      <td>Nombre <a class="requerido">*</a>:</td>
      <td><input type="text" name="nombre" id="nombre" pattern="[a-zA-Z ]+" required></td>
      <td>Apellidos <a class="requerido">*</a>:</td>
      <td><input type="text" name="apellidos" pattern="[a-zA-Z ]+" id="apellidos" required></td>
    </tr>
    <tr>
      <td>E-mail <a class="requerido">*</a>:</td>
      <td><input type="email" name="email" id="email" required></td>
      <td>Repetir e-mail <a class="requerido">*</a>:</td>
      <td><input type="email" name="email2" id="email2" required></td>
    </tr>
    <tr>
      <td>Teléfono de casa <a class="requerido">*</a>:</td>
      <td><input type="text" pattern="[0-9]+" name="telcasa" id="telcasa"></td>
      <td>Teléfono Celular <a class="requerido">*</a>:</td>
      <td><input type="text" pattern="[0-9]+" name="celular" id="celular"></td>
    </tr>
  </table>
  <p>
    <input type="hidden" name="precio" id="precio" value="<?php echo $_smarty_tpl->tpl_vars['precio']->value;?>
" />
    <input type="hidden" name="dias" id="dias" value="<?php echo $_smarty_tpl->tpl_vars['dias']->value;?>
" />
    <input type="hidden" name="idhab" id="idhab" value="<?php echo $_smarty_tpl->tpl_vars['idhab']->value;?>
" />
    <input type="hidden" name="desde" id="desde" value="<?php echo $_smarty_tpl->tpl_vars['desde']->value;?>
" />
    <input type="hidden" name="hasta" id="hasta" value="<?php echo $_smarty_tpl->tpl_vars['hasta']->value;?>
" />
  </p>
  <p class="continue">
  <input type="submit" name="seguir" id="seguir" value="Tarjeta" onclick = "this.form.action = '../pagos/DoDirectPayment2.php'">
  <input type="submit" name="seguir" id="seguir" value="Paypal" onclick="this.form.action = '../pagos/SetExpressCheckout.php'"></p>
</form>
<p>&nbsp;</p>
</div>
<?php }} ?>