<?php
include("modele/para_pieces.php");

//if (isset($_GET['id']) AND $_GET['id']> 0)
if (isset($_SESSION['id']))
{
	//$id = intval($_GET['id']);
	$id = intval($_SESSION['id']);
	$reponse = selectid($bdd, $id);
	$user = $reponse->fetch();				
}
	
?>