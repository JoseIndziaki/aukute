<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href="css/style.css" rel="stylesheet" type="text/css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Administración Aukute Hotel</title>
</head>

<body>
<div id="adminedit">
    <div id="menu">
    <ul>
        <li><a href="#c-esta">Ver Estadísticas</a></li>
        <li><a href="#c-noti">Editar Noticias</a></li>
        <li><a href="#c-gral">General</a></li>
    </ul>
    <ul>
        <li><a>Ver Estadísticas</a></li>
        <li><a>Editar Noticias</a></li>
        <li><a>General</a></li>
    </ul>
    </div>
    <div id="content">
        <div id="c-esta">
          <p>Estadísticas</p>
          <p>&nbsp;</p>
          <p>Usuarios registrados: {$usernum} </p>
          <p>Visitas al Hotel: {$visitas}</p>
          <p>Cliente más Frecuente: {$freq}</p>
          <p>Número de reservas: {$reservas}</p>
          <p>&nbsp;</p>
        </div>
        <div id="c-noti">
          <p>Noticias</p>
          <fieldset>
            <legend>Editar Noticia</legend>
            <form id="form1" name="form1" method="post" action="">
              <p>
                <label for="titulo">Título:</label>
              </p>
              <p>
                <input type="text" name="titulo" id="titulo" />
              </p>
              <p>&nbsp;</p>
              <p>
                <label for="noticia">Noticia:</label>
              </p>
              <p>
                <textarea name="noticia" id="noticia" cols="45" rows="5"></textarea>
              </p>
              <p>
                <input type="submit" name="enviar" id="enviar" value="Publicar" />
              </p>
            </form>
          </fieldset>
          <p>&nbsp;</p>
        </div>
        <div id="c-gral">General</div>
    </div>
</div>
</body>
<script src="../js/jquery-1.9.1.js"></script>
	<script src="../js/ui/jquery.ui.core.js"></script>
	<script src="../js/ui/jquery.ui.widget.js"></script>
	<script src="../js/ui/jquery.ui.tabs.js"></script>
	<script>
	$(function() {
		$( "#adminedit" ).tabs({
			beforeLoad: function( event, ui ) {
				ui.jqXHR.error(function() {
					ui.panel.html(
						"Couldn't load this tab. We'll try to fix this as soon as possible. " +
						"If this wouldn't be a demo." );
				});
			}
		});
	});
	</script>
</html>
