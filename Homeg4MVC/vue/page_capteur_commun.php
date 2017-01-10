<?php
require("modele/affichagetypecapteurs_commun.php");
require("modele/affichagepiece.php");

	$entete = entete("home");
	$aside = aside("sav");

	$reponse = affichagepiece($bdd, $id_piece);
	$donnee = $reponse -> fetch();

	$contenu ='<div id = nom_piece>';
	$contenu .= '<h1>';
	$contenu .= $donnee['piece'];
	$contenu .= '</h1>';
	$contenu .='</div>';
	$contenu .= "<div id='grille_capteurs'>";
	//echo $id_piece;
	//$id_piece == 54 ;
		
	$reponse = affichagetypecapteurs($bdd, $id_piece);
		// Affiche les capteurs de la table capteur en fonction de l'id_piece récupéré via l'URL.
    	while ($data = $reponse->fetch())
    	{	
    		if($data['type'] == "volet")
    		{
    			$type = $data['type'];
    			$contenu .= '<a href="index.php?cible=page_capteur_specifique&amp;id_piece='.$id_piece.'&amp;type='.$type.'">';
    			$contenu .='<img src="images/volet.png" alt= "img_capteur">';
    			$contenu .= '</a>';
    		}
    		if($data['type'] == "light")
    		{
    			$type = $data['type'];
    			$contenu .= '<a href="index.php?cible=page_capteur_specifique&amp;id_piece='.$id_piece.'&amp;type='.$type.'">';
    			$contenu .='<img src="images/light.png" alt= "img_capteur">';
    			$contenu .= '</a>';
    		}
    		if($data['type'] == "chauffage")
    		{
    			$type = $data['type'];
    			$contenu .= '<a href="index.php?cible=page_capteur_specifique&amp;id_piece='.$id_piece.'&amp;type='.$type.'">';
    			$contenu .='<img src="images/temperature.png" alt= "img_capteur">';
    			$contenu .= '</a>';
    		}
    		if($data['type'] == "baro")
    		{
    			$type = $data['type'];
    			$contenu .= '<a href="index.php?cible=page_capteur_specifique&amp;id_piece='.$id_piece.'&amp;type='.$type.'">';
    			$contenu .='<img src="images/baro.png" alt= "img_capteur">';
    			$contenu .= '</a>';
    		}
    		if($data['type'] == "presence")
    		{
    			$type = $data['type'];
    			$contenu .= '<a href="index.php?cible=page_capteur_specifique&amp;id_piece='.$id_piece.'&amp;type='.$type.'">';
    			$contenu .='<img src="images/presence.png" alt= "img_capteur">';
    			$contenu .= '</a>';
    		}
    		if($data['type'] == "cam")
    		{
    			$type = $data['type'];
    			$contenu .= '<a href="index.php?cible=page_capteur_specifique&amp;id_piece='.$id_piece.'&amp;type='.$type.'">';
    			$contenu .='<img src="images/cam.png" alt= "img_capteur">';
    			$contenu .= '</a>';
    		}
    		
    	}
	
	$contenu .="</div>";
	$pied = pied();

include("gabarit.php");

?>



