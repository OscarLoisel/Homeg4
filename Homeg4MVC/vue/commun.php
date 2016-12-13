<?php

function entete()
{
	ob_start();

if (isset($_GET['id']) AND $_GET['id']> 0)
{
	$getid = intval($_GET['id']);
	$requser = $bdd ->prepare('SELECT * FROM utilisateur WHERE id = ?');
	$requser -> execute(array($getid));
	$userinfo = $requser->fetch();

?>
		<header>
			<div class="logo">
				<img src="../images/logo(1).jpg" alt= "logo">
			</div>
			<nav>
				<ul id ="menu-accordeon">

					<?php

					if($etape=="home")
					{
	                    echo('<li><a href="index.php?cible=home">Home</a></li>');
	                }

	                ?>
				
					<li id="reglage"><a href="#">Réglage</a>
						<ul>

						<?php

							if($etape=="securite")
							{
			                    echo('<li id="reglage_1"><a href="index.php?cible=securite">Sécurité</a></li>');
			                }
			                if($etape=="systeme")
							{
			                    echo('<li id="reglage_2"><a href="index.php?cible=systeme">Système</a></li>');
			                }
			                if($etape=="cgu")
							{
			                    echo('<li id="reglage_3"><a href="index.php?cible=cgu">Conditions générales dutilisation</a></li>'); // voir pour l'appostophe
			                }
			                if($etape=="edition_profil" AND isset($_SESSION['id']) AND $userinfo['id'] == $_SESSION['id'])
							{
			                    echo('<li id="reglage_4"><a href="index.php?cible=edition_profil">Editer mon profil</a></li>');
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
			                if($etape=="forum")
							{
			                    echo('<li id="contact_2"><a href="index.php?cible=forum">Forum</a></li>'); 
			                }
			                if($etape=="sav")
							{
			                    echo('<li id="contact_3"><a href="index.php?cible=sav">S.A.V</a></li>'); 
			                }

		                ?>

						</ul>
					</li>

					<?php

					if($etape=="deconnexion" AND isset($_SESSION['id']) AND $userinfo['id'] == $_SESSION['id'])
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
}


function aside()
{
	ob_start();
	?>
		<aside>

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
                    echo('<a href="index.php?cible=lampes"><li>Lampes</li></a>'); 
                }
                if($etape=="chauffage")
				{
                    echo('<a href="index.php?cible=chauffage"><li>Chauffage</li></a>'); 
                }
                if($etape=="volets")
				{
                    echo('<a href="index.php?cible=volets"><li>Volets</li></a>'); 
                }
                if($etape=="alarme")
				{
                    echo('<a href="index.php?cible=alarme"><li>Alarme</li></a>'); 
                }
                if($etape=="caméras")
				{
                    echo('<a href="index.php?cible=caméras"><li>Caméras</li></a>'); 
                }


				?>
					
				</ul>
			</div> 
			
		</div>

	</aside>
	<?php
	$aside = ob_get_clean();
	return $aside;
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
            
            <h1>Pour plus d'informations</h1>
            <section>
            <div id="contact">
                <h2>Contact</h2>
                <ul>
                    <li><a href=mailto:"#" title="Courrier électronique">Ecrivez-nous</a></li>
                    <li><a href="#" title="Téléphone">Appelez-nous</a></li>
                    <li><a href="#" title="Venir nous voir">Venir nous voir</a></li>
                </ul>
            </div>
            
            <div id="mentions">
                <h2>Mentions légales</h2>
                <ul>
                    <li><a href="#" title"Lire les mentions légales">Lire</a></li>
                    <li><a href="#" title"Télécharger les mentions légales">Télécharger en pdf</a></li>
                </ul>
            </div>
            
            <div id="reseaux">
                <h2>Nous suivre sur :</h2>
                <a href="#"><img src="images/facebook.png" alt="Facebook"></a>
                <a href="#"><img src="images/twitter.png" alt="Twitter"></a>
            </div>
            <section>
            
        </footer>

	<?php
	$pied = ob_get_clean();
	return $pied;
}
?>