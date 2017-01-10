<?php
	require("connexion_base.php");

	function reqidentifiant($bdd, $identifiant)
		{
			$reponse= $bdd->prepare("SELECT * FROM utilisateur WHERE identifiant= ?");
		    $reponse->execute(array($identifiant));
		    return $reponse;
		}

	function insertutilisateur($bdd, $nom, $prenom, $mail, $n_rue, $rue, $ville, $code_postal, $identifiant, $mdp, $tel1, $tel2)
	{
		$reponse = $bdd -> prepare('INSERT INTO utilisateur(nom, prenom, mail, n_rue, rue, ville, code_postal, identifiant, mdp, tel1, tel2) VALUES ( ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)');
		$reponse -> execute(array($nom, $prenom, $mail, $n_rue, $rue, $ville, $code_postal, $identifiant, $mdp, $tel1, $tel2));
	}
?>

