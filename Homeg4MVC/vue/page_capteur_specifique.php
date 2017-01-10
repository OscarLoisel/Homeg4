<?php
	//Les variables $id_piece et $type existe.
	include("modele/affichage_capteurs_specifiques.php");

	$entete = entete("home");
	$aside = aside("sav");
	$contenu = '<div id= "grille_capteur_specifique">';
	$reponse = affichagecapteursspecifiques($bdd, $id_piece, $type);
	while($data = $reponse -> fetch())
	{
		$contenu .='<form method="POST" action="">';
		$contenu .='<label>';
		$contenu .=$data['capteur'];
		$contenu .='</label>';
		$contenu .='<input type="checkbox" name="">';
		$contenu .='</form>';
	}
	$contenu .='</div>';
	$pied = pied();


include("gabarit.php");
?>