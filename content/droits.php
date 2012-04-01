<section class="content_ppal">
   
    
    <div id="formulaire">
        <div class="pagination"><a href="#">accueil > Gestion des droits</a></div> 
        <form id="nomenclature" action="/">
            
            <h4>Gestion utilisateur</h4>

            <p>
                <label for="Nom">Nom</label>
                <input id="nom_util" type="text" onfocus="javascript:document.getElementById('submit1').style.display='block';"/>
                <a class="submit" href="#">Ajouter</a> ou <a href="#">annuler</a>
            </p>
            <div id="submit1">
            <p>
                <label for="Pr&eacute;nom">Pr&eacute;nom</label>
                <input id="prenom_util" type="text" />
            </p>
            <p>                <label for="fonction">Fonction</label>
                <input id="fonction_util" type="text" />
            </p>
            <p>
                <label for="groupe">groupe</label>
                <input id="groupe_util" type="text" />
            </p>
            <p>
                <label for="piece_jointe">Pi&eacute;ce jointe</label>
<!--                <input type="hidden" NAME="MAX_FILE_SIZE" VALUE="204800">
                <input type="file" NAME="fichier" size="23";>-->
                <div id="filedrag">or drop files here</div> 
                
            </p>
            <br><br>
            <div id="G_util" class="tablesorter">
            <table id="table_creation">
            <thead>
                <tr>
                    <th>id</th>
                    <th>Nom</th>
                    <th>Pr&eacute;nom</th>
                    <th>Fonction</th>
                    <th>Statut</th>
                    <th>groupe</th>
                    <th>Modification</th>

                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Fray</td>
                    <td>Hugo</td>
                    <td>directeur</td>
                    <td>Statut 1</td>
                    <td>groupe 1</td>
                    <td><a href="#"><img src="../Images/edit.png"></img><img src="../Images/delete.png"></img></a></td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Fray</td>
                    <td>Hugo</td>
                    <td>directeur 2</td>
                    <td>Statut 8</td>
                    <td>groupe 1</td>
                    <td><a href="#"><img src="../Images/edit.png"></img><img src="../Images/delete.png"></img></a></td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Fray</td>
                    <td>Hugo</td>
                    <td>directeur</td>
                    <td>Statut 3</td>
                    <td>groupe 10</td>
                    <td><a href="#"><img src="../Images/edit.png"></img><img src="../Images/delete.png"></img></a></td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Fray</td>
                    <td>Hugo</td>
                    <td>directeur</td>
                    <td>Statut 2</td>
                    <td>groupe 4</td>
                    <td><a href="#"><img src="../Images/edit.png"></img><img src="../Images/delete.png"></img></a></td>
                </tr>
            </tbody>
        </table>
            </div>
            </div>
            <br><br>
            <h4>Gestion des Groupes</h4>
            <p>
                <label for="Nom">Nom</label>
                <input id="nom_grp" type="text" onfocus="javascript:document.getElementById('submit2').style.display='block';"/>
                <a class="submit" href="#">Ajouter</a> ou <a href="#">annuler</a>
            </p>
           <div id="submit2">
            <p>
                <label for="statut">Statut</label>
                <input id="Statut" type="text" />
            </p>
            <p>
                <label for="fonction">Fonction</label>
                <input id="fonction_grp" type="text" />
            </p>
            <p>
                <label for="modif">Modification</label>
                <input id="modif_grp" type="text" />
            </p>
         
        <br><br>
        <div id="G_group" class="tablesorter">
            <table id="table_creation">
            <thead>
                <tr>
                    <th>id</th>
                    <th>Nom</th>
                    <th>Statut</th>
                    <th>Fonction</th>
                    <th>Modifiction</th>

                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>hugo</a></td>
                    <td>fray</td>
                    <td>directeur</td>
                    <td><a href="#"><img src="../Images/edit.png"></img><img src="../Images/delete.png"></img></a></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>lise</td>
                    <td>durine</td>
                    <td>manager</td>
                    <td><a href="#"><img src="../Images/edit.png"></img><img src="../Images/delete.png"></img></a></td>
                </tr>
                <tr>
                    <td>.</td>
                    <td>...</a></td>
                    <td>....</td>
                    <td>....</td>
                    <td><a href="#"><img src="../Images/edit.png"></img><img src="../Images/delete.png"></img></a></td>
                </tr>
                <tr>
                    <td>.</td>
                    <td>...</a></td>
                    <td>....</td>
                    <td>....</td>
                    <td><a href="#"><img src="../Images/edit.png"></img><img src="../Images/delete.png"></img></a></td>

                </tr>
            </tbody>
        </table>
            </div>
         </form>
    </div>
</section>
