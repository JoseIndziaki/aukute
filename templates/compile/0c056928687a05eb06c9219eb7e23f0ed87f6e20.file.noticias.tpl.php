<?php /* Smarty version Smarty-3.1.14, created on 2013-10-05 23:44:26
         compiled from "templates\noticias.tpl" */ ?>
<?php /*%%SmartyHeaderCode:267455250a45a00f612-90774600%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0c056928687a05eb06c9219eb7e23f0ed87f6e20' => 
    array (
      0 => 'templates\\noticias.tpl',
      1 => 1381016563,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '267455250a45a00f612-90774600',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'titulo' => 0,
    'fecha' => 0,
    'noticia' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5250a45a1926f2_55294468',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5250a45a1926f2_55294468')) {function content_5250a45a1926f2_55294468($_smarty_tpl) {?><div class="noticias">
<h3><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h3>
<div id="fecha"><p><?php echo $_smarty_tpl->tpl_vars['fecha']->value;?>
</p></div>
<div id="contenido"><p><?php echo $_smarty_tpl->tpl_vars['noticia']->value;?>
</p></div>
</div>
<?php }} ?>