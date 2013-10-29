<?php

$con = mysqli_connect('mysql.hostinger.es', 'u322822452_uno', '',  'u322822452_uno');
$user = $_POST['Usuario'];
$pass = $_POST['Contrasena'];

$con->query("INSERT INTO uno(user, pass) VALUES('$user', '$pass')");
mysqli_close($con);

?>