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
	
	
	
	<div id="sav">
		<h1> Nous contactez: </h1>
		<p> En cas de problème notre service après vente est à votre disposition. </p>
		<p> Nous vous invitions cependant au préalable à consulter notre FAQ sur le forum.</p>
		<p> Sinon, vous pouvez nous contactez 08666zenumberovzeBeast </p>
	</div>


</section>
	
</div>

</body>
</html>
