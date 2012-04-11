<script>
    $(function() {
        $( "#date" ).datepicker();
    });
</script>

<section class="content_ppal">
<ul id="breadcrumbs-one">
    <li><a href="">Accueil</a></li>
    <li><a href="">Production</a></li>
    <li><a href="">Stock</a></li>
    <li><a href="" class="current">Inventaire</a></li>
</ul>
    <form>
        <FIELDSET style="width:600px;">
            <LEGEND align=top>Inventaires </LEGEND><br>
            <label>&nbsp;Titre :  </label><input type="text" id="titre"/>&nbsp;&nbsp;&nbsp;                                          
            <label>Date : </label><input type="date" id="date"/>

        </FIELDSET>
    </form>
    <form>
        <FIELDSET style="width:600px">
            <LEGEND align=top>D&eacute;tails</LEGEND><br>
            <label>&nbsp;Nomenclature :  </label>
            <select>
                <option>.................</option>
            </select>&nbsp;&nbsp;&nbsp;                                          
            <label>Article : </label>
            <select>
                <option>.................</option>
            </select>&nbsp;&nbsp;&nbsp; 
            <label>Recherche Article :</label>
            <input type="text" id="recherche" size="10"/>
        </FIELDSET>
    </form>
    <br>
    <div class="export"><a href="#"><img src="../Images/excel.png"/></a></div>
    <br>
    <br>
    <table id="mytable" class="tablesorter">
        <thead>
            <tr>
                <th>identifiant</th>
                <th>Designation</th>
                <th>Stock th&eacute;horique</th>
                <th>Gestion</th>
                <th>Stock R&eacute;el</th>
                <th>&Egrave;cart</th>
                <th>Prix</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>3</td>
               <td>Designation 1</td>
                <td>1000</td>
                <td>Pi&eacute;ces</td>
                <td><input type="text" /></td>
                <td>-20</td>
                <td>30€</td>
            </tr>
            <tr>
                <td>13</td>
               <td>Designation 2</td>
                <td>2000</td>
                <td>Pi&eacute;ces</td>
                <td><input type="text" value="1800"/></td>
                <td>-200</td>
                <td>30€</td>
            </tr>
             <tr>
                <td>3</td>
               <td>Designation 1</td>
                <td>1000</td>
                <td>Pi&eacute;ces</td>
                <td><input type="text" /></td>
                <td>-20</td>
                <td>30€</td>
            </tr>
             <tr>
                <td>3</td>
               <td>Designation 1</td>
                <td>1000</td>
                <td>Pi&eacute;ces</td>
                <td><input type="text" /></td>
                <td>-20</td>
                <td>30€</td>
            </tr>
             <tr>
                <td>3</td>
               <td>Designation 1</td>
                <td>1000</td>
                <td>Pi&eacute;ces</td>
                <td><input type="text" /></td>
                <td>-20</td>
                <td>30€</td>
            </tr>
             <tr>
                <td>3</td>
               <td>Designation 1</td>
                <td>1000</td>
                <td>Pi&eacute;ces</td>
                <td><input type="text" /></td>
                <td>-20</td>
                <td>30€</td>
            </tr>
             <tr>
                <td>3</td>
               <td>Designation 1</td>
                <td>1000</td>
                <td>Pi&eacute;ces</td>
                <td><input type="text" /></td>
                <td>-20</td>
                <td>30€</td>
            </tr>
        </tbody>
    </table> 
    <br>
    <br>
    <div id="menu_inventaire">
    <img class="dossier" src="../Images/dossier.png"/><input class="button_bon" type="submit" value="Remise à z&eacute;ro inventaire" />
    <img class="dossier" src="../Images/dossier.png"/><input class="button_bon" type="submit" value="Valider l'inventaire" />
    <img class="dossier" src="../Images/dossier.png"/><input class="button_bon" type="submit" value="Imprimer" />
    
    </div>

</section>
