<?php /* Smarty version Smarty-3.1.14, created on 2013-10-14 00:02:52
         compiled from "templates\clientes.tpl" */ ?>
<?php /*%%SmartyHeaderCode:980252487e951766b9-11006842%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1594096a76956bf0d8a46eee448694084115b03c' => 
    array (
      0 => 'templates\\clientes.tpl',
      1 => 1381708970,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '980252487e951766b9-11006842',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52487e951c7ab6_85131888',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52487e951c7ab6_85131888')) {function content_52487e951c7ab6_85131888($_smarty_tpl) {?>
	<script src="../js/jquery-1.9.1.js"></script>
	<script src="../js/ui/jquery.ui.core.js"></script>
	<script src="../js/ui/jquery.ui.widget.js"></script>
	<script src="../js/ui/jquery.ui.tabs.js"></script>
	<script>
	$(function() {
		$( "#tabs" ).tabs({
			beforeLoad: function( event, ui ) {
				ui.jqXHR.error(function() {
					ui.panel.html(
						"Couldn't load this tab. We'll try to fix this as soon as possible. " +
						"If this wouldn't be a demo." );
				});
			}
		});
	});
	</script>
<div id="custome">
  <div id="tabs">
	<ul>
		<li><a href="#perfil">Editar Perfil</a></li>
		<li><a href="#reserva">Hacer una Reservación</a></li>
		<li><a>Revisar Booking</a></li>
		<li><a href="#serviextras">Servicios Extras</a></li>
	</ul>
	<iframe src="perfil.php" id="perfil">
	</iframe>
	<iframe src="extras.php" id="serviextras">
	</iframe>
    </div>
</div>
<?php }} ?>