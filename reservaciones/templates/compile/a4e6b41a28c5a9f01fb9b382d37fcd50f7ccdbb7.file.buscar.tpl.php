<?php /* Smarty version Smarty-3.1.14, created on 2013-10-22 01:23:05
         compiled from "templates\buscar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12111524b980a078213-74683226%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a4e6b41a28c5a9f01fb9b382d37fcd50f7ccdbb7' => 
    array (
      0 => 'templates\\buscar.tpl',
      1 => 1381715994,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12111524b980a078213-74683226',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_524b980a5f68f6_44104118',
  'variables' => 
  array (
    'fecha' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_524b980a5f68f6_44104118')) {function content_524b980a5f68f6_44104118($_smarty_tpl) {?><head>
<link type="text/css" rel="stylesheet" href="../css/style.css" />
<script>
function fechas(){
var desde = document.getElementById('to').value;
var hasta = document.getElementById('from').value;
	if(desde > hasta){
		alert("La salida tiene que ser mínimo el mismo día que el de llegada");
		return false;
	}
}
</script>
<link href="../css/style.css" rel="stylesheet" type="text/css" /><link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
  <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
  <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
  <script>
  $(function() {
    $( "#from" ).datepicker({
      defaultDate: "+1w",
      changeMonth: true,
      numberOfMonths: 1,
      onClose: function( selectedDate ) {
        $( "#to" ).datepicker("option", "dateFormat", "yy/mm/dd" );
        $( "#to" ).datepicker( "option", "minDate", "+0d"  );
      }
    });
    $( "#to" ).datepicker({
      defaultDate: "+1w",
      changeMonth: true,
      numberOfMonths: 1,
      onClose: function( selectedDate ) {
        $( "#from" ).datepicker("option", "dateFormat", "yy/mm/dd" );
        $( "#from" ).datepicker( "option", "minDate", "+1d" );
      }
    });
  });
  </script>
</head>
<body>
<h3>Busca una habitación</h3>
<form name="form1" method="post" onSubmit="return fechas()" action="buscador.php" target="_parent">
<table>
	<tr>
  	<td>Desde:</td>
    <td><input type="text" name="desde" min="<?php echo $_smarty_tpl->tpl_vars['fecha']->value;?>
" id="to"></td>
  
  	</tr>
    <tr>
  <td>Hasta:</td>
  <td><input type="text" name="hasta" min="<?php echo $_smarty_tpl->tpl_vars['fecha']->value;?>
" id="from"></td>
  </tr>
  <tr>
  <td>Recámaras:</td>
    <td><select name="habitaciones" id="habitaciones">
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">5</option>
    </select></td>
    </tr>
   <tr>
  <td>Adultos:</td>
    <td><select name="adultos" id="adultos">
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">5</option>
    </select></td>
    </tr><tr>
  <td>Niños:</td>
    <td><select name="ninos" id="ninos">
      <option value="0">0</option>
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">5</option>
    </select></td>
    </tr>
    <tr>
    <td></td>
    <td><input type="submit" name="buscar" id="buscar" value="Buscar"></td>
  	</tr>
</table>
</form>
</body>
<?php }} ?>