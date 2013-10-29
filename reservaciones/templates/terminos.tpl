<div class="terminos">
<h3>Confirme los datos de su Compra:</h3>
<div id="contenido-confirmado">
<table align="center">
  <tr>
    <td><p class="campo">Nombre: </p></td>
    <td><p class="valor">{$nombrecomp}</p></td>
    <td><p class="campo">E-mail: </p></td>
    <td><p class="valor">{$correo}</p></td>
  </tr>
  <tr>
    <td><p class="campo">Teléfono(s): </p></td>
    <td><p class="valor">{$telefonos}</p></td>
    <td><p class="campo">Habitación: </p></td>
    <td><p class="valor">{$idhab}</p></td>
  </tr>
  <tr>
    <td><p class="campo">Fecha de llegada: </p></td>
    <td><p class="valor">{$llegada}</p></td>
    <td><p class="campo">Fecha de salida: </p></td>
    <td><p class="valor">{$salida}</p></td>
  </tr>
  <tr>
    <td><p class="campo">Total a pagar: </p></td>
    <td><p class="valor">{$precio}</p></td>
    <td><p class="campo">Tipo de tarjeta: </p></td>
    <td><p class="valor">{$tipo}</p></td>
  </tr>
</table>

</div>
<hr />
<h3>Términos y Condiciones del Contrato</h3>
  <div class="contenido">
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse hendrerit, elit ac suscipit scelerisque, ligula orci ultrices est, fringilla tempus metus arcu iaculis mauris. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nunc ullamcorper laoreet sem, ut cursus dui. Etiam faucibus metus sed gravida cursus. Etiam lacinia eu nunc sit amet fringilla. Fusce rhoncus augue sit amet nunc scelerisque, lacinia suscipit dolor adipiscing. Suspendisse potenti. Curabitur dignissim leo risus, ac mollis sapien semper et. Pellentesque volutpat augue tortor, ut gravida risus pretium tempor. Integer commodo, eros sit amet sollicitudin sagittis, nulla erat dapibus sapien, in tincidunt tellus neque vel magna. Curabitur at facilisis purus, vel aliquet eros. Morbi sem mauris, gravida sit amet dolor eu, luctus hendrerit eros.</p>
    <p>Mauris pharetra nisl non dictum rutrum. Vestibulum ultrices ultrices metus vel tempor. Quisque eros felis, iaculis ut sodales et, rhoncus eget mauris. Aliquam erat volutpat. In consectetur viverra orci. Nunc facilisis consectetur vestibulum. Nam a dolor est. Phasellus et consectetur diam. Fusce placerat in ipsum non imperdiet. Mauris pellentesque felis purus, sed venenatis nibh vestibulum ut. Sed non aliquam augue. Sed interdum, diam vel vulputate dapibus, quam ante viverra lorem, eget interdum diam lectus quis urna. Integer porta, lectus vel cursus fringilla, urna felis lacinia dui, id venenatis nulla lacus id est.</p>
    <p>Ut a aliquam magna. Nam pharetra consectetur bibendum. Nullam at bibendum risus. Nulla at justo vel nisl sagittis pellentesque nec sit amet massa. Nullam vel cursus magna, sed venenatis diam. Nam in erat ut risus dignissim lobortis et sed lorem. Curabitur tempus leo sed ligula tempor, eget sodales dui viverra.</p>
    <p>Vivamus quis lacus non lorem mollis egestas. Maecenas dapibus, dolor at ornare ornare, justo nibh ullamcorper nisl, at aliquam dui velit ut lacus. Ut neque leo, ultricies ut massa vel, ornare commodo elit. Vestibulum sollicitudin odio nec ornare sollicitudin. Nam consectetur mi non nisi iaculis feugiat vel id nulla. Morbi ultrices tristique libero, auctor adipiscing massa dignissim sit amet. Proin pulvinar, lectus at imperdiet euismod, libero nisi tempus magna, ac interdum elit arcu eget dolor. Praesent pharetra non purus quis mollis. Nunc vitae mauris mi. Suspendisse aliquet purus dui. Fusce quis eros erat. Interdum et malesuada fames ac ante ipsum primis in faucibus. Mauris turpis massa, pulvinar vel dictum scelerisque, consectetur sit amet ligula. Sed sit amet neque dui. Suspendisse quis urna faucibus, volutpat est viverra, tempor sem.</p>
    <p>Integer euismod luctus nulla vel ornare. Suspendisse ultricies elit nec mi iaculis, quis vestibulum lectus ullamcorper. Cras ullamcorper adipiscing augue a tempus. In sed nunc blandit, lobortis nunc vel, pharetra est. Donec pharetra eros sed urna semper fringilla. Quisque ac aliquet lacus. Sed a sollicitudin elit. Nulla bibendum vestibulum ultricies. Proin a felis quis sem tempus fringilla id vel elit. Maecenas at risus nec est sodales volutpat.  </p>
  </div>
  <div class="acepto">
    <form name="form1" method="post" action="fin.php">
      <p>
        <input type="checkbox" name="acepto" id="acepto">
        He leído y acepto los términos del contrato.</p>
    <p>
      <input type="hidden" name="nomcomp" id="nomcomp" value="{$nombrecomp}" />
      <input type="hidden" name="correo" id="correo" value="{$correo}" />
      <input type="hidden" name="telefonos" id="telefonos" value="{$telefonos}" />
      <input type="hidden" name="tipo" id="tipo" value="{$tipo}" />
      <input type="hidden" name="precio" id="precio" value="{$precio}" />
      <input type="hidden" name="dias" id="dias" value="{$dias}" />
      <input type="hidden" name="idhab" id="idhab" value="{$idhab}" />
      <input type="hidden" name="desde" id="desde" value="{$desde}" />
      <input type="hidden" name="hasta" id="hasta" value="{$hasta}" />
    </p>
      <p class="continue">
        <input type="submit" name="enviar" id="enviar" value="Enviar">
      </p>
    </form>
  </div>
</div>
