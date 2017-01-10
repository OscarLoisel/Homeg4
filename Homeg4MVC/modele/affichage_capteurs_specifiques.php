<?php
require("connexion_base.php");

function affichagecapteursspecifiques ($bdd, $id_piece, $type)
{
	$reponse = $bdd -> prepare("SELECT capteur FROM capteurs WHERE id_piece = ? AND type = ?");
	$reponse -> execute(array($id_piece, $type));
	return $reponse;
}

?>