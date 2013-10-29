

<form id="reg" name="form1" method="post" action="../register/registro.php">
  <table align="center">
    <tr>
      <td>Nombre de usuario:</td>
      <td><input type="text" name="user" id="user" required="required" /></td>
      <td>Correo:</td>
      <td><input type="email" name="email" id="email" required="required" /></td>
    </tr>
    <tr>
      <td>Contraseña:</td>
      <td><input type="password" name="pass1" id="pass1" required="required" /></td>
      <td>Repetir contraseña:</td>
      <td><input type="password" name="pass2" id="pass2" required="required" /></td>
    </tr>
    <tr>
      <td>Nombre(s):</td>
      <td><input type="text" name="nombre" pattern="[a-zA-Z]+" id="nombre" required="required" /></td>
      <td>Apellidos:</td>
      <td><input type="text" name="apellidos" pattern="[a-zA-Z]+" id="apellidos" required="required" /></td>
    </tr>
    <tr>
      <td>Teléfono:</td>
      <td><input type="text" name="tel" pattern="[0-9]+" required="required" id="tel" /></td>
      <td>Fecha de Nacimiento:</td>
      <td><input type="date" name="nacimiento" id="nacimiento" max="1995-12-31" required="required" /></td>
    </tr>
    <tr>
      <td>Sexo:</td>
      <td>M
        <input type="radio" name="radio" id="sexo" value="m" /> 
        F
        <input type="radio" name="radio" id="fem" value="f" /></td>
      <td>Nacionalidad:</td>
      <td><input type="text" name="nacionalidad" pattern="[a-zA-Z]+" id="nacionalidad" required="required" /></td>
    </tr>
    <tr>
      <td></td>
      <td></td>
      <td><input type="submit" name="send" onclick="return validarpass()" id="send" value="Enviar" /></td>
      <td></td>
    </tr>
  </table>
  <p>
    
  </p>
</form>
