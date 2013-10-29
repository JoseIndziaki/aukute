

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
 </div>