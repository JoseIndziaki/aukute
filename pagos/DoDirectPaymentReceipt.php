<?php
/***********************************************************
DoDirectPaymentReceipt.php

Submits a credit card transaction to PayPal using a
DoDirectPayment request.

The code collects transaction parameters from the form
displayed by DoDirectPayment.php then constructs and sends
the DoDirectPayment request string to the PayPal server.
The paymentType variable becomes the PAYMENTACTION parameter
of the request string.

After the PayPal server returns the response, the code
displays the API request and response in the browser.
If the response from PayPal was a success, it displays the
response parameters. If the response was an error, it
displays the errors.

Called by DoDirectPayment.php.

Calls CallerService.php and APIError.php.

***********************************************************/

require_once 'CallerService.php';
session_start();
$precio = $_POST['precio'];
setcookie('precio',$precio, time()+60*60);

$idhab = $_POST['hab'];
setcookie('idhab', $idhab, time()+60*60);

$llegada = $_POST['desde'];
setcookie('llegada', $llegada, time()+60*60);

$salida = $_POST['hasta'];
setcookie('salida', $salida, time()+60*60);

$dias = $_POST['dias'];
setcookie('dias',$dias, time()+60*60);

$nombre = $_POST['nombrecomp'];
setcookie('nombre',$nombre, time()+60*60);

$email = $_POST['email'];
setcookie('correo', $email, time()+60*60);

$tels = $_POST['tels'];
setcookie('tels', $tels, time()+60*60);

$tipo = $_POST['tipo'];
setcookie('tipo', $tipo, time()+60*60);

header('Content-type: text/html; charset=utf-8'); 
require_once('../fpdf/fpdf.php');



/**
 * Get required parameters from the web form for the request
 */
$paymentType =urlencode( $_POST['paymentType']);
$firstName =urlencode( $_POST['firstName']);
$lastName =urlencode( $_POST['lastName']);
$creditCardType =urlencode( $_POST['creditCardType']);
$creditCardNumber = urlencode($_POST['creditCardNumber']);
$expDateMonth =urlencode( $_POST['expDateMonth']);

// Month must be padded with leading zero
$padDateMonth = str_pad($expDateMonth, 2, '0', STR_PAD_LEFT);

$expDateYear =urlencode( $_POST['expDateYear']);
$cvv2Number = urlencode($_POST['cvv2Number']);
$address1 = urlencode($_POST['address1']);
$address2 = urlencode($_POST['address2']);
$city = urlencode($_POST['city']);
$state =urlencode( $_POST['state']);
$zip = urlencode($_POST['zip']);
$amount = urlencode($_POST['amount']);
//$currencyCode=urlencode($_POST['currency']);
$currencyCode= $_POST['currencyCodeType'];
$paymentType=urlencode($_POST['paymentType']);

/* Construct the request string that will be sent to PayPal.
   The variable $nvpstr contains all the variables and is a
   name value pair string with & as a delimiter */
$nvpstr="&PAYMENTACTION=$paymentType&AMT=$amount&CREDITCARDTYPE=$creditCardType&ACCT=$creditCardNumber&EXPDATE=".         $padDateMonth.$expDateYear."&CVV2=$cvv2Number&FIRSTNAME=$firstName&LASTNAME=$lastName&STREET=$address1&CITY=$city&STATE=$state".
"&ZIP=$zip&COUNTRYCODE=US&CURRENCYCODE=USD";



/* Make the API call to PayPal, using API signature.
   The API response is stored in an associative array called $resArray */
$resArray=hash_call("doDirectPayment",$nvpstr);

/* Display the API response back to the browser.
   If the response from PayPal was a success, display the response parameters'
   If the response was an error, display the errors received using APIError.php.
   */
$ack = strtoupper($resArray["ACK"]);

if($ack!="SUCCESS")  {
    $_SESSION['reshash']=$resArray;
	$location = "APIError.php";
		 header("Location: $location");
   }
   
require('../vars/db_login.php');

$hoy = date('d-m-Y');

$conect = mysqli_connect($dbhost,$dbuser, $dbpass, $db);
$insertar = "INSERT INTO reservas(fecha, hab, pago, costo, correo, tels) VALUES('$hoy', $idhab, '$tipo', $precio, '$email', '$tels')";
$actfechas = "UPDATE habitaciones SET ocupado = 1, desde = '$llegada', hasta = '$salida' WHERE id = $idhab";
$result1 = $conect->query($insertar);
$result2 = $conect->query($actfechas);
if(isset($_SESSION['username'])){
	$un = $_SESSION['username'];
	$usus = $conect->query("SELECT * FROM usuarios WHERE usuario = '$un'");
	if($usus->num_rows > 0){
		$row = mysqli_fetch_array($usus);
		$vis = $row['visitas']+1;
		$conect->query("UPDATE usuarios SET visitas = $vis WHERE usuario = '$un'");
	}
}
   

require('../smarty.php');
if(isset($_SESSION['username'])){
	$smarty->assign('sesion', 'Cerrar Sesión');
	$smarty->assign('todo', '../login/logout.php');
	$smarty->assign('opciones', 'Mi cuenta');
}
else{
	$smarty->assign('sesion', 'Regístrate');
	$smarty->assign('todo', '../register');
	$smarty->assign('opciones', 'Login');
}
$smarty->assign('titulo', 'Confirmación de Pago');
$smarty->display('../templates/head-login.tpl');
$smarty->display('templates/pagado.tpl');
require_once('ShowAllResponse.php');
if(!isset($_SESSION['username'])) $smarty->display('templates/register.tpl');
$smarty->display('../templates/footer.tpl');

mysqli_close($conect);


?>




