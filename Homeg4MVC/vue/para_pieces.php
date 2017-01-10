<?php
include("controleur/para_pieces.php");

    $entete = enteteHorsConnexion("Paramétrage des piéces");
    $aside = asideHorsConnexion();
    $contenu = formulaireParapieces();
    $pied = pied();

    include 'gabarit.php';
?>
