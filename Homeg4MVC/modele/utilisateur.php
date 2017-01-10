<?php
	require("connexion_base.php");

	function connect($bdd, $identifiant, $mdp)
	{
		$reponse = $bdd->prepare('SELECT * FROM utilisateur WHERE identifiant = ? AND mdp= ?'); 
		$reponse -> execute(array($identifiant, $mdp));
		return $reponse;
	}

	function readconnexion ($bdd, $identifiant)
	{
		$reponse = $bdd -> prepare("SELECT connexion FROM utilisateur WHERE identifiant = ? ");
		$reponse -> execute(array($identifiant));
		return $reponse;
	}
?>