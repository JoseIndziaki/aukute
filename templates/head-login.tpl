<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>{$titulo}</title>
<link rel="stylesheet" href="../css/style.css" type="text/css" />
<script>
function validarpass(){
var pass1 = document.getElementById('pass1').value;
var pass2 = document.getElementById('pass2').value;
	if(pass1 != pass2){
		alert('Las contraseñas no coinciden');
		return false;
	}
}
</script>
<script>
function validartels(){
var mail1 = document.getElementById('email').value;
var mail2 = document.getElementById('email2').value;
var casa = document.getElementById('telcasa').value;
var cel = document.getElementById('celular').value;
	if(mail1 != mail2){
		alert('Los correos no coinciden');
		return false;
	}
	else if(casa=="" && cel==""){
		alert('Por lo menos anota un número telefónico');
		return false;
	}
}
</script>
<script>
function mostrar(frm) { 
	num = frm.options[frm.selectedIndex].value;
  if(num=='México') { 
    document.getElementById('estado').style.visibility='visible'; 
    document.getElementById('state').style.visibility='hidden';   
  } 
  else if(num=='USA'){ 
    document.getElementById('state').style.visibility='visible'; 
    document.getElementById('estado').style.visibility='hidden';  
  } 
} 
</script>
<script>
function validarpago() { 
	pago = document.getElementById("seguir").value;
	if(pago == "Pagar con PayPal") return "../pagos/SetExpressCheckout.php";
	else if(pago == "Pagar con Tarjeta") return "../pagos/DoDirectPayment2.php";
} 
</script>

</head>

<body id="principal">
<header>
	<div id="logo"><a href="../"><img src="../images/logo.png" width="200" /></a></div>
	<div id="menu">
    	<div id="menu-links">
    	<ul>
        	<li><a href="../">Inicio</a></li>
        	<li><a href="../index.php?id=reserv">Reservaciones</a></li>
        	<li><a href="../index.php?id=us">Nosotros</a></li>
        	<li><a href="../index.php?id=news">Noticias</a></li>
        	<li><a href="../index.php?id=contact">Contacto</a></li>
        </ul>
        </div>
        <div id="registro">
    	<ul>
        	<li><a href="../login">{$opciones}</a></li>
        	<li><a href="{$todo}">{$sesion}</a></li>
        </ul>
        </div>
    </div>
</header>
<div id="medium">