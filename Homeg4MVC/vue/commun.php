<?php

function entete($etape)
{
	ob_start();

/*if (isset($_GET['id']) AND $_GET['id']> 0)
{
	$getid = intval($_GET['id']);
	$requser = $bdd ->prepare('SELECT * FROM utilisateur WHERE id = ?');
	$requser -> execute(array($getid));
	$userinfo = $requser->fetch();
*/
?>
		<header>
			<div class="logo">
				<img src="images/logo.png" alt= "logo">
			</div>
			<nav>
				<ul id ="menu-accordeon">

					<?php

					if($etape=="home")
					{
	                    echo('<li><a href="index.php?cible=home"><strong>Home</strong></a></li>');
	                }
	                else
	                {
	                	echo('<li><a href="index.php?cible=home">Home</a></li>');
	                }
	                if($etape=="reglage")
	                {
	                	echo('<li id="reglage"><a href="index.php?cible=reglage"><strong>Réglage</strong></a>');
	                }
	                else
	                {
	                	echo('<li id="reglage"><a href="index.php?cible=reglage">Réglage</a>');
	                }
					 
					 ?>
						<ul>

						<?php

							if($etape=="securite")
							{
			                    echo('<li><a href="index.php?cible=securite"><strong>Sécurité</strong></a></li>');
			                }
			                else
	                		{
	                			echo('<li><a href="index.php?cible=securite">Sécurité</a></li>');
	                		}
			                if($etape=="systeme")
							{
			                    echo('<li><a href="index.php?cible=systeme"><strong>Système</strong></a></li>');
			                }
			                else
	                		{
	                			echo('<li><a href="index.php?cible=systeme">Système</a></li>');
	                		}
			                if($etape=="cgu")
							{
			                    echo('<li id="reglage_3"><a href="index.php?cible=cgu"><strong>Conditions générales d\'utilisation</strong></a></li>'); // voir pour l'appostophe
			                }
			                else
	                		{
	                			echo('<li><a href="index.php?cible=cgu">Conditions générales d\'utilisation</a></li>');
	                		}
			                if($etape=="edition_profil"/* AND isset($_SESSION['id']) AND $userinfo['id'] == $_SESSION['id']*/)
							{
			                    echo('<li id="reglage_4"><a href="index.php?cible=edition_profil"><strong>Editer mon profil</strong></a></li>');
			                }
			                else
	                		{
	                			echo('<li><a href="index.php?cible=edition_profil">Editer mon profil</a></li>');
	                		}

		                ?>

						</ul>
					</li>

					<li id="contact"><a href="#">Contact</a>
						<ul>

						<?php

							if($etape=="newsletter")
							{
			                    echo('<li id="contact_1"><a href="index.php?cible=newsletter">Newsletter</a></li>'); 
			                }
			                else
	                		{
	                			echo('<li><a href="index.php?cible=newsletter">Newsletter</a></li>');
	                		}
			                if($etape=="forum")
							{
			                    echo('<li id="contact_2"><a href="index.php?cible=forum">Forum</a></li>'); 
			                }
			                else
	                		{
	                			echo('<li><a href="index.php?cible=forum">Forum</a></li>');
	                		}
			                if($etape=="sav")
							{
			                    echo('<li id="contact_3"><a href="index.php?cible=sav">S.A.V</a></li>'); 
			                }
			                else
	                		{
	                			echo('<li><a href="index.php?cible=sav">S.A.V</a></li>');
	                		}

		                ?>

						</ul>
					</li>

					<?php

					if($etape=="deconnexion") //AND isset($_SESSION['id']) AND $userinfo['id'] == $_SESSION['id'])
					{
	                    echo('<li><a href="index.php?cible=deconnexion">Déconnexion</a></li>');
	                }
	                else
	                {
	                	echo('<li><a href="index.php?cible=deconnexion">Déconnexion</a></li>');
	                }

					?>
					
				</ul>
			</nav>

			<div id="utilisateur_connect">
				<p>

				</p><?php echo $_SESSION['identifiant']; ?>  <strong> : Connecté</strong></p>
			</div>

		</header>
	<?php
	$entete = ob_get_clean();
	return $entete;
}
//}








