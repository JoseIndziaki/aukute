<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" href="css/style.css" type="text/css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Administración</title>
</head>

<body id="administrador">
<form id="admins" name="admins" method="post" action="login.php">
	<table align="center">
  <tr>
    <td><label for="user">Usuario: </label></td>
    <td><input type="text" name="user" id="user" /></td>
  </tr>
  <tr>
    <td><label for="pass">Password: </label></td>
    <td><input type="password" name="pass" id="pass" /></td>
  </tr>
  <tr>
  	<td></td>
    <td><input type="submit" name="log_in" id="log_in" value="Enviar" /></td>
  </tr>
  </table>
</form>

<a href="{$home}">Home</a>
</body>
</html>
