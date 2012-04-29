<script>
	$(function() {
		$( "#tabs" ).tabs({
			ajaxOptions: {
				error: function( xhr, status, index, anchor ) {
					$( anchor.hash ).html(
						"Chargement de l'onglet impossible." );
				}
			}
		});
	});
	</script>


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
		<li><a href="../content/contentstock3.php">Historique</a></li>
		<li><a href="../content/content4-broken.php">Mouvements</a></li>
	</ul>
</div>

</div><!-- End demo -->
</form>
</section>