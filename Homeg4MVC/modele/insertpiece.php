<?php
	require("connexion_base.php");

	function insertpiece($bdd, $piece, $id)
	{
		$reponse = $bdd -> prepare('INSERT INTO pieces(piece,id_utilisateur) VALUES (?, ?)');
		$reponse -> execute(array($piece, $id));
	}
	
?>