function enteteHorsConnexion($titre = '')
{
	ob_start();
	?>
	<header>
			<div class="logo">
				<img src="images/logo.png" alt= "logo">
			</div>
			<div id = "titre_hors_connexion">
				<h1><?php echo $titre; ?></h1>
			</div>
	</header>

	<?php 
	$entete = ob_get_clean();
	return $entete;
}






function enteteAdmin($etape)
{
	ob_start();
	?>
	<header>
			<div class="logo">
				<img src="images/logo.png" alt= "logo">
			</div>
			<nav>
				<ul id ="menu-accordeon">
					<?php

					if($etape=="home")
					{
	                    echo('<li><a href="index.php?cible=home_admin"><strong>Home</strong></a></li>');
	                }
	                else
	                {
	                	echo('<li><a href="index.php?cible=home_admin">Home</a></li>');
	                }
	                if($etape=="inscription")
					{
	                    echo('<li><a href="index.php?cible=inscription"><strong>Inscription</strong></a></li>');
	                }
	                else
	                {
	                	echo('<li><a href="index.php?cible=inscription">Inscription</a></li>');
	                }
	                if($etape=="utilisateur")
					{
	                    echo('<li><a href="index.php?cible=utilisateur"><strong>Utilisateur</strong></a></li>');
	                }
	                else
	                {
	                	echo('<li><a href="index.php?cible=utilisateur">Utilisateur</a></li>');
	                }
	                if($etape=="deconnexion") 
					{
	                    echo('<li><a href="index.php?cible=deconnexion">Déconnexion</a></li>');
	                }
	                else
	                {
	                	echo('<li><a href="index.php?cible=deconnexion">Déconnexion</a></li>');
	                }

					?>
						
				</ul>
			</nav>
	</header>

	<?php 
	$entete = ob_get_clean();
	return $entete;
}











function aside($etape)
{
	ob_start();
	?>

		<div id="tdb">
				<table id="tableau_tdb">

					<tr>
						<td colspan="2">Tableau de bord</td>
					</tr>

					<tr>
						<td class="critere">Température</td>
						<td class="critere">Humidité</td>
					</tr>

					<tr>
						<td class="critere">Alarme</td>
						<td class="critere">Caméras</td>
					</tr>

				</table>
		</div>

		<div id="menu_capteurs">
			<div id="liste_capteurs"  class="test">
				<ul>

				<?php

				if($etape=="lampes")
				{
                    echo('<li><a href="index.php?cible=lampes"><strong>Lampes</strong></a></li>'); 
                }
                else
	            {
	            	echo('<li><a href="index.php?cible=lampes">Lampes</a></li>');
	            }
                if($etape=="chauffage")
				{
                    echo('<a href="index.php?cible=chauffage"><li><strong>Chauffage</strong></li></a>'); 
                }
                else
	            {
	            	echo('<li><a href="index.php?cible=chauffage">Chauffage</a></li>');
	            }
                if($etape=="volets")
				{
                    echo('<a href="index.php?cible=volets"><li><strong>Volets</strong></li></a>'); 
                }
                else
	            {
	            	echo('<li><a href="index.php?cible=volets">Volets</a></li>');
	            }
                if($etape=="alarme")
				{
                    echo('<a href="index.php?cible=alarme"><li><strong>Alarme</strong></li></a>'); 
                }
                else
	            {
	            	echo('<li><a href="index.php?cible=alarme">Alarme</a></li>');
	            }
                if($etape=="cameras")
				{
                    echo('<a href="index.php?cible=cameras"><li><strong>Caméras</strong></li></a>'); 
                }
                else
	            {
	            	echo('<li><a href="index.php?cible=cameras">Caméras</a></li>');
	            }


				?>
					
				</ul>
			</div> 
			
		</div>

	<?php
	$aside = ob_get_clean();
	return $aside;
}






