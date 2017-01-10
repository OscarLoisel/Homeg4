<?php


    $entete = entete("home");
    $aside = aside("sav");
    $contenu = "<div id='grille_pieces'>";
    try 
    {
        $reponse = selectpiece($bdd, $_SESSION['id']);
        //while ($data = $reponse->fetch(); TRANSFORMER 
        $data = $reponse->fetchAll();
        $nbrligne = sizeof($data);
        $id = $data[0][0];
        for ($i= 0; $i < $nbrligne ; $i++) 
        {   
                $contenu .= '<a href="index.php?cible=page_capteur_commun&amp;id_piece='.$id.'" >';
                $contenu .= '<div id="piece_grille">';
?>
                    <strong><?php $contenu .= $data[$i][1]; ?></strong>
                <?php
                $contenu .= '</div>';
                $contenu .= '</a>';
                $id++;     
        }
        $reponse->closeCursor();
        $contenu .= '</div>';
    }
    catch(PDOException $e)
    {
        echo $sql . "<br>" . $e->getMessage();
    }
    $conn = "null";
    
    $pied = pied();

    include 'gabarit.php';
?>