<?php
include("modele/utilisateur.php");

if(isset($_GET['cible']) && $_GET['cible']=="verif" AND isset($_POST['formconnexion']))
{
	$identifiantconnect = htmlspecialchars($_POST['identifiantconnect']);
	$mdpconnect = sha1($_POST['mdpconnect']);

	if (!empty($identifiantconnect) AND !empty($mdpconnect))
	{
		$reponse = connect($bdd, $identifiantconnect, $mdpconnect);

		if ($reponse->rowcount()==0)
		{
			$erreur= "Utilisateur inconnu";
			include("vue/connexion_erreur.php");
		}
		else
		{
			$userinfo = $reponse->fetch();

			$reponse = readconnexion($bdd, $identifiantconnect);
			$data = $reponse -> fetch();

			if ($mdpconnect != $userinfo['mdp']) 
			{
				$erreur = "Mot de passe incorrect";
				include("vue/connexion_erreur.php");
			}
			
			elseif ($data['connexion'] == 0) 
			{
				$_SESSION['id'] = $userinfo['id'];
				$_SESSION['identifiant'] = $userinfo['identifiant'];
				$_SESSION['mail'] = $userinfo['mail'];
				include("vue/para_pieces.php");
			}
			elseif ($userinfo['id'] == 24) 
			{
				$_SESSION['id'] = $userinfo['id'];
				$_SESSION['identifiant'] = $userinfo['identifiant'];
				$_SESSION['mail'] = $userinfo['mail'];
				include("vue/home_admin.php");
			}
			else
			{
				$_SESSION['id'] = $userinfo['id'];
				$_SESSION['identifiant'] = $userinfo['identifiant'];
				$_SESSION['mail'] = $userinfo['mail'];
				include("vue/home.php");
			}
		}
	}
	else
	{
		$erreur = "Veuillez remplir tous les champs !";
		include("vue/connexion_erreur.php");
	}
}
else
{
	include("vue/page_connexion.php");
}


?>