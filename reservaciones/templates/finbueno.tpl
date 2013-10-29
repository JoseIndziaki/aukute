<div class="imprimir">
  <div class="datosreserv">
  <h3>Datos de la Reservación</h3>
  <i>Habitación número {$idhab}</i><br />
  <i>${$preciohab}.00 MXN</i><br />
  <i>Todo Incluido</i><br />
  <i>Fecha de Llegada: {$llegada}</i><br />
  <i>Fecha de Salida: {$salida}</i><br />
  <i>Estancia: {$dias} días</i><br />
  </div>
  <div class="datoscliente">
  <h3>Datos del Cliente</h3>
  <b>Nombre Completo: </b><p>{$nombrecomp}</p><br />
  <b>E-mail: </b><p>{$correo}</p><br />
  <b>Teléfono(s): </b><p>{$telefonos}</p><br />
  </div>
  <div class="datospago">
  <h3>Datos del Pago</h3>
  <b>Pago Total: </b><p>{$precio}</p><br />
  <b>Pago con cargo a tarjeta: </b><p>{$tipo}</p><br />
  </div>
</div>
