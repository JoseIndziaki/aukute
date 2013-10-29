<div>
<h2>Información General:</h2>
<h3>El Precio total a pagar es: <b>{$precio}</b></h3>
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
    <input type="hidden" name="precio" id="precio" value="{$precio}" />
    <input type="hidden" name="dias" id="dias" value="{$dias}" />
    <input type="hidden" name="idhab" id="idhab" value="{$idhab}" />
    <input type="hidden" name="desde" id="desde" value="{$desde}" />
    <input type="hidden" name="hasta" id="hasta" value="{$hasta}" />
  </p>
  <p class="continue">
  <input type="submit" name="seguir" id="seguir" value="Tarjeta" onclick = "this.form.action = '../pagos/DoDirectPayment2.php'">
  <input type="submit" name="seguir" id="seguir" value="Paypal" onclick="this.form.action = '../pagos/SetExpressCheckout.php'"></p>
</form>
<p>&nbsp;</p>
</div>