function asideHorsConnexion()
{
	ob_start();
	?>

	<?php
	$asideHorsConnexion= ob_get_clean();
	return $asideHorsConnexion;
}






function contenu()
{
	ob_start();
	?>

	<?php
	$contenu= ob_get_clean();
	return $contenu;
}






function pied()
{ // FAIRE LES LIENS !!!!!
	ob_start();
	?>
		<footer>
            <div id="contact_pied">
                <h2>Contact</h2>
                <ul>
                    <li><a href="mailto:siteomeg4@gmail.com" title="Courrier électronique">Ecrivez-nous</a></li>
                    <li><a href="#" title="Téléphone">Appelez-nous</a></li>
                    <li><a href="#" title="Venir nous voir">Venir nous voir</a></li>
                </ul>
            </div>
            
            <div id="mentions_pied">
                <h2>Mentions légales</h2>
                <ul>
                    <li><a href="#" title="Lire les mentions légales">Lire</a></li>
                    <li><a href="#" title="Télécharger les mentions légales">Télécharger en pdf</a></li>
                </ul>
            </div>
            
            <div id="reseaux_pied">
                <h2>Nous suivre sur :</h2>
                <a href="https://www.facebook.com/Homeg4-1704397496541016/"><img src="images/facebook.png" alt="Facebook"></a>
                <a href="https://twitter.com/Homeg_4"><img src="images/twitter.png" alt="Twitter"></a>
            </div>
         
        </footer>

	<?php
	$pied = ob_get_clean();
	return $pied;
}






function formulaireConnexion()
{
	ob_start();
	?>
	<div>
	<form method="POST" action="index.php?cible=verif">
		<table id="tableau_connexion">
		<tr>
			<td>
				<label for="identifiantconnect"> Identifiant :</label>
			</td>
			<td>
				<input type="text" name="identifiantconnect" placeholder="Identifiant">
			</td>
		</tr>



		<tr>
			<td>
				<label for="mdpconnect">Mot de passe :</label>
			</td>
			<td>
				<input type="password" name="mdpconnect" placeholder="Mot de passe">
			</td>
		</tr>


		<tr>
			<td>
				
			</td>
			<td>
				<input type="submit" name="formconnexion" value="Se connecter">
			</td>
		</tr>
		</table>
	</form>
	</div>
	
	<?php 
	$formulaireConnexion = ob_get_clean();
	return $formulaireConnexion;
}






function edition_profil()
{
	ob_start();
	?>
	<div id="editionprofil">
		<form method="POST" action="index.php?cible=verif">
			<table id="tableau_editionprofil">

				<tr>
					<td>
						<label for="newidentifiant">Nouvel identifiant :</label>
					</td>
					<td>
						<input type="text " name="newidentifiant" id="newidentifiant" placeholder="Identifiant">
					</td>
				</tr>
				<tr>
					<td>
						<label for="newmail">Nouveaux mail :</label>
					</td>
					<td>
						<input type="email" name="newmail" id="newmail" placeholder="Mail">
					</td>
				</tr>

				<tr>
					<td>
						<label for="newmail2">Confirmez votre mail :</label>
					</td>
					<td>
						<input type="email" name="newmail2" id="newmail2" placeholder="Mail">
					</td>
				</tr>

				<tr>
					<td>
						<label for="newmdp">Nouveau mot de passe :</label>
					</td>
					<td>
						<input type="password" name="newmdp" id="newmdp" placeholder="Mot de passe" >
					</td>
				</tr>

				<tr>
					<td>
						<label for="newmdp2">Confirmez votre mot de passe :</label>
					</td>
					<td>
						<input type="password" name="newmdp2" id="newmdp2" placeholder="Mot de passe">
					</td>
				</tr>


				<tr>
					<td>
					
					</td>
					<td>
						<br>
						<input type="submit" value="Mettre à jour mon profil" name="formeditionprofil">
					</td>
				</tr>

			</table>
		</form>
	</div>

	<?php
	$editeurProfil = ob_get_clean();
	return $editeurProfil;
}






