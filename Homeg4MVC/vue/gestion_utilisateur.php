<?php
	require("controleur/gestion_utilisateur.php");

	$entete = enteteAdmin("utilisateur");
	$aside = asideHorsConnexion();
	$contenu = '<div id="titre">';
	$contenu .= '<h2>Gestion des membres</h2>';
	$contenu .= '</div>';
	$reponse = $bdd->query('SELECT * FROM utilisateur ORDER BY id DESC');
	$contenu .='<ul>';
	while ($utilisateur = $reponse ->fetch()) 
	{
		$id_mbr = $utilisateur['id'];
		$contenu .= '<li>';
		$contenu .= $utilisateur['id'];  
		$contenu .= ' : ';
		$contenu .= $utilisateur['identifiant'];
		if ($utilisateur['confirme'] == 0) 
		{
			$contenu .= '<a href="index.php?cible=confirme&amp;confirme='.$id_mbr.'">Confirmer</a>';
		}
		$contenu .= ' - ';
		$contenu .= '<a href="index.php?cible=delete&amp;delete='.$id_mbr.'"> Supprimer</a>';
		$contenu .= '</li>';

	}
	$contenu .='</ul>';
	$pied = pied();

	include'gabarit.php';
?>