<?php
$conexion = mysqli_connect($dbhost, $dbuser,$dbpass,$db) or die("no se conecta");
$query = "SELECT * FROM general WHERE id = 1";
$rows = mysqli_query($conexion,$query);
while ($row = mysqli_fetch_array($rows)) {
	$dir = $row['direccion'];
	$telefono = $row['telefono'];
	$mail = $row['mail'];
	$us = $row['quienes_somos'];
}


$slide = '
	<div id="media">
		<div id="buscar">
		<iframe src="reservaciones/reservacion.php"></iframe>
		</div>
    	<div id="slide">
            <img src="images/hotel.jpg" />
            <img src="images/hotel-04.jpg" />
            <img src="images/a.jpg" />
            <img src="images/b.jpg" />
            <img src="images/c.jpg" />
            <img src="images/d.jpg" />
            <img src="images/e.jpg" />
            <img src="images/f.jpg" />
            <img src="images/g.jpg" />
            <img src="images/h.jpg" />
            <img src="images/i.jpg" />
            <img src="images/j.jpg" />
        </div>
		<script>
			Galleria.loadTheme("js/themes/classic/galleria.classic.min.js");
			Galleria.run("#slide", {
				transition: "flash",
				imageCrop: true,
				imageTimeout: 1,
				autoplay:true
			});
        </script></div>';
$form = '
		<div id="contenido">
    	<div id="contactol">
          <center>Envíanos un correo:</center>
          <form id="form1" name="form1" method="post" action="correo/enviarcorreo.php">
          <table align="center">
            <tr>
              <td><label for="email">Correo <br /> Eléctronico:</label></td>
              <td><input type="email" name="email" id="email" required placeholder="alguien@example.com"/></td>
            </tr>
            <tr>
              <td><label for="nombre">Nombre:</label></td>
              <td><input type="text" name="nombre" id="nombre" required /></td>
            </tr>
            <tr>
              <td><label for="asunto">Texto:</label></td>
              <td><textarea name="asunto" id="asunto" cols="17" rows="5" required></textarea></td>
            </tr>
            <tr>
              <td></td>
              <td><input type="submit" name="enviar" id="enviar" value="Enviar" /></td>
            </tr>
          </table>
          </form>
      </div></div><div id="map-canvas"></div>  <script type="text/javascript">
  (function() {
    var po = document.createElement("script"); po.type = "text/javascript"; po.async = true;
    po.src = "https://apis.google.com/js/plusone.js";
    var s = document.getElementsByTagName("script")[0]; s.parentNode.insertBefore(po, s);
  })();
</script>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
    <script>
var map;
function initialize() {
  var mapOptions = {
    zoom: 15,
    center: new google.maps.LatLng(20.5547001,-105.2631358),
    mapTypeId: google.maps.MapTypeId.ROADMAP
  };
  map = new google.maps.Map(document.getElementById("map-canvas"),
      mapOptions);
}

google.maps.event.addDomListener(window, "load", initialize);

    </script>';

$us = '<div id="contenido"><div id="contenidos">
		'.$us.'
      </div>
	  <div id="blog"><img src="images/img-agua.jpg" /></div></div>';
	  
$e404 = 'Error 404 página no encontrada';
$t404 = 'Error 404';
$reserv = '<iframe src="reservaciones/reservacion.php"></iframe>';
$foot = $dir.' Teléfono: '.$telefono.'. E-mail: '.$mail;
mysqli_close($conexion);

?>