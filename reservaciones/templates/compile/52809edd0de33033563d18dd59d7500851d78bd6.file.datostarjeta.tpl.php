<?php /* Smarty version Smarty-3.1.14, created on 2013-10-07 02:39:42
         compiled from "templates\datostarjeta.tpl" */ ?>
<?php /*%%SmartyHeaderCode:49175250dcc15a9039-69519755%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '52809edd0de33033563d18dd59d7500851d78bd6' => 
    array (
      0 => 'templates\\datostarjeta.tpl',
      1 => 1381113578,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '49175250dcc15a9039-69519755',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5250dcc162a9d1_08940779',
  'variables' => 
  array (
    'idhab' => 0,
    'precio' => 0,
    'nombrecomp' => 0,
    'correo' => 0,
    'telefonos' => 0,
    'tipo' => 0,
    'dias' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5250dcc162a9d1_08940779')) {function content_5250dcc162a9d1_08940779($_smarty_tpl) {?><div>
  <h2>Datos de la Tarjeta:</h2>
  <h3>Habitacion número: <?php echo $_smarty_tpl->tpl_vars['idhab']->value;?>
, El Precio total a pagar es: <b><?php echo $_smarty_tpl->tpl_vars['precio']->value;?>
</b></h3>
  <form name="form1" method="post" action="confirmacion.php">
    <table align="center">
      <tr>
        <td>Número de tarjeta <a class="requerido">*</a>:</td>
        <td><input type="text" pattern="[0-9]+" name="tarjeta" required="required" id="tarjeta"></td>
        <td>Fecha de Vencimiento <a class="requerido">*</a>:</td>
        <td><select name="mes" id="mes" required="required">
          <option value="01">01</option>
          <option value="02">02</option>
          <option value="03">03</option>
          <option value="04">04</option>
          <option value="05">05</option>
          <option value="06">06</option>
          <option value="07">07</option>
          <option value="08">08</option>
          <option value="09">09</option>
          <option value="10">10</option>
          <option value="11">11</option>
          <option value="12">12</option>
        </select>
          <select name="anio" id="anio" required="required">
            <option value="14">14</option>
            <option value="15">15</option>
            <option value="16">16</option>
            <option value="17">17</option>
            <option value="18">18</option>
            <option value="19">19</option>
            <option value="20">20</option>
        </select></td>
      </tr>
      <tr>
        <td>Nombre del Titular <a class="requerido">*</a>:</td>
        <td><input type="text" name="titular" id="titular" required="required"></td>
        <td>País <a class="requerido">*</a>:</td>
        <td><select name="pais" onchange="mostrar(this)" id="pais" required="required">
          <option value="México">México</option>
          <option value="USA">USA</option>
        </select></td>
      </tr>
      <tr>
        <td>Estado <a class="requerido">*</a>:</td>
        <td><select name="estado" id="estado">
        	<option value="Aguascalientes">Aguascalientes</option>
            <option value="Baja California">Baja California</option>
            <option value="Baja California Sur">Baja California Sur</option>
            <option value="Campeche">Campeche</option>
            <option value="Chiapas">Chiapas</option>
            <option value="Chihuahua">Chihuahua</option>
            <option value="Coahuila">Coahuila</option>
            <option value="Colima">Colima</option>
            <option value="Distrito Federal">Distrito Federal</option>
            <option value="Durango">Durango</option>
            <option value="Estado de México">Estado de México</option>
            <option value="Guanajuato">Guanajuato</option>
            <option value="Guerrero">Guerrero</option>
            <option value="Hidalgo">Hidalgo</option>
            <option value="Jalisco">Jalisco</option>
            <option value="Michoacán">Michoacán</option>
            <option value="Morelos">Morelos</option>
            <option value="Nayarit">Nayarit</option>
            <option value="Nuevo León">Nuevo León</option>
            <option value="Oaxaca">Oaxaca</option>
            <option value="Puebla">Puebla</option>
            <option value="Querétaro">Querétaro</option>
            <option value="Quintana Roo">Quintana Roo</option>
            <option value="San Luis Potosí">San Luis Potosí</option>
            <option value="Sinaloa">Sinaloa</option>
            <option value="Sonora">Sonora</option>
            <option value="Tabasco">Tabasco</option>
            <option value="Tamaulipas">Tamaulipas</option>
            <option value="Tlaxcala">Tlaxcala</option>
            <option value="Veracruz">Veracruz</option>
            <option value="Yucatán">Yucatán</option>
            <option value="Zacatecas">Zacatecas</option>
        </select>
        <select name="state" id="state" style="visibility:hidden; z-index:-1;">
            <option value="AL">Alabama</option>
            <option value="AK">Alaska</option>
            <option value="AZ">Arizona</option>            
            <option value="AR">Arkansas</option>
            <option value="CA">California</option>
            <option value="CO">Colorado</option>
            <option value="CT">Connecticut</option>
            <option value="DE">Delaware</option>
            <option value="DC">District Of Columbia</option>
            <option value="FL">Florida</option>
            <option value="GA">Georgia</option>
            <option value="HI">Hawaii</option>
            <option value="ID">Idaho</option>
            <option value="IL">Illinois</option>
            <option value="IN">Indiana</option>
            <option value="IA">Iowa</option>
            <option value="KS">Kansas</option>
            <option value="KY">Kentucky</option>
            <option value="LA">Louisiana</option>
            <option value="ME">Maine</option>
            <option value="MD">Maryland</option>
            <option value="MA">Massachusetts</option>
            <option value="MI">Michigan</option>
            <option value="MN">Minnesota</option>
            <option value="MS">Mississippi</option>
            <option value="MO">Missouri</option>
            <option value="MT">Montana</option>
            <option value="NE">Nebraska</option>
            <option value="NV">Nevada</option>
            <option value="NH">New Hampshire</option>
            <option value="NJ">New Jersey</option>
            <option value="NM">New Mexico</option>
            <option value="NY">New York</option>
            <option value="NC">North Carolina</option>
            <option value="ND">North Dakota</option>
            <option value="OH">Ohio</option>
            <option value="OK">Oklahoma</option>
            <option value="OR">Oregon</option>
            <option value="PA">Pennsylvania</option>
            <option value="RI">Rhode Island</option>
            <option value="SC">South Carolina</option>
            <option value="SD">South Dakota</option>
            <option value="TN">Tennessee</option>
            <option value="TX">Texas</option>
            <option value="UT">Utah</option>
            <option value="VT">Vermont</option>
            <option value="VA">Virginia</option>
            <option value="WA">Washington</option>
            <option value="WV">West Virginia</option>
            <option value="WI">Wisconsin</option>
            <option value="WY">Wyoming</option>
            </select>
        </td>
        <td>Dirección <a class="requerido">*</a>:</td>
        <td><input type="text" name="dir" id="dir" required="required"></td>
      </tr>
      <tr>
        <td>Ciudad <a class="requerido">*</a>:</td>
        <td><input type="text" name="ciudad" id="ciudad" required="required"></td>
        <td>Código Postal <a class="requerido">*</a>:</td>
        <td><input type="text" name="cp" id="cp" required="required"></td>
      </tr>
      <tr>
        <td>Código de Seguridad <a class="requerido">*</a>:</td>
        <td><input type="password" name="codigo" id="codigo" required="required"></td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
    </table>
    <p>
      <input type="hidden" name="nomcomp" id="nomcomp" value="<?php echo $_smarty_tpl->tpl_vars['nombrecomp']->value;?>
" />
      <input type="hidden" name="correo" id="correo" value="<?php echo $_smarty_tpl->tpl_vars['correo']->value;?>
" />
      <input type="hidden" name="telefonos" id="telefonos" value="<?php echo $_smarty_tpl->tpl_vars['telefonos']->value;?>
" />
      <input type="hidden" name="tipo" id="tipo" value="<?php echo $_smarty_tpl->tpl_vars['tipo']->value;?>
" />
      <input type="hidden" name="precio" id="precio" value="<?php echo $_smarty_tpl->tpl_vars['precio']->value;?>
" />
      <input type="hidden" name="dias" id="dias" value="<?php echo $_smarty_tpl->tpl_vars['dias']->value;?>
" />
      <input type="hidden" name="idhab" id="idhab" value="<?php echo $_smarty_tpl->tpl_vars['idhab']->value;?>
" />
    </p>
    <p class="continue">
      <input type="submit" name="seguir" id="seguir" value="Continuar">
    </p>
  </form>
  <p>&nbsp;</p>
</div>
<p>&nbsp;</p>
<?php }} ?>