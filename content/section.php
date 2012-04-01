<section class="content_ppal">
    <div id="recherche">
        <table id="mytable">
        <th><label class="label_recherche">Rechercher un utilisateur: </label></th>
        <td><input type="text" name="search" placeholder="recherche..." size="20px" />
        <input type="image" name="b_search" src="../Images/search.png" /></td>
        </table>
    </div>
    
    
    <br><br>
    
    <table id="mytable" class="tablesorter">
        <thead>
            <tr>
                <th>id</th>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Fonction</th>
                <th>Statut</th>
                <th>Gestion</th>

            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td><a href="#" onclick="document.getElementById('shadowing').style.display='block';
	  document.getElementById('box').style.display='block';">Nom 1</a></td>
                <td>prénom 1</td>
                <td>Agent</td>
                <td><a href="#"><img src="../Images/accept.png"></img></td></a>
                <td><a href="#"><img src="../Images/edit.png"></img><img src="../Images/delete.png"></img></a></td>

            </tr>
            <tr>
                <td>2</td>
                <td>Nom 2</td>
                <td>prénom 1</td>
                <td>Agent</td>
                <td><a href="#"><img src="../Images/accept.png"></img></a></td>
                <td><a href="#"><img src="../Images/edit.png"></img><img src="../Images/delete.png"></img></a></td>
            </tr>
            <tr>
                <td>3</td>
                <td>Nom 3</td>
                <td>prénom 2</td>
                <td>Directeur</td>
                <td><a href="#"><img src="../Images/remove.png"></img></a></td>
                <td><a href="#"><img src="../Images/edit.png"></img><img src="../Images/delete.png"></img></a></td>

            </tr>
            <tr>
                <td>4</td>
                <td>Nom 4</td>
                <td>prénom 3</td>
                <td>Agent</td>
                <td><a href="#"><img src="../Images/accept.png"></img></a></td>
                <td><a href="#"><img src="../Images/edit.png"></img><img src="../Images/delete.png"></img></a></td>
            </tr>
        </tbody>
    </table>
    </br>    
    <div id="pager" class="pager">
        <form>
            <a href="#"><img src="../Images/first.png" class="first"></a>
            <a href="#"><img src="../Images/prev.png" class="prev"></a>
            <input class="pagedisplay" type="text">
            <a href="#"><img src="../Images/next.png" class="next"></a>
            <a href="#"><img src="../Images/last.png" class="last"></a>
            <select class="pagesize">
                <option selected="selected" value="10">10</option>
                <option value="20">20</option>
                <option value="30">30</option>
                <option value="40">40</option>
            </select>
        </form>
    </div>
        <div id="shadowing">
            <script>
                $(function() {
                    $( "#date" ).datepicker();
                });
            </script>
        <div id="box" >
            <div id="boxheader">
                <h1>Fiche utilisateur<h1>
                        <span id="boxclose" onclick="document.getElementById('box').style.display='none';document.getElementById('shadowing').style.display='none';"></span>
                        </div>
                        <div id="boxcontent"><img src="../Images/image.png" width="128" height="128" alt="image"/>
                            <form id="fiche" name='fiche'>
                                <table>
                                    <tr><td>Nom : </td><td><input name='nom' type='text' size='20'></td></tr>
                                    <tr><td>Pr&eacute;nom : </td><td><input name='prenom' type='text' size='20'></td></tr>
                                    <tr><td>Date de naissance :</td><td><input id="date" name='date' type='date' size='20'></td><td></td></tr>
                                    <tr><td>Adresse :</td><td><input type="text" name="adress" value="" size="20" /></td></tr>
                                    <tr><td>T&eacute;l&eacute;phone Fixe :</td><td><input type="tel" name="tel_fixe" value="" size="20" /></td></tr>
                                    <tr><td>T&eacute;l&eacute;phone Mobile :</td><td><input type="tel" name="tel_mob" value="" size="20" /></td></tr>
                                    <tr><td>E-mail :</td><td><input type="email" name="tel_mob" value="" size="20" /></td></tr>
                                    <tr><td>Profil :</td><td><select name="profil"><option value="1">Profil 1</option>
                                                <option value="2">Profil 2</option>
                                                <option value="3">Profil 3</option>
                                                <option value="4">Profil 4</option></select></td></tr></tr>
                                    <tr><td>Service :</td><td><select name="service"><option value="1">Service 1</option>
                                                <option value="2">Service 2</option>
                                                <option value="3">Service 3</option>
                                                <option value="4">Service 4</option></select></td></tr>
                                    <tr><td>Poste :</td><td><select name="poste"><option value="1">Agent</option>
                                                <option value="2">Superviseur</option>
                                                <option value="3">Administrateur</option>
                                                <option value="4">Responsable</option></select></td></tr>
                                    <tr><td>Login :</td><td><input name='login' type='date' size='20'></td></tr>
                                    <tr><td>Mot de passe :</td><td><input name='mdp' type='text' size='20'></td></tr>
                                    <tr><td>Source :</td><td><select name="source">
                                                <option value="1">Source 1</option>
                                                <option value="2">Source 2</option>
                                                <option value="3">Source 3</option>
                                                <option value="4">Source 4</option></select></td></tr>
                                    
                                    <tr><td><input name='soumettre' type='submit' value='Valider'></td></tr>
                                </table>
                            </form>
                        </div>
                            
                        </div>
                        
</section>
