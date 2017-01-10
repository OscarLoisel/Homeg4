<?php
	require("connexion_base.php");


	function insertcapteur($bdd, $id_piece, $capteur, $type)
	{
		$reponse = $bdd -> prepare('INSERT INTO capteurs(id_piece, capteur, type) VALUES (?, ?, ?)');
		$reponse -> execute(array($id_piece, $capteur, $type));
		return $reponse;
	}

?>