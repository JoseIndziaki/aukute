<?php /* Smarty version Smarty-3.1.14, created on 2013-09-30 23:05:25
         compiled from "reservar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:161405248d71a3edff7-20979439%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '30498b0f05f884e96adac02f176f0db750003fe7' => 
    array (
      0 => 'reservar.tpl',
      1 => 1380582323,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '161405248d71a3edff7-20979439',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5248d71a5a7ff5_18457798',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5248d71a5a7ff5_18457798')) {function content_5248d71a5a7ff5_18457798($_smarty_tpl) {?>

<body id="reserva">
<div id="formula">
<h2>Buscar Habitaciones</h2>
<form id="form1" name="form1" method="post" action="reservacion.php">
  
  <p>Número de Personas
    <input type="text" name="personas" id="personas" required="required" />
  </p>
  <p>Servicios:</p>
  <p>
    <label>
      <input type="checkbox" name="servicios" value="cable" id="servicios_0" />
    Cable</label>
    <br />
    <label>
      <input type="checkbox" name="servicios" value="telefono" id="servicios_1" />
      Teléfono</label>
    <br />
    <label>
      <input type="checkbox" name="servicios" value="aguacal" id="servicios_2" />
      Agua Caliente</label>
    <br />
    <label>
      <input type="checkbox" name="servicios" value="desayuno" id="servicios_3" />
      Desayuno</label>
  </p>
  <p>Precio Máximo
    <input type="text" name="precio" id="precio" required="required" />
  </p>
  <p>
    <input type="submit" name="enviar" id="enviar" value="Buscar" />
    <br />
  </p>
</form>
</div>
<div id="cuartos">
 </div><?php }} ?>