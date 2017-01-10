<?php
    
    $entete = entete("home");
    $aside = aside("sav");
    $contenu = listecapteuralarme();
    $pied = pied();
    
    include('gabarit.php');
?>
