<?php
    include('Controleur/edition_profil.php');
    $entete = entete("edition_profil");
    $id = $_GET['id_piece'];
    echo $id;
    $aside = aside("sav");
    $contenu = edition_profil();
    $pied = pied();

    include 'gabarit.php';

?>