function formulaireParapieces()
{
	ob_start();
	?>
	<div id="parametrage">
		<form method="POST" action="index.php?cible=para_capteurs">
			<table id="tableau_parametrage_pieces">

				<tr>
					<td colspan="2">
						<h1>Choix des pièces</h1>
					</td>
				</tr>


				<tr>
					<td>
						<label for="nbr_salon">Salon :</label>
					</td>
					<td>
						<input type="number" min="0" max="3" name="nbr_salon" id="nbr_salon" style="width: 30px;">
					</td>
				</tr>


				<tr>
					<td>
						<label for="nbr_cuisine">Cuisine :</label>
					</td>
					<td>
						<input type="number" min="0" max="2" name="nbr_cuisine" id="nbr_cuisine" style="width: 30px;">
					</td>
				</tr>


				<tr>
					<td>
						<label for="nbr_sdb">Salle de bain :</label>
					</td>
					<td>
						<input type="number" min="0" max="5" name="nbr_sdb" id="nbr_sdb" style="width: 30px;">
					</td>
				</tr>


				<tr>
					<td>
						<label for="nbr_chambre">Chambre :</label>
					</td>
					<td>
						<input type="number" min="0" max="5" name="nbr_chambre" id="nbr_chambre" style="width: 30px;">
					</td>
				</tr>

				<tr>
					<td>
						<label for="nbr_jardin">Jardin :</label>
					</td>
					<td>
						<input type="number" min="0" max="1" name="nbr_jardin" id="nbr_jardin" style="width: 30px;">
					</td>
				</tr>

				<tr>
					<td>
					
					</td>
					<td>
						<br>
						<input type="submit" value="valider" name="formparapieces">
					</td>
				</tr>

			</table>
		</form>
	</div>

	<?php
	$paraPieces = ob_get_clean();
	return $paraPieces;
}







function formulaireParacapteurs ($piece = '')
{
	ob_start();
	?>
			<table id="tableau_parametrage_capteurs">

				<tr>
					<td colspan="2">
						<h1><?php echo $piece; ?></h1>
					</td>
				</tr>
 
				<tr>
					<td>
						<label for="nbr_volet">Nombre de volets :</label>
					</td>
					<td>
						<input type="number" min="0" max="10" name="nbr_volet" id="nbr_volet" style="width: 30px;">
					</td>
				</tr>

				<tr>
					<td>
						<label for="nbr_chauffage">Nombre de sonde thermique :</label>
					</td>
					<td>
						<input type="number" min="0" max="10" name="nbr_chauffage" id="nbr_chauffage" style="width: 30px;">
					</td>
				</tr>

				<tr>
					<td>
						<label for="nbr_light">Nombre de capteurs de luminosité :</label>
					</td>
					<td>
						<input type="number" min="0" max="10" name="nbr_light" id="nbr_light" style="width: 30px;">
					</td>
				</tr>


				<tr>
					<td>
						<label for="nbr_baro">Nombre de baromètre :</label>
					</td>
					<td>
						<input type="number" min="0" max="10" name="nbr_baro" id="nbr_baro" style="width: 30px;">
					</td>
				</tr>


				<tr>
					<td>
						<label for="nbr_presence">Nombre de capteurs de présence :</label>
					</td>
					<td>
						<input type="number" min="0" max="10" name="nbr_presence" id="nbr_presence" style="width: 30px;">
					</td>
				</tr>


				<tr>
					<td>
						<label for="nbr_camera">Nombre de caméras :</label>
					</td>
					<td>
						<input type="number" min="0" max="10" name="nbr_camera" id="nbr_camera" style="width: 30px;">
					</td>
				</tr>
				<tr>
					<td>
									
					</td>
					<td>
						<br>
						<input type="submit" value="valider" name="formparacapteurs">
					</td>
				</tr>
			</table>
		</form>
	</div>
				

	<?php
	$paraPieces = ob_get_clean();
	return $paraPieces;
}

