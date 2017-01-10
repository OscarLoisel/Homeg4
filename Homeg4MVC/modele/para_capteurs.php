<?php
	require("connexion_base.php");

	function selectpiece($bdd, $id)
		{
			$reponse= $bdd->prepare("SELECT * FROM pieces WHERE id_utilisateur = ?");
		    $reponse->execute(array($id));
		    return $reponse;
		}
?>