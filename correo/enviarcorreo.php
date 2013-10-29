<?php
$email = $_POST['email'];
$nombre = $_POST['nombre'];
$asunto = $_POST['asunto'];
mail('boyerk_child@hotmail.com','contacto',$asunto,'From: '.$email);
echo '<script>alert("Tu correo ha sido enviado")</script>';
header('location: ../');

?>