function grillecapteurs ($piece = '')
{
	ob_start();
	?>

		<div id ="nom_piece">
			<h1> <?php echo $piece ?></h1>
		</div>


		<div class="nom_capteur"> 
			<h3> <?php echo $capteur ?> </h3>
		</div>



	<?php
	$grillecapteurs = ob_get_clean();
	return $grillecapteurs;
}




// FONCTION ADMINISTRATEUR





function acceuiladmin()
{
	ob_start();
	?>

	<h1>Bienvenue sur le portail Administrateur !</h1>
	
	<?php
	$acceuiladmin = ob_get_clean();
	return $acceuiladmin;
}

function forminscription()
{
	ob_start();
	?>

	<form method="POST" action="index.php?cible=home_admin">
		<table id="tableau_inscription">
			<tr>
				<td>
					<label for="nom">Nom :</label>
				</td>
				<td>
					<input type="text" name="nom" placeholder="Nom" id="nom" style="width: 250px; height: 15px;" value="<?php if (isset($nom)) { echo $nom;} ?>">
				</td>
			</tr>
			<tr>
				<td>
					<label for="prenom">Prénom :</label>
				</td>
				<td>
					<input type="text" name="prenom" placeholder="Prénom" id="prenom" style="width: 250px; height: 15px;" value="<?php if (isset($prenom)) { echo $prenom;} ?>">
				</td>
			</tr>
			<tr>
				<td>
					<label for="identifiant">Identifiant :</label>
				</td>
				<td>
					<input type="text" name="identifiant" placeholder="Identifiant" id="identifiant" style="width: 250px; height: 15px;" value="<?php if (isset($identifiant)) { echo $identifiant;} ?>">
				</td>
			</tr>
			<tr>
				<td>
					<label for="mail">Mail :</label>
				</td>
				<td>
					<input type="email" name="mail" placeholder="Mail" id="mail" style="width: 250px; height: 15px;" value="<?php if (isset($mail)) { echo $mail;} ?>">
				</td>
			</tr>
			<tr>
				<td>
					<label for="mail2">Confirmer votre mail :</label>
				</td>
				<td>
					<input type="email" name="mail2" placeholder="Confirmer votre mail" id="mail2" style="width: 250px; height: 15px;" value="<?php if (isset($mail2)) { echo $mail2;} ?>">
				</td>
			</tr>
			<tr>
				<td>
					<label for="tel1">Numéro de téléphone 1 :</label>
				</td>
				<td>
					<input type="tel" name="tel1" placeholder="Ex : 06********" id="tel1" style="width: 250px; height: 15px;" value="<?php if (isset($tel1)) { echo $tel1;} ?>">
				</td>
			</tr>
			<tr>
				<td>
					<label for="tel2">Numéro de téléphone 2 :</label>
				</td>
				<td>
					<input type="tel" name="tel2" placeholder="Ex : 06********" id="tel2" style="width: 250px; height: 15px;" value="<?php if (isset($tel2)) { echo $tel2;} ?>">
				</td>
			</tr>
			<tr>
				<td>
					<label for="n_rue">Numéro de rue :</label>
				</td>
				<td>
					<input type="text" name="n_rue" placeholder="Ex : 45" id="n_rue" style="width: 250px; height: 15px;" value="<?php if (isset($n_rue)) { echo $n_rue;} ?>">
				</td>
			</tr>
			<tr>
				<td>
					<label for="rue">Libellé de la rue :</label>
				</td>
				<td>
					<input type="text" name="rue" placeholder="Ex : rue de la Paix" id="rue" style="width: 250px; height: 15px;" value="<?php if (isset($rue)) { echo $rue;} ?>">
				</td>
			</tr>
			<tr>
				<td>
					<label for="ville">Ville :</label>
				</td>
				<td>
					<input type="text" name="ville" placeholder="Ex : Paris" id="ville" style="width: 250px; height: 15px;" value="<?php if (isset($ville)) { echo $ville;} ?>">
				</td>
			</tr>
			<tr>
				<td>
					<label for="code_postal">Code Postal :</label>
				</td>
				<td>
					<input type="text" name="code_postal" placeholder="Ex : 75000" id="code_postal" style="width: 250px; height: 15px;" value="<?php if (isset($code_postal)) { echo $code_postal;} ?>">
				</td>
			</tr>
			<tr>
				<td>
					<label for="mdp">Mot de passe :</label>
				</td>
				<td>
					<input type="password" name="mdp" placeholder="Mot de passe" id="mdp" style="width: 250px; height: 15px;">
				</td>
			</tr>
			<tr>
				<td>
					<label for="mdp2">Confirmer votre mot de passe :</label>
				</td>
				<td>
					<input type="password" name="mdp2" placeholder="Confirmer le mot de passe" id="mdp2" style="width: 250px; height: 15px;">
				</td>
			</tr>
			<tr>
				<td>
						
				</td>
				<td>
					<br/>
					<input type="submit" value="Je m'inscris" name="forminscription" style="width: 150px;">
				</td>
			</tr>

			<tr>
				<td colspan="2">
					<br/><br/>
					<div id="msg_erreur">
					<?php if (isset($erreur)) { echo '<font color="red">'.$erreur.'</font>';}?>
					</div>
				</td>
			</tr>
		</table>	
	</form>
	<?php
	$forminscription = ob_get_clean();
	return $forminscription;
}

