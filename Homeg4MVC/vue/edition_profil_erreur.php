<?php
    $entete = entete("edition_profil");
    $aside = aside("sav");
    $contenu = edition_profil();
    $contenu .= $msg;
    $pied = pied();

    include 'gabarit.php';

?>