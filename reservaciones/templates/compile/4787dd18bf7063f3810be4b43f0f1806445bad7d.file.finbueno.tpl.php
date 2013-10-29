<?php /* Smarty version Smarty-3.1.14, created on 2013-10-07 21:59:22
         compiled from "templates\finbueno.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2470552532eba705ad6-59327687%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4787dd18bf7063f3810be4b43f0f1806445bad7d' => 
    array (
      0 => 'templates\\finbueno.tpl',
      1 => 1381182355,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2470552532eba705ad6-59327687',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'idhab' => 0,
    'preciohab' => 0,
    'llegada' => 0,
    'salida' => 0,
    'dias' => 0,
    'nombrecomp' => 0,
    'correo' => 0,
    'telefonos' => 0,
    'precio' => 0,
    'tipo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52532eba7a9f04_77555505',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52532eba7a9f04_77555505')) {function content_52532eba7a9f04_77555505($_smarty_tpl) {?><div class="imprimir">
  <div class="datosreserv">
  <h3>Datos de la Reservación</h3>
  <i>Habitación número <?php echo $_smarty_tpl->tpl_vars['idhab']->value;?>
</i><br />
  <i>$<?php echo $_smarty_tpl->tpl_vars['preciohab']->value;?>
.00 MXN</i><br />
  <i>Todo Incluido</i><br />
  <i>Fecha de Llegada: <?php echo $_smarty_tpl->tpl_vars['llegada']->value;?>
</i><br />
  <i>Fecha de Salida: <?php echo $_smarty_tpl->tpl_vars['salida']->value;?>
</i><br />
  <i>Estancia: <?php echo $_smarty_tpl->tpl_vars['dias']->value;?>
 días</i><br />
  </div>
  <div class="datoscliente">
  <h3>Datos del Cliente</h3>
  <b>Nombre Completo: </b><p><?php echo $_smarty_tpl->tpl_vars['nombrecomp']->value;?>
</p><br />
  <b>E-mail: </b><p><?php echo $_smarty_tpl->tpl_vars['correo']->value;?>
</p><br />
  <b>Teléfono(s): </b><p><?php echo $_smarty_tpl->tpl_vars['telefonos']->value;?>
</p><br />
  </div>
  <div class="datospago">
  <h3>Datos del Pago</h3>
  <b>Pago Total: </b><p><?php echo $_smarty_tpl->tpl_vars['precio']->value;?>
</p><br />
  <b>Pago con cargo a tarjeta: </b><p><?php echo $_smarty_tpl->tpl_vars['tipo']->value;?>
</p><br />
  </div>
</div>
<?php }} ?>