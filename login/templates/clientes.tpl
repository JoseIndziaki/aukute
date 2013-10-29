
	<script src="../js/jquery-1.9.1.js"></script>
	<script src="../js/ui/jquery.ui.core.js"></script>
	<script src="../js/ui/jquery.ui.widget.js"></script>
	<script src="../js/ui/jquery.ui.tabs.js"></script>
	<script>
	$(function() {
		$( "#tabs" ).tabs({
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
<div id="custome">
  <div id="tabs">
	<ul>
		<li><a href="#perfil">Editar Perfil</a></li>
		<li><a href="#serviextras">Servicios Extras</a></li>
	</ul>
	<iframe src="perfil.php" id="perfil">
	</iframe>
	<iframe src="extras.php" id="serviextras">
	</iframe>
    </div>
</div>
