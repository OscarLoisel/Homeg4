<?php
    $entete = entete("reglage");
    $aside = aside("sav");
    $contenu = "<div id='grille_pieces'  class='test'>";
	try 
    {
    	$stmt= $bdd->prepare("SELECT * FROM pieces WHERE id_utilisateur = 15");
    	$stmt->execute();
    	while ($data = $stmt->fetch())
    	{
    	
    	    $contenu .= '<a href="#"  class="test_2">';
			$contenu .= '<div>';
?>
				<strong><?php $contenu .= $data['piece']; ?></strong>
		    <?php
            $contenu .= '</div>';
            $contenu .= '</a>';
            ?>
<?php		
    	}
    	$stmt->closeCursor();
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