function gestionmembre()
{
	ob_start();
	?>
		<li> <?php echo $membres['id']; ?> : <?php echo $membres['identifiant']; ?> </li>
		<a href="index.php?cible=delete">Supprimer</a>
	<?php
	$gestionmembre = ob_get_clean();
	return $gestionmembre;
}




// FONCTION ASIDE -  CAPTEUR





function listecapteurlampe()
{
    ob_start();
    ?>

	<h1 class='titre_aside'>Lampe</h1>

	<div class="onoffswitch">
		<input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch" checked>
		<label class="onoffswitch-label" for="myonoffswitch">
			<span class="onoffswitch-inner"></span>
			<span class="onoffswitch-switch"></span>
		</label>
	</div><br />

	<p><button onclick="scenario()">Créer un scénario</button></p>

	<p id="demo"></p>

	<script>
	function scenario() 
	{
	    document.getElementById("demo").innerHTML = "<div class='cadre'><p>Heure d'allumage ?</p><p><select name='choixh'><option value='defaulth' selected='selected'>Heure</option><option value='choix0'>00</option><option value='choix2'>02</option><option value='choix3'>03</option><option value='choix4'>04</option><option value='choix5'>05</option><option value='choix6'>06</option><option value='choix7'>07</option><option value='choix8'>08</option><option value='choix9'>09</option><option value='choix10'>10</option><option value='choix11'>11</option><option value='choix12'>12</option><option value='choix13'>13</option><option value='choix14'>14</option><option value='choix15'>15</option><option value='choix16'>16</option><option value='choix17'>17</option><option value='choix18'>18</option><option value='choix19'>19</option><option value='choix20'>20</option><option value='choix21'>21</option><option value='choix22'>22</option><option value='choix23'>23</option></select>h<select name='choixm'><option value='defaultm' selected='selected'>Minute</option><option value='min0'>00</option><option value='min15'>15</option><option value='min30'>30</option><option value='min45'>45</option></select></p><p>Heure d'extinction ?</p><p><select name='choixh'><option value='defaulth' selected='selected'>Heure</option><option value='choix0'>00</option><option value='choix2'>02</option><option value='choix3'>03</option><option value='choix4'>04</option><option value='choix5'>05</option><option value='choix6'>06</option><option value='choix7'>07</option><option value='choix8'>08</option><option value='choix9'>09</option><option value='choix10'>10</option><option value='choix11'>11</option><option value='choix12'>12</option><option value='choix13'>13</option><option value='choix14'>14</option><option value='choix15'>15</option><option value='choix16'>16</option><option value='choix17'>17</option><option value='choix18'>18</option><option value='choix19'>19</option><option value='choix20'>20</option><option value='choix21'>21</option><option value='choix22'>22</option><option value='choix23'>23</option></select>h<select name='choixm'><option value='defaultm' selected='selected'>Minute</option><option value='min0'>00</option><option value='min15'>15</option><option value='min30'>30</option><option value='min45'>45</option></select></p></div>";
	}
	</script>

	<?php
    $listecapteurlampe = ob_get_clean();
    return $listecapteurlampe;
}
    
