<?php /* Smarty version Smarty-3.1.14, created on 2013-10-14 01:10:15
         compiled from "templates\perfil.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20905525b25fb1ef157-78195611%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a99aba8a065ce60cd0524f3f3219dea8b293f693' => 
    array (
      0 => 'templates\\perfil.tpl',
      1 => 1381712840,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20905525b25fb1ef157-78195611',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_525b25fb38ff79_28856446',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_525b25fb38ff79_28856446')) {function content_525b25fb38ff79_28856446($_smarty_tpl) {?><head>
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
          <label for="password">Repetir Contraseña:<br>
          </label>
          <input type="text" name="pass2" id="pass2">
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
</body><?php }} ?>