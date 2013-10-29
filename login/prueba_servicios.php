<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<?php 
	session_start();
	$username = $_SESSION['username'];
	require('../vars/db_login.php');
	$servicios = array();
	$i = 0;
	$con = mysqli_connect($dbhost, $dbuser, $dbpass, $db);
	$consulta = mysqli_query($con, "SELECT disponibilidad FROM servicios_extra WHERE id=1");
	$fila = mysqli_fetch_array($consulta);
	$diponibilidad = $fila["disponibilidad"];
	if (isset($_POST['spa0']) && ($diponibilidad > 0)){
		$jacuzzi = $_POST['spa0'];
		$servicios[] = 1;
		}
	else if (isset($_POST['spa0']) && ($diponibilidad <= 0)) { 
		$jacuzzi = 0; 
		echo "El sercio de: Jacuzzi no esta disponible";
		echo "<br>";	
	}
	else { $jacuzzi = 0;}

	$consulta = mysqli_query($con, "SELECT disponibilidad FROM servicios_extra WHERE id=2");
		$fila = mysqli_fetch_array($consulta);
		$diponibilidad = $fila["disponibilidad"];
	if (isset($_POST['spa1']) && ($diponibilidad > 0)){
		$facial = $_POST['spa1'];
		$servicios[] = 2;	
		}
	else if (isset($_POST['spa1']) && ($diponibilidad <= 0)) { 
		$facial = 0;
		echo "El sercio de: Facial no esta disponible";
		echo "<br>";
	}
	else {$facial = 0;}
	$consulta = mysqli_query($con, "SELECT disponibilidad FROM servicios_extra WHERE id=3");
		$fila = mysqli_fetch_array($consulta);
		$diponibilidad = $fila["disponibilidad"];
	if (isset($_POST['spa2']) && ($diponibilidad > 0)){
		$masaje = $_POST['spa2'];
		$servicios[] = 3;	
		}
	else if (isset($_POST['spa2']) && ($diponibilidad <= 0)) { 
		$masaje = 0;
		echo "El sercio de: Masaje no esta disponible";
		echo "<br>";
	}
	else {$masaje = 0;}
	$consulta = mysqli_query($con, "SELECT disponibilidad FROM servicios_extra WHERE id=4");
		$fila = mysqli_fetch_array($consulta);
		$diponibilidad = $fila["disponibilidad"];
	if (isset($_POST['farmacia0']) && ($diponibilidad > 0)){
		$med = $_POST['farmacia0'];	
		$servicios[] = 4;
		}
	else if (isset($_POST['farmacia0']) && ($diponibilidad <= 0)) { 
		$med = 0;
		echo "El sercio de: Medicina a Cuarto no esta disponible";
		echo "<br>";
	}
	else {$med = 0;}
	$consulta = mysqli_query($con, "SELECT disponibilidad FROM servicios_extra WHERE id=5");
		$fila = mysqli_fetch_array($consulta);
		$diponibilidad = $fila["disponibilidad"];
	if (isset($_POST['farmacia1']) && ($diponibilidad > 0)){
		$doc = $_POST['farmacia1'];	
		$servicios[] = 5;
		}
	else if (isset($_POST['farmacia1']) && ($diponibilidad <= 0)) { 
		$doc = 0;
		echo "El sercio Doctor no esta disponible";
		echo "<br>";
	}
	else {$doc = 0;}
	$consulta = mysqli_query($con, "SELECT disponibilidad FROM servicios_extra WHERE id=6");
		$fila = mysqli_fetch_array($consulta);
		$diponibilidad = $fila["disponibilidad"];
	if (isset($_POST['restaurant0']) && ($diponibilidad > 0)){
		$cuarto = $_POST['restaurant0'];	
		$servicios[] = 6;
		}
	else if (isset($_POST['restaurant0']) && ($diponibilidad <= 0)) { 
		$cuarto = 0;
		echo "El servicio a cuarto no esta disponible";
		echo "<br>";
	}
	else {$cuarto = 0;}
	$consulta = mysqli_query($con, "SELECT disponibilidad FROM servicios_extra WHERE id=7");
		$fila = mysqli_fetch_array($consulta);
		$diponibilidad = $fila["disponibilidad"];
	if (isset($_POST['restaurant1']) && ($diponibilidad > 0)){
		$cena = $_POST['restaurant1'];	
		$servicios[] = 7;
		}
	else if (isset($_POST['restaurant1']) && ($diponibilidad <= 0)) { 
		$cena = 0;
		echo "El sercio de: cena romantica no esta disponible";
		echo "<br>";
	}
	else {$cena = 0;}
	$consulta = mysqli_query($con, "SELECT disponibilidad FROM servicios_extra WHERE id=8");
		$fila = mysqli_fetch_array($consulta);
		$diponibilidad = $fila["disponibilidad"];
	if (isset($_POST['tintoreria0']) && ($diponibilidad > 0)){
		$lavado = $_POST['tintoreria0'];
		$servicios[] = 8;	
		}
	else if (isset($_POST['tintoreria0']) && ($diponibilidad <= 0)) { 
		$lavado = 0;
		echo "El sercio de: lavado no esta disponible";
		echo "<br>";
	}
	else {$lavado = 0;}
	$consulta = mysqli_query($con, "SELECT disponibilidad FROM servicios_extra WHERE id=9");
		$fila = mysqli_fetch_array($consulta);
		$diponibilidad = $fila["disponibilidad"];
	if (isset($_POST['tintoreria1']) && ($diponibilidad > 0)){
		$planchado = $_POST['tintoreria1'];	
		$servicios[] = 9;
		}
	else if (isset($_POST['tintoreria1']) && ($diponibilidad <= 0)) { 
		$planchado = 0;
		echo "El sercio de: planchado no esta disponible";
		echo "<br>";
	}
	else {$planchado = 0;}
	$consulta = mysqli_query($con, "SELECT disponibilidad FROM servicios_extra WHERE id=10");
		$fila = mysqli_fetch_array($consulta);
		$diponibilidad = $fila["disponibilidad"];
	if (isset($_POST['tintoreria2']) && ($diponibilidad > 0)){
		$compostura = $_POST['tintoreria2'];
		$servicios[] = 10;	
		}
	else if (isset($_POST['tintoreria2']) && ($diponibilidad <= 0)) { 
		$compostura = 0;
		echo "El sercio de: compostura no esta disponible";
		echo "<br>";
	}
	else{$compostura = 0;}

	$total = $jacuzzi + $facial + $masaje + $med + $doc + $cuarto + $cena + $lavado + $planchado + $compostura;
	if (mysqli_connect_errno($con)){
  		echo "Failed to connect to MySQL: " . mysqli_connect_error();
  		}
	while( $i < count($servicios)){
		$servicios[$i];
		$consulta = mysqli_query($con, "SELECT * FROM servicios_extra WHERE id=$servicios[$i]");
		$fila = mysqli_fetch_array($consulta);
		$cantidad = $fila["cantidad"];
		if($cantidad > 0 ){
			$cantidad--;
			mysqli_query($con,"UPDATE servicios_extra SET cantidad=$cantidad WHERE id=$servicios[$i]");
				if($cantidad <= 0){
					mysqli_query($con,"UPDATE servicios_extra SET disponibilidad=0 WHERE id=$servicios[$i]");
				}
			} 
		$i++; 
		}$consulta = $con->query( "SELECT * FROM usuarios WHERE usuario='$username'");
	$fila = mysqli_fetch_array($consulta);
	$actual = $fila["costos_adicionales"];
	$email = $fila["email"];
	$total = $total + $actual;
	mysqli_query($con,"UPDATE usuarios SET costos_adicionales=$total WHERE usuario='$username'");	
	mysqli_close($con);
	mail($email, 'Cargo a cuenta de Servicios Extras', 'Su Pago adicional cargado a su cuenta es de : '.$total, 'From: reservaciones@aukute.com');
?>
<head>
<link type="text/css" rel="stylesheet" href="../css/style.css" />
</head>

<body>
	<h3>Tu pago extra es de: <?php echo $total?> enviado a su correo <?php echo $email?> </h3>
</body>
</html>

