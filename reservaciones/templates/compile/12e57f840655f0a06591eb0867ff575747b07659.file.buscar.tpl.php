<?php /* Smarty version Smarty-3.1.14, created on 2013-09-30 23:10:14
         compiled from "buscar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:25254524a01e86e3bb8-18209079%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '12e57f840655f0a06591eb0867ff575747b07659' => 
    array (
      0 => 'buscar.tpl',
      1 => 1380582611,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '25254524a01e86e3bb8-18209079',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_524a01e87ab739_14796760',
  'variables' => 
  array (
    'cuarto' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_524a01e87ab739_14796760')) {function content_524a01e87ab739_14796760($_smarty_tpl) {?>
  <table id="buscar" align="center">
    <tr>
      <td><b>Número de Cuarto</b></td>
      <td><b>Piso</b></td>
      <td><b>Precio</b></td>
      <td><b>Número de Camas</b></td>
      <td><b>Servicios</b></td>
    </tr>
<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['cuartos'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['cuartos']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['cuartos']['name'] = 'cuartos';
$_smarty_tpl->tpl_vars['smarty']->value['section']['cuartos']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['cuarto']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['cuartos']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['cuartos']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['cuartos']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['cuartos']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['cuartos']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['cuartos']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['cuartos']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['cuartos']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['cuartos']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['cuartos']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['cuartos']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['cuartos']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['cuartos']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['cuartos']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['cuartos']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['cuartos']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['cuartos']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['cuartos']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['cuartos']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['cuartos']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['cuartos']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['cuartos']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['cuartos']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['cuartos']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['cuartos']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['cuartos']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['cuartos']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['cuartos']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['cuartos']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['cuartos']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['cuartos']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['cuartos']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['cuartos']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['cuartos']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['cuartos']['total']);
?>
    <tr>
      <td><?php echo $_smarty_tpl->tpl_vars['cuarto']->value[$_smarty_tpl->getVariable('smarty')->value['section']['cuartos']['index']]['id'];?>
</td>
      <td><?php echo $_smarty_tpl->tpl_vars['cuarto']->value[$_smarty_tpl->getVariable('smarty')->value['section']['cuartos']['index']]['piso'];?>
</td>
      <td><?php echo $_smarty_tpl->tpl_vars['cuarto']->value[$_smarty_tpl->getVariable('smarty')->value['section']['cuartos']['index']]['precio'];?>
</td>
      <td><?php echo $_smarty_tpl->tpl_vars['cuarto']->value[$_smarty_tpl->getVariable('smarty')->value['section']['cuartos']['index']]['camas'];?>
</td>
      <td><?php echo utf8_encode($_smarty_tpl->tpl_vars['cuarto']->value[$_smarty_tpl->getVariable('smarty')->value['section']['cuartos']['index']]['servicios']);?>
</td>
    </tr>
<?php endfor; endif; ?> 
  </table><?php }} ?>