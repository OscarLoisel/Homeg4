<?php
	require("connexion_base.php");

	function selectid($bdd, $id)
	{
		$reponse = $bdd->prepare('SELECT * FROM utilisateur WHERE id = ?');
		$reponse->execute(array($id));
		return $reponse;
	}

?>