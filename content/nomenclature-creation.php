<script>
    $(function() {
        $( "#date" ).datepicker();
        $( "#slider-range" ).slider({
            range: true,
            min: 0,
            max: 1000,
            values: [ 75, 200 ],
            slide: function( event, ui ) {
                $( "#amount" ).val( "" + ui.values[ 0 ] + " - " + ui.values[ 1 ] );
            }
        });
$( "#amount" ).val( "" + $( "#slider-range" ).slider( "values", 0 ) +
    " - " + $( "#slider-range" ).slider( "values", 1 ) );
                                           
});
    
        
</script>

<section id="content_ppal">
    <div class="pagination"><a href="#">accueil > Cr&eacute;ation de nomenclature</a></div> 
    <div id="formulaire">
        <form id="nomenclature" action="/">
            <h4>Cr&eacute;ation de nomencature</h4>

            <p>
                <label for="Nom">Nom</label>
                <input id="name" type="text" />
            </p>
            <p>
                <label for="Cout_usi">Co&ucirc;t d'usinage</label>
                <input id="c_usinage" type="text" />
            </p>
            <p>
                <label for="date_usi">D&eacute;lais d'usinage</label>
                <input id="date_usi" type="text" />
            </p>
            <p>
                <label for="num_patron">Num&eacute;ro de patron</label>
                <input id="num_pat" type="text" />
            </p>
            <p>
                <label for="amount">Alerte Min-Max</label>
                <input id="amount" style="border:0; color:#A8A4A4; font-weight:bold;" />
            <div id="slider-range"></div>
            </p>

            <div id="options">
                <p class="show">
                    <a href="#options">Afficher + d'options</a>
                </p>
                <p class="hide">
                    <a href="#start">Masquer les options</a>
                </p>
                <p>
                    <label for="qte">Quantit&eacute;</label>
                    <input id="quantité" type="text" />

                </p>
                <p>
                    <label for="date_creation">Date de cr&eacute;ation</label>
                    <input id="date" type="text" />
                </p>
                <p>
                    <label for="delais_ass">D&eacute;lais assemblage</label>
                    <input id="delais_ass" type="text" />
                </p>
                <p>
                    <label for="qualite">Qualité</label>
                    <input id="qualite" type="text" />
                </p>
                <p>

                    <label for="unite">Unit&eacute;</label>
                    <select id="unite">
                        <option>Kilogramme</option>
                        <option>Litre</option>
                        <option>métre</option>
                        <option>mole</option>
                    </select>
                </p>
                <p>

                    <label for="cat">Catalogue</label>
                    <input type="radio" name="catalogue" value="oui" /> Oui
                    <input type="radio" name="catalogue" value="non" /> Non
                </p>
                <p>
                    <label for="cat">Active</label>
                    <input type="radio" name="activite" value="oui" /> Oui
                    <input type="radio" name="activite" value="non" /> Non
                </p>
                <p>

            </div>


            <div id="ajouter"><a href="#">Ajouter</a></div>

            <p>
                <a class="submit" href="#finish">Valider</a> ou <a href="#start">annuler</a>
            </p>
            <div id="finish">
                <p>

                    Nomenclature enrigistrer !
                </p>
            </div>
        </form>
    </div>

    <div id="creation">
        <table id="table_creation" class="tablesorter">
            <thead>
                <tr>
                    <th>id</th>
                    <th>R&eacute;f</th>
                    <th>Nom</th>
                    <th>Patron</th>
                    <th>gestion</th>

                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>ref 1</a></td>
                    <td>fer Xd4</td>
                    <td>A30043</td>
                    <td><a href="#"><img src="../Images/remove.png"></img></a></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>ref 1</a></td>
                    <td>fer Xd4</td>
                    <td>A30043</td>
                    <td><a href="#"><img src="../Images/remove.png"></img></a></td>
                </tr>
                <tr>
                    <td>.</td>
                    <td>...</a></td>
                    <td>....</td>
                    <td>....</td>
                    <td><a href="#">.......</img></a></td>
                </tr>
                <tr>
                    <td>.</td>
                    <td>...</a></td>
                    <td>....</td>
                    <td>....</td>
                    <td><a href="#">....</img></a></td>

                </tr>
            </tbody>
        </table>
    </div>
</section>