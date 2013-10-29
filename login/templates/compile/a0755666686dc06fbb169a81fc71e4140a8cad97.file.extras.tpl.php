<?php /* Smarty version Smarty-3.1.14, created on 2013-10-14 00:00:55
         compiled from "templates\extras.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6866525b33b993de82-00857450%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a0755666686dc06fbb169a81fc71e4140a8cad97' => 
    array (
      0 => 'templates\\extras.tpl',
      1 => 1381708852,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6866525b33b993de82-00857450',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_525b33b9a5e5e2_42796170',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_525b33b9a5e5e2_42796170')) {function content_525b33b9a5e5e2_42796170($_smarty_tpl) {?><html>
<head>
<link type="text/css" rel="stylesheet" href="../css/style.css" />
</head>

<body>
	<div>
   	  <h2>SPA</h2>
      <form action="prueba_servicios.php" method="post" name="form1" id="form1">
          <p>
            <label>
              <input type="checkbox" name="spa0" value="1000" id="spa_0" />
              Jacuzzi - $1000</label>
            <br />
            <label>
              <input type="checkbox" name="spa1" value="800" id="spa_1" />
              Facial</label>
            - $800<br />
            <label>
              <input type="checkbox" name="spa2" value="500" id="spa_2" />
              Masaje - $500</label>
            <br />
          </p>
        <h2>Farmacia</h2>
        <p>
            <label>
              <input type="checkbox" name="farmacia0" value="100" id="farmacia_0" />
              Medicina a Cuarto - $100</label>
            <br />
            <label>
              <input type="checkbox" name="farmacia1" value="500" id="farmacia_1" />
              Doctor - $500</label>
          <br />
        </p>
        <h2>Restaurant</h2>
        <p>
          <label>
            <input type="checkbox" name="restaurant0" value="100" id="restaurant_0" />
            Servicio a Cuarto - $100</label>
          <br />
          <label>
            <input type="checkbox" name="restaurant1" value="2000" id="restaurant_1" />
            Cena Romantica - $2000</label>
        </p>
        <h2>Tintoreria</h2>
        <p>
          <label>
            <input type="checkbox" name="tintoreria0" value="150" id="tintoreria_0" />
            Lavado - $150</label>
          <br />
          <label>
            <input type="checkbox" name="tintoreria1" value="150" id="tintoreria_1" />
            Planchado - $150</label>
          <br />
          <label>
            <input type="checkbox" name="tintoreria2" value="300" id="tintoreria_2" />
            Compostura - $300</label>
          <br />
        </p>
        
        <p>
          <input type="submit" name="button" id="button" value="Confirmar" />
          <br />
        </p>
      </form>
    </div>
</body>
</html><?php }} ?>