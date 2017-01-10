<?php
	require("connexion_base.php");

	function editidentifiant($bdd, $identifiant, $id)
	{
		$reponse = $bdd->prepare("UPDATE utilisateur SET identifiant = ? WHERE id= ?");
		$reponse->execute(array($identifiant, $id));
		return $reponse;
	}

	function editmail($bdd, $mail, $id)
	{
		$reponse = $bdd->prepare("UPDATE utilisateur SET mail = ? WHERE id = ?");
		$reponse->execute(array($mail, $id));
		return $reponse;
	}

	function editmdp($bdd, $mdp, $id)
	{
		$reponse= $bdd->prepare("UPDATE utilisateur SET mdp = sha1(?) WHERE id = ?");
		$reponse -> execute(array($mdp, $id));
		return $reponse;
	}

?>

