<?php /* Smarty version Smarty-3.1.14, created on 2013-10-13 04:47:48
         compiled from "templates\comentarios.tpl" */ ?>
<?php /*%%SmartyHeaderCode:102735259dd2b5e1ae5-19078487%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e413382524fd6f5c36526ac1ff93abfeeef8aea4' => 
    array (
      0 => 'templates\\comentarios.tpl',
      1 => 1381635469,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '102735259dd2b5e1ae5-19078487',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5259dd2b63f818_38505931',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5259dd2b63f818_38505931')) {function content_5259dd2b63f818_38505931($_smarty_tpl) {?><hr  />
<div id="area-coment">
<div id="fb-root"></div>

<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_ES/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div class="fb-comments" data-href="http://example.com/comments" data-colorscheme="The color scheme used in the plugin" data-numposts="5" data-width="The pixel width of the plugin"></div>
  <div id="social">
      <div id="icons">
      <h4>Compartir en Redes Sociales</h4>
      <p id="fb"><img src="images/social/like.png" width="50" /><a href="#" 
  onclick="
    window.open(
      'https://www.facebook.com/sharer/sharer.php?u='+encodeURIComponent(location.href), 
      'facebook-share-dialog', 
      'width=626,height=436'); 
    return false;">  Publicar en Facebook</a></p>
      <p id="tw"><img src="images/social/twitter-logo.png" width="50" /><a href="#" 
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
  </div><?php }} ?>