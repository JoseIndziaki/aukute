<head>
<link type="text/css" rel="stylesheet" href="../css/style.css" />

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script type="text/javascript">
  (function() {
    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
    po.src = 'https://apis.google.com/js/plusone.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
  })();
</script>
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
</head>
<body>
<div class="perfil" style="overflow:hidden">
	<div class="edit">
    <div id="foto">
    <br />
    <h4>Imagen de Perfil</h4>
    <img src="../images/silueta.png" />
    	<hr />
        <p>Nombre: {$name}</p>
        <p>Correo: {$correo}</p>
    </div>
    <div id="perfinfo">
    	<br />
    	<h4>Información Personal</h4>
      <form name="form1" method="post" action="perfil.php" onSubmit="return validarpass()">
        <p>
          <label for="nombre">Nombre:</label>
        </p>
        <p>
          <input type="text" name="nombre" id="nombre">
        </p>
        <p>
          <label for="pass1">Contraseña:<br>
          </label>
          <input type="password" name="pass1" id="pass1">
        </p>
        <p>
          <label for="pass2">Repetir Contraseña:<br>
          </label>
          <input type="password" name="pass2" id="pass2">
        </p>
        <p>
          <label for="correo">Correo:</label>
        </p>
        <p>
          <input type="email" name="correo" id="correo">
        </p>
        <p>
          <input type="submit" name="act" id="act" value="Actualizar">
        </p>
      </form>
    </div></div>
    <div id="infohotel">
      <div>
      <br />
      <h4>Compartir en Redes Sociales</h4>
      <p id="fb"><img src="../images/social/like.png" width="50" /><a href="#" 
  onclick="
    window.open(
      'https://www.facebook.com/sharer/sharer.php?u='+encodeURIComponent(location.href), 
      'facebook-share-dialog', 
      'width=626,height=436'); 
    return false;">  Publicar en Facebook</a></p>
      <p id="tw"><img src="../images/social/twitter-logo.png" width="50" /><a href="#" 
  onclick="
    window.open(
      'https://twitter.com/intent/user?screen_name=indziaki', 
      'twitter-share-dialog', 
      'width=626,height=436'); 
    return false;">Seguir en Twitter</a></p>
      <p><div><img class="g-plus" data-action="share"
  src="https://www.gstatic.com/images/icons/gplus-64.png" alt="Share on Google+"/></div></p>

      </div>
    </div>
</div>
</body>