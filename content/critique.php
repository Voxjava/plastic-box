<script>
    $(function() {
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
    
    function choisirarticle(select) {
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
        <li><a href="">Stock</a></li>
        <li><a href="" class="current">Seuil Critique</a></li>
    </ul>
    <form>
        <FIELDSET style="width:600px;">
            <LEGEND align=top>Seuils critiques</LEGEND><br>
            <label>Identifiant Article :  </label>
            <select onchange="choisirarticle(this);">
                <option value="1">A23546CD</option>
                <option value="2">A27873ER</option>
                <option value="choix">Choix ou Saisie</option>
            </select>                                      
            <span class="cb"><img src="../Images/cb32.png"/></span>&nbsp;<a href="#" style="font-size: 9px"> annuler</a>
            <br><br>
                <label for="amount">Edition du seuil critique Min-Max</label>
                <input id="amount" style="border:0; color:#000000; font-weight:bold;background-color: whiteSmoke;" />
            <div id="slider-range"></div>
            <br><br>
            <img class="dossier" src="../Images/dossier.png"/><input class="button_bon" type="submit" value="Valider" />
       </FIELDSET>
    </form>   
    <br><br>
<table id="mytable" class="tablesorter">
        <thead>
            <tr>
                <th>identifiant</th>
                <th>R&eacute;f&eacute;rence nomenclature</th>
                <th>Nom nomenclature</th>
                <th>Alerte Min</th>
                <th>Alert Max</th>
                <th>MAJ</th>
                <th>Statut</th>
                <th>Catalogue</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>3</td>
                <td>R&eacute;f 1</td>
                <td>Nom nomenclature 1</td>
                <td>100</td>
                <td>10230</td>
                <td>MAJ 1</td>
                <td>Statut 1</td>
                <td>Catalogue 1</td>
           </tr>
           <tr>
                <td>2</td>
                <td>R&eacute;f 2</td>
                <td>Nom nomenclature 2</td>
                <td>50</td>
                <td>30000</td>
                <td>MAJ 1</td>
                <td>Statut 1</td>
                <td>Catalogue 1</td>
            </tr>
            <tr>
                <td>1</td>
                <td>R&eacute;f 3</td>
                <td>Nom nomenclature 3</td>
                <td>489</td>
                <td>1000</td>
                <td>MAJ 1</td>
                <td>Statut 1</td>
                <td>Catalogue 1</td>
            </tr>
            <tr>
                <td>4</td>
                <td>R&eacute;f 4</td>
                <td>Nom nomenclature 4</td>
                <td>8795</td>
                <td>30000</td>
                <td>MAJ 1</td>
                <td>Statut 1</td>
                <td>Catalogue 1</td>
            </tr>
            <tr>
                <td>5</td>
                <td>R&eacute;f 5</td>
                <td>Nom nomenclature 5</td>
                <td>305</td>
                <td>500</td>
                <td>MAJ 5</td>
                <td>Statut 5</td>
                <td>Catalogue 5</td>
            </tr>
            <tr>
                <td>6</td>
                <td>R&eacute;f 7</td>
                <td>Nom nomenclature 7</td>
                <td>90</td>
                <td>150</td>
               <td>MAJ 7</td>
                <td>Statut 7</td>
                <td>Catalogue 7</td>
            </tr>
        </tbody>
    </table>   
</section>