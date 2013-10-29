{section name=mysec loop=$post}
<div id="readmore">
    <hr />
	<div><a href="news.php?id={$post[mysec].id}"><h3>{$post[mysec].titulo}</h3></a></div>
	<div id="contenido">{$post[mysec].noticia}</div>
</div>
{/section}
<script>$('#readmore').readmore({
		maxHeight:150
	});</script>