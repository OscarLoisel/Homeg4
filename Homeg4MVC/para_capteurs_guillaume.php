<?php
	//require("modele/para_capteurs.php");
	require("modele/nb_piece.php");

	



	$entete = enteteHorsConnexion("Paramétrage des capteurs");
	$aside = asideHorsConnexion();
	/*$contenu = "<div id='formulaire_capteurs'> ";
	$contenu .= "<form method='POST' action='index.php?cible=home'>";*/
	/*//$id = intval($_SESSION['id']);
	//$reponse = selectpieces($bdd, $_SESSION['id']);
	try
	{
		$reponse = selectpiece($bdd, $_SESSION['id']);
    	while ($data = $reponse->fetch())
    	{
    		$id_piece = $data['id'];
    		$contenu .= formulaireParacapteurs($data['piece']); 
    	}
	}
	catch(PDOException $e)
	{
		echo $sql . "<br>" . $e->getMessage();
	}
	$contenu .= '<tr>';
	$contenu .=		'<td>';
					
	$contenu .=		'</td>';
	$contenu .=		'<td>';
	$contenu .=		'<br>';
	$contenu .=		'<input type="submit" value="valider" name="formparacapteurs">';
	$contenu .=	'</td>';
	$contenu .= '</tr>';
	$contenu .= '</table>';
	$contenu .=	 '</form>';
	$contenu .= '</div>';
	*/
	/*$contenu = "<div id='formulaire_capteurs'> ";
	$contenu .= "<form method='POST' action=''>";*/




	/* essai 1 */

	/*$reponse = selectpiece($bdd,$_SESSION['id']);
	$bool = TRUE;

	while($data = $reponse->fetch() and $bool == TRUE)
	{
		$id_piece = $data['id'];
    	$contenu  = formulaireParacapteurs($data['piece']); 
    	$contenu .= '<tr>';
    	echo($bool);
		$contenu .=		'<td>';
		//echo($bool)	;		
		$contenu .=		'</td>';
		$contenu .=		'<td>';
		$contenu .=		'<br>';
		$contenu .=		'<input type="submit" value="valider" name="formparacapteurs">';
		$contenu .=	'</td>';
		$contenu .= '</tr>';
		$contenu .= '</table>';
		$contenu .=	 '</form>';
		$contenu .= '</div>';
		
		if (isset($_POST['formparacapteurs']))
		{
			
		}
		else
		{
			$bool = FALSE;
			echo($bool);
		}
	}
	

	/*essai 2 */

	/*$reponse = selectpiece($bdd,$_SESSION['id']);
	//$test = nb_piece($bdd, $_SESSION['id']);
	//$donnees = $test ->fetch();
	$data = $reponse->fetchAll();

	$nombre = sizeof($data);
	//echo($nombre);
	
	/*echo($data[0][1]);
	echo($data[1][1]);
	echo($data[2][1]);
	echo($data[3][1]);
	echo($data[4][1]);
	$test = 5;
	echo($data[$test][1]);*/
	//echo($_SESSION['id']);
	/*$zero = 0;
	echo($zero);
	$contenu = formulaireParacapteurs($data[0][1]);
	$contenu .= '<tr>';
	$contenu .=		'<td>';
					
	$contenu .=		'</td>';
	$contenu .=		'<td>';
	$contenu .=		'<br>';
	$contenu .=		'<input type="submit" value="valider" name="formparacapteurs'.$zero.'">';
	$contenu .=	'</td>';
	$contenu .= '</tr>';
	$contenu .= '</table>';
	$contenu .=	 '</form>';
	$contenu .= '</div>';
	$bouton = isset($_POST['formparacapteurs'.$zero]);
	$pied = pied();
	include('gabarit.php');

	for ($i=1; $i < $nombre-3 ; $i++)
	{ 
		if($bouton)
		{	
			
			echo($i);
			echo($data[$i][1]);
			$contenu = formulaireParacapteurs($data[$i][1]);
			$contenu .= '<tr>';
			$contenu .=		'<td>';
							
			$contenu .=		'</td>';
			$contenu .=		'<td>';
			$contenu .=		'<br>';
			$contenu .=		'<input type="submit" value="valider" name="formparacapteurs'.$i.'">';
			$contenu .=	'</td>';
			$contenu .= '</tr>';
			$contenu .= '</table>';
			$contenu .=	 '</form>';
			$contenu .= '</div>';
			$bouton = isset($_POST['formparacapteurs'.$i]);
			$pied = pied();
			include('gabarit.php');


		}
		sleep(1);
		echo($i);
	}
*/





	/*Essai 3 */

	/*$reponse = selectpiece($bdd,$_SESSION['id']);
	$data = $reponse->fetchAll();						DANS INDEX MAINTENANT !
	$nombre = sizeof($data);
	$id_max = $nombre + $data[0][0];
*/
	$contenu = '<div id="parametrage">';
	
	$contenu .=	'<form method="POST" action="index.php?cible=para_capteurs&amp;id_piece='.$id_piece.'&amp;indice='.$indice.'">';

	$contenu .= formulaireParacapteurs($data[$indice][1]);
	$contenu .= '<tr>';
	$contenu .=		'<td>';
					
	$contenu .=		'</td>';
	$contenu .=		'<td>';
	$contenu .=		'<br>';
	$contenu .=		'<input type="submit" value="valider" name="formparacapteurs">';
	$contenu .=	'</td>';
	$contenu .= '</tr>';
	$contenu .= '</table>';
	$contenu .=	 '</form>';
	$contenu .= '</div>';
	echo($indice);
	echo($nombre);
		/*--> id piece*/





	$pied = pied();
	include('gabarit.php');




		
?> 