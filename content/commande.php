<script>
    $(function() {
		$( "#dialog" ).dialog({
			autoOpen: false,
			show: "blind",
			hide: "explode",
                        modal: "true",
                        position: "right",
                        title: "Choix d'une Chaine de Production"
		});

		$( "#opener" ).click(function() {
			$( "#dialog" ).dialog( "open" );
			return false;
		});
	});
          function choisircommande(select) {
				if(select.value == 'choix') {
					var choix = document.createElement('input');
					select.form.onsubmit = function() {
						var option = document.createElement('option');
						option.innerHTML = choix.value;
						option.value = choix.value.substring(0, 2);
						choix.parentNode.replaceChild(select, choix);
						select.insertBefore(option, select.firstChild);
						select.selectedIndex = 0;
					}
					select.parentNode.replaceChild(choix, select);
				}
}
   	</script>
<section class="content_ppal">
    <ul id="breadcrumbs-one">
        <li><a href="">Accueil</a></li>
        <li><a href="">Production</a></li>
        <li><a href="" class="current">Commande</a></li>
    </ul>
    <div id="commande">
        <form method=post action="" >
             <FIELDSET style="width:600px">
                <LEGEND align=top>Bon de Commandes </LEGEND>
                <div style="float:left">
                    <label>&nbsp;Num&eacute;ro de commande :  </label>
                                <select onchange="choisircommande(this);">
					<option value="1">A23546CD</option>
					<option value="2">A27873ER</option>
					<option value="choix">Choix ou Saisie</option>
				</select>
                  
                   <span class="cb"><img src="../Images/cb32.png"/></span>&nbsp;<a href="#" style="font-size: 9px"> annuler</a>
                </div>
                <div style="float:right;margin-right:10px;margin-top:20px;">
                    <label>Date : <?php echo $jours[date("w")] . " " . date("d") . " " . $mois[date("m") - 1] . " " . date("Y"); ?></label>
                </div>
                <div class="clear"></div>
            </FIELDSET>
        </form>
            <FIELDSET style="width:762px;margin-top:20px;">
                <legend>Indications et informations particuliéres</legend>
                <div class="gauche">                
                    <form name="f1">
                        <table id="Commande_table">
                            <tr>
                                <td>Article</td>
                                <td>Quantité commandé</td>
                                <td>Quantité en stock</td>
                                <td>Production</td>
                            </tr>
                            <tr>
                                <td>
                                    <select>
                                        <option></option>
                                        <option>Article 1</option>
                                        <option>Article 2</option>
                                        <option>Article 3</option>
                                    </select>
                                </td>
                                <td><input type="text" size="6" name="c1unite" placeholder="0,00" /></td>
                                <td>Stock article </td>
                                <td> <input type="text" name="c1prix" size="6"/></td>
                            </tr>
                            <tr>
                                <td>
                                    <select>
                                        <option></option>
                                        <option>Article 1</option>
                                        <option>Article 2</option>
                                        <option>Article 3</option>
                                    </select>
                                </td>
                                <td><input type="text" size="6" name="c2" placeholder="0,00"  /></td>
                                <td>stock Article</td>
                                <td><input type="text" name="c2prix" size="6"/></td>
                            </tr>
                            <tr>
                                <td>
                                    <select>
                                        <option></option>
                                        <option>Article 1</option>
                                        <option>Article 2</option>
                                        <option>Article 3</option>
                                    </select>
                                </td>
                                <td> <input type="text" size="6" name="c3" placeholder="0,00" /></td>
                                <td>Stock article</td>
                                <td> <input type="text" name="c3prix" size="6"/></td>
                            </tr>
                            <tr>
                                <td>Chaine de production</td>
                                <td><a class="dispo" href="#"><img src="../Images/dispo.png" style="vertical-align:left;"/></a></td>
                                <td>&nbsp;</td>
                                <td><a href="#" id="opener"><img src="../Images/usine.png"/> 1 </td>
                            </tr>
                            <tr>
                                <td>TOTAL</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td> <input type="text" name="total" size="6" /></td>
                            </tr>
                        </table>
                        </p>
                        <div class="padding">
                         <a class="submit" href="#">Créer</a> ou <a href="#">Supprimer</a>
                        </div>
                    </form>
                </div>
                <div id="dialog">
                    <ul class="iconlist">
                        <li class="usine"><a href="#">Chaine 1</a> Ouverte</li>
                        <li class="usine"><a href="#">Chaine 2</a> Ferm&eacute;</li>
                        <li class="usine"><a href="#">Chaine 3</a> Ouverte</li>
                        <li class="usine"><a href="#">Chaine 4</a> Ouverte</li>
                    </ul>
                </div>
                                    
                <div class="droite">
<!--                    <div id="qcode">
                      
                    </div>-->

                </div>
                <div class="clear"></div>
                </div>    
                


</section>