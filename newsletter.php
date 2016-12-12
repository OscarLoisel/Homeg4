<!DOCTYPE html>
<html>
<head>
	<title>Homeg4r</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div class="page">

<?php  
	include("menu.php");
?>


<section id="home">
	<aside>

		<div id="tdb">
				<table id="tableau_tdb">

					<tr>
						<td colspan="2">Tableau de bord</td>
					</tr>

					<tr>
						<td class="critere">Température</td>
						<td class="critere">Humidité</td>
					</tr>

					<tr>
						<td class="critere">Alarme</td>
						<td class="critere">Caméras</td>
					</tr>

				</table>
		</div>

		<div id="menu_capteurs">
			<div id="liste_capteurs">
				<ul>
					<a href="lampes.php"><li>Lampes</li></a>
					<a href="#"><li>Chauffage</li></a>
					<a href="#"><li>Volets</li></a>
					<a href="#"><li>Alarme</li></a>
					<a href="#"><li>Caméras</li></a>
				</ul>
			</div> 
			
		</div>

	</aside>
	
	
	
	<div class="news">
		<h1> NewsLetter 01/12/16 </h1>
		<p> Bienvenue sur la première monture du nouveau site d'HOMEG4! </p>
		<p> Ce site destiné à aider nos utilisateur à obtenir des informations sur leurs maisons connecté sera bientôt finalisé et disponible pour le plus grand monde.</p>
		<p> Si vous avez des questions, pour l'instant c'est bien dommage. :/ </p>
	</div>


</section>
	
</div>

</body>
</html>
