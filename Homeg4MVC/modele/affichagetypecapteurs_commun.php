<?php
	include("connexion_base.php");

	function affichagetypecapteurs($bdd, $id_piece)
	{
		$reponse = $bdd -> prepare("SELECT DISTINCT type FROM capteurs WHERE id_piece = ?");
		$reponse->execute(array($id_piece));
		return $reponse;
	}

?>