<div id="entete">
	<table id="profil_user">
		<?php
		if(isset($_SESSION["idUtilisateur"])){
			$Users = User::findById($_SESSION["idUtilisateur"]);
			$us = $Users[0];
			
		echo "<tr><td class=\"profil_user_g\"></td><td class=\"profil_user_c\">";
		echo "<b>$us->prenom $us->nom </b>";
		echo "<div style=\"color:green;\">" . $us->getGroupe() . "</div> ";
		echo "<div>$us->email</div>";
		echo "<a href=\"index.php?module=connexion&action=deconnect\">&nbsp;Déconnexion</a><br />
			</td><td class=\"profil_user_d\"></td></tr>";
                 }
?>
			 
			
	 </table>
	
		<p>
			<?php 
				$jours = array("Dimanche","Lundi","Mardi","Mercredi","Jeudi","Vendredi","Samedi");
				$mois = array("Janvier","Février","Mars","Avril","Mai","Juin","Juillet","Août","Septembre","Octobre","Novembre","Décembre");
				echo $jours[date("w")] . " " . date("d") . " " . $mois[date("m")-1] . " " . date("Y");
			?>
		</p>
</div>
