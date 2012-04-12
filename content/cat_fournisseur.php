<section class="content_ppal">
    <ul id="breadcrumbs-one">
        <li><a href="">Accueil</a></li>
        <li><a href="">Production</a></li>
        <li><a href="">Catalogue</a></li>
        <li><a href="" class="current">Catalogue fournisseurs</a></li>
    </ul>
<div id="recherche">
        <table id="mytable">
        <th><label class="label_recherche">Rechercher un Fournisseur: </label></th>
        <td><input type="text" name="search" placeholder="recherche..." size="20px" />
        <input type="image" name="b_search" src="../Images/search.png" /></td>
        </table>
    </div>
<br>
<br>
 <table id="mytable" class="tablesorter">
        <thead>
            <tr>
                <th>identifiant</th>
                <th>Nom du fournisseur</th>
                <th>Adresse</th>
                <th>Statut</th>
                <th>Catalogue</th>
                <th>Gestion</th>

            </tr>
        </thead>
        <tbody>
            <tr>
                <td>3</td>
                <td>Fournisseur 1</td>
                <td>10 rue du fournisseur</td>
                 <td><a class="bulle" href="#"><img src="../Images/accept.png"/><span>fournisseur actif</span></a></td>
                <td><a>Catalogue</a></td>
                 <td><a class="bulle" href="#"><img src="../Images/edit.png"/><img src="../Images/delete.png"/><span>Edition et suppression</span></a></td>
           </tr>
           <tr>
                <td>3</td>
                <td>Fournisseur 2</td>
                <td>10 rue du fournisseur</td>
                 <td><a href="#"><img src="../Images/accept.png"/></a></td>
                <td><a>Catalogue</a></td>
                 <td><a href="#"><img src="../Images/edit.png"/><img src="../Images/delete.png"/></a></td>
           </tr>
            <tr>
                <td>3</td>
                <td>Fournisseur 3</td>
                <td>10 rue du fournisseur</td>
                 <td><a href="#"><img src="../Images/accept.png"/></a></td>
                <td><a>Catalogue</a></td>
                 <td><a href="#"><img src="../Images/edit.png"/><img src="../Images/delete.png"/></a></td>
           </tr>
            <tr>
                <td>3</td>
                <td>Fournisseur 4</td>
                <td>10 rue du fournisseur</td>
                 <td><a href="#"><img src="../Images/accept.png"/></a></td>
                <td><a>Catalogue</a></td>
                 <td><a href="#"><img src="../Images/edit.png"/><img src="../Images/delete.png"/></a></td>
           </tr>
            <tr>
                <td>3</td>
                <td>Fournisseur 5</td>
                <td>10 rue du fournisseur</td>
                 <td><a href="#"><img src="../Images/accept.png"/></a></td>
                <td><a>Catalogue</a></td>
                 <td><a href="#" onclick="document.getElementById('shadowing').style.display='block';
	  document.getElementById('box').style.display='block';"><img src="../Images/edit.png"/></a><a><img src="../Images/delete.png"/></a></td>
           </tr>
        </tbody>
    </table> 
<div id="shadowing">
<div id="box" >
            <div id="boxheader">
                <h1>Fiche Fournisseur</h1>
                        <span id="boxclose" onclick="document.getElementById('box').style.display='none';document.getElementById('shadowing').style.display='none';"></span>
                        </div>
                        <div id="boxcontent"><img src="../Images/image.png" width="128" height="128" alt="image"/>
                            <form id="fiche" name='fiche'>
                                <table>
                                    <tr><td>Nom du fournisseur : </td><td><input name='nom' type='text' size='20'></td></tr>
                                    <tr><td>Adresse : </td><td><input name='prenom' type='text' size='20'></td></tr>
                                    <tr><td>Code postal :</td><td><input id="date" name='date' type='text' size='20'></td><td></td></tr>
                                    <tr><td>T&eacute;l&eacute;phone Fixe :</td><td><input type="tel" name="tel_fixe" value="" size="20" /></td></tr>
                                    <tr><td>T&eacute;l&eacute;phone Mobile :</td><td><input type="tel" name="tel_mob" value="" size="20" /></td></tr>
                                    <tr><td>E-mail :</td><td><input type="email" name="tel_mob" value="" size="20" /></td></tr>
                                    <tr><td>Profil :</td><td><select name="profil"><option value="1">Profil 1</option>
                                                <option value="2">Profil 2</option>
                                                <option value="3">Profil 3</option>
                                                <option value="4">Profil 4</option></select></td></tr>
                                    <tr><td>Service :</td><td><select name="service"><option value="1">Service 1</option>
                                                <option value="2">Service 2</option>
                                                <option value="3">Service 3</option>
                                                <option value="4">Service 4</option></select></td></tr>
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
</div>             
</section>