function listecapteurchauffage()
{
    ob_start();
	?>

	<h1>Chauffage</h1>

	<div class="onoffswitch">
		<input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch" checked>
		<label class="onoffswitch-label" for="myonoffswitch">
			<span class="onoffswitch-inner"></span>
			<span class="onoffswitch-switch"></span>
		</label>
	</div><br />

	<p class="temperature"><input name="sliderinput" id="sliderinput" type="range" value="20" min="15" max="25" oninput="slideroutput.value = sliderinput.value" />
	<output name="slideroutput" id="slideroutput">20</output>°C</p>

	<p><button onclick="scenario()">Créer un scénario</button></p>

	<p id="demo"></p>

	<script>
	function scenario() 
	{
	    document.getElementById("demo").innerHTML = "<div class='cadre'><p>Heure d'allumage ?</p><p><select name='choixh'><option value='defaulth' selected='selected'>Heure</option><option value='choix0'>00</option><option value='choix2'>02</option><option value='choix3'>03</option><option value='choix4'>04</option><option value='choix5'>05</option><option value='choix6'>06</option><option value='choix7'>07</option><option value='choix8'>08</option><option value='choix9'>09</option><option value='choix10'>10</option><option value='choix11'>11</option><option value='choix12'>12</option><option value='choix13'>13</option><option value='choix14'>14</option><option value='choix15'>15</option><option value='choix16'>16</option><option value='choix17'>17</option><option value='choix18'>18</option><option value='choix19'>19</option><option value='choix20'>20</option><option value='choix21'>21</option><option value='choix22'>22</option><option value='choix23'>23</option></select>h<select name='choixm'><option value='defaultm' selected='selected'>Minute</option><option value='min0'>00</option><option value='min15'>15</option><option value='min30'>30</option><option value='min45'>45</option></select></p><p>Heure d'extinction ?</p><p><select name='choixh'><option value='defaulth' selected='selected'>Heure</option><option value='choix0'>00</option><option value='choix2'>02</option><option value='choix3'>03</option><option value='choix4'>04</option><option value='choix5'>05</option><option value='choix6'>06</option><option value='choix7'>07</option><option value='choix8'>08</option><option value='choix9'>09</option><option value='choix10'>10</option><option value='choix11'>11</option><option value='choix12'>12</option><option value='choix13'>13</option><option value='choix14'>14</option><option value='choix15'>15</option><option value='choix16'>16</option><option value='choix17'>17</option><option value='choix18'>18</option><option value='choix19'>19</option><option value='choix20'>20</option><option value='choix21'>21</option><option value='choix22'>22</option><option value='choix23'>23</option></select>h<select name='choixm'><option value='defaultm' selected='selected'>Minute</option><option value='min0'>00</option><option value='min15'>15</option><option value='min30'>30</option><option value='min45'>45</option></select></p></div>";
	}
	</script>

	<?php
    $listecapteurchauffage = ob_get_clean();
    return $listecapteurchauffage;
}

