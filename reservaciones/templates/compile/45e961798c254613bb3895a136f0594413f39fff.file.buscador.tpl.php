<?php /* Smarty version Smarty-3.1.14, created on 2013-10-06 02:05:47
         compiled from "templates\buscador.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5320524bb100cb2ac1-13555600%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '45e961798c254613bb3895a136f0594413f39fff' => 
    array (
      0 => 'templates\\buscador.tpl',
      1 => 1381025018,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5320524bb100cb2ac1-13555600',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_524bb100e35fc4_65920020',
  'variables' => 
  array (
    'cuarto' => 0,
    'dias' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_524bb100e35fc4_65920020')) {function content_524bb100e35fc4_65920020($_smarty_tpl) {?><h1>Habitaciones Disponibles</h1>
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
  <hr />
  <div class="habitacion">
    <div class="hab-datos">
      <div class="img-hab"><img src="../images/recamara.jpeg" width="200" /></div>
      <h3>Habitación número <?php echo $_smarty_tpl->tpl_vars['cuarto']->value[$_smarty_tpl->getVariable('smarty')->value['section']['cuartos']['index']]['id'];?>
</h3>
      <h4>Número de recámaras: <?php echo $_smarty_tpl->tpl_vars['cuarto']->value[$_smarty_tpl->getVariable('smarty')->value['section']['cuartos']['index']]['camas'];?>
</h4>
    </div>
    <div class="hab-precios">
      <h2>$<?php echo $_smarty_tpl->tpl_vars['cuarto']->value[$_smarty_tpl->getVariable('smarty')->value['section']['cuartos']['index']]['precio'];?>
.00</h2>
      <a href="reservar.php?id=<?php echo $_smarty_tpl->tpl_vars['cuarto']->value[$_smarty_tpl->getVariable('smarty')->value['section']['cuartos']['index']]['id'];?>
&dias=<?php echo $_smarty_tpl->tpl_vars['dias']->value;?>
">Reservar</a></div>
  </div>
<?php endfor; endif; ?> 
  <p>&nbsp;</p>
<?php }} ?>