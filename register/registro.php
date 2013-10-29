<?php
require_once('../vars/db_login.php');

$usuario = $_POST['user'];
$correo = $_POST['email'];
$pass = md5($_POST['pass1']);
$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$telefono = $_POST['tel'];
$nacimiento = $_POST['nacimiento'];
$sexo = $_POST['radio'];
$nacion = $_POST['nacionalidad'];

$conexion = mysqli_connect($dbhost, $dbuser, $dbpass, $db) or die('Error conectando a la base de datos');

$query = "INSERT INTO usuarios(usuario, password, nombre, apellidos, email, telefono, tarjeta, codigo, nacimiento, sexo, nacionalidad) VALUES('$usuario', '$pass', '$nombre', '$apellidos', '$correo', $telefono, 0, 0, '$nacimiento', '$sexo', '$nacion')";

if($conexion->query($query)){
	echo "<script>alert('Registrado correctamente')</script>";
	header('location: ../login')	;
}
else{
	echo "<script>alert('Algunos datos no se registraron')</script>";
	header('location: ..')	;
}
mail($correo, 'Registro a Aukute Inn Hotel', 'Ya estas registrado a nuestro sistema con el usuario '.$usuario, 'From: soporte@aukute.com');
mysqli_close($conexion);

?>