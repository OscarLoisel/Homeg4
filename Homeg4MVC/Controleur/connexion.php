<?php
require("modele/connexion_base.php");

if (isset($_POST['formconnexion']))
{
	$identifiantconnect = htmlspecialchars($_POST['identifiantconnect']);
	$mdpconnect = sha1($_POST['mdpconnect']);

	if (!empty($identifiantconnect) AND !empty($mdpconnect))
	{
		$requser = $bdd->prepare('SELECT * FROM utilisateur WHERE identifiant = ? AND mdp= ?'); // ATTENTION AU = après $requser et non pas ->.
		$requser -> execute(array($identifiantconnect, $mdpconnect));
		$userexist = $requser-> rowCount();
		if ($userexist == 1)
		{
			$userinfo = $requser->fetch();
			$_SESSION['id'] = $userinfo['id'];
			$_SESSION['identifiant'] = $userinfo['identifiant'];
			$_SESSION['mail'] = $_SESSION['mail'];
			header("Location: ../controleur/para_pieces.php?id=".$_SESSION['id']);
			/*$connexion++;
			$updateconnexion = $bdd -> prepare('UPDATE utilisateur SET connexion = $connexion WHERE = $_SESSION[\'identifiant\']');
			$updateconnexion-> execute(array($connexion));

			if ($connexion == 1) 
			{
				header("Location: ../vue/parametrage.php?id=".$_SESSION['id']);
			}
			else
			{
				header("Location: ../vue/home.php?id=".$_SESSION['id']);
			}*/
			
		}
		else
		{
			$erreur="Mauvais Pseudo ou Mot de passe ! Vous pouvez vous inscrire <a href='inscription.php'>ici</a> !";
		}
	}
	else
	{
		$erreur = "Veuillez remplir tous les champs !";
	}
}

?>