function listecapteurvolet()
{
    ob_start();
    ?>

	<h1>Volet</h1>

	<div class="onoffswitch">
		<input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch" checked>
		<label class="onoffswitch-label" for="myonoffswitch">
			<span class="onoffswitch-inner"></span>
			<span class="onoffswitch-switch"></span>
		</label>
	</div><br />

	<p><button onclick="scenario()">Créer un scénario</button></p>

	<p id="demo"></p>

	<script>
	function scenario() 
	{
	    document.getElementById("demo").innerHTML = "<div class='cadre'><p>Ouvrir les volets à ?</p><p><select name='choixh'><option value='defaulth' selected='selected'>Heure</option><option value='choix0'>00</option><option value='choix2'>02</option><option value='choix3'>03</option><option value='choix4'>04</option><option value='choix5'>05</option><option value='choix6'>06</option><option value='choix7'>07</option><option value='choix8'>08</option><option value='choix9'>09</option><option value='choix10'>10</option><option value='choix11'>11</option><option value='choix12'>12</option><option value='choix13'>13</option><option value='choix14'>14</option><option value='choix15'>15</option><option value='choix16'>16</option><option value='choix17'>17</option><option value='choix18'>18</option><option value='choix19'>19</option><option value='choix20'>20</option><option value='choix21'>21</option><option value='choix22'>22</option><option value='choix23'>23</option></select>h<select name='choixm'><option value='defaultm' selected='selected'>Minute</option><option value='min0'>00</option><option value='min15'>15</option><option value='min30'>30</option><option value='min45'>45</option></select></p><p>Fermer les volets à ?</p><p><select name='choixh'><option value='defaulth' selected='selected'>Heure</option><option value='choix0'>00</option><option value='choix2'>02</option><option value='choix3'>03</option><option value='choix4'>04</option><option value='choix5'>05</option><option value='choix6'>06</option><option value='choix7'>07</option><option value='choix8'>08</option><option value='choix9'>09</option><option value='choix10'>10</option><option value='choix11'>11</option><option value='choix12'>12</option><option value='choix13'>13</option><option value='choix14'>14</option><option value='choix15'>15</option><option value='choix16'>16</option><option value='choix17'>17</option><option value='choix18'>18</option><option value='choix19'>19</option><option value='choix20'>20</option><option value='choix21'>21</option><option value='choix22'>22</option><option value='choix23'>23</option></select>h<select name='choixm'><option value='defaultm' selected='selected'>Minute</option><option value='min0'>00</option><option value='min15'>15</option><option value='min30'>30</option><option value='min45'>45</option></select></p></div>";
	}
	</script>

	<?php
    $listecapteurvolet = ob_get_clean();
    return $listecapteurvolet;
}
    
function listecapteuralarme()
{
    ob_start();
    ?>


	<h1>Alarme</h1>

	<div class="onoffswitch">
		<input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch" checked>
		<label class="onoffswitch-label" for="myonoffswitch">
			<span class="onoffswitch-inner"></span>
			<span class="onoffswitch-switch"></span>
		</label>
	</div>

	<?php
    $listecapteuralarme = ob_get_clean();
    return $listecapteuralarme;
}
    
function listecapteurcamera()
{
    ob_start();
    ?>


	<h1>Caméra</h1>

	<div class="onoffswitch">
		<input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch" checked>
		<label class="onoffswitch-label" for="myonoffswitch">
			<span class="onoffswitch-inner"></span>
			<span class="onoffswitch-switch"></span>
		</label>
	</div>

	<?php
    $listecapteurcamera = ob_get_clean();
    return $listecapteurcamera;
}
