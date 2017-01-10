<?php
include ("modele/para_capteurs.php");

if (isset($_SESSION['id']))
{
	$id = intval($_SESSION['id']);
	$reponse = selectpiece($bdd, $id);
	$room = $reponse -> fetch();
	//$_SESSION['id_piece'] = $room['id'];
	
}
?>