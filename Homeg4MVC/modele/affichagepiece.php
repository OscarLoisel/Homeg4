<?php
	require("connexion_base.php");

	function affichagepiece($bdd, $id)
		{
			$reponse= $bdd->prepare("SELECT * FROM pieces WHERE id = ?");
		    $reponse->execute(array($id));
		    return $reponse;
		}
?>