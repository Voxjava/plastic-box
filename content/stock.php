<script>
	$(function() {
		$( "#tabs" ).tabs({
			ajaxOptions: {
				error: function( xhr, status, index, anchor ) {
					$( anchor.hash ).html(
						"Couldn't load this tab. We'll try to fix this as soon as possible. " +
						"If this wouldn't be a demo." );
				}
			}
		});
	});
	</script>

<div class="pagination"><a href="#">accueil > Stocks</a></div>
<section class="content_ppal">
    <ul id="breadcrumbs-one">
        <li><a href="">Accueil</a></li>
        <li><a href="">Consultation</a></li>
        <li><a href="" class="current">Stocks</a></li>
    </ul>
    <div class="stocks">
<div id="tabs">
	<ul>
		<li><a href="../content/contentstock1.php">Informations G&eacute;n&eacute;rales</a></li>
                <li><a href="../content/contentstock2.php">D&eacute;tails</a></li>
		<li><a href="../content/content3-slow.php">Historique</a></li>
		<li><a href="../content/content4-broken.php">Mouvements</a></li>
	</ul>
</div>

</div><!-- End demo -->
</form>
</section>