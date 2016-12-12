<!DOCTYPE html>
<html>
<head>
	<title>Homeg4</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div class="page">

<header>
	<div class="logo">
		<img src="images/logo(3).jpg" alt= "logo">
	</div>

	<nav id="menu_parametrage">
		<ul>
			<li>Paramétrage</li>
		</ul>
	</nav>
</header>

<section>
	<form method="POST" action="">
		<table id="tableau_parametrage_pieces">

			<tr>
				<td colspan="2">
					<h1>Choix des pièces</h1>
				</td>
			</tr>



			<tr>
				<td>
					<label for="nbr_salon">Salon :</label>
				</td>
				<td>
					<input type="number" name="nbr_salon" id="nbr_salon" style="width: 30px;">
				</td>
			</tr>


			<tr>
				<td>
					<label for="nbr_cuisine">Cuisine :</label>
				</td>
				<td>
					<input type="number" name="nbr_cuisine" id="nbr_cuisine" style="width: 30px;">
				</td>
			</tr>


			<tr>
				<td>
					<label for="nbr_sdb">Salle de bain :</label>
				</td>
				<td>
					<input type="number" name="nbr_sdb" id="nbr_sdb" style="width: 30px;">
				</td>
			</tr>


			<tr>
				<td>
					<label for="nbr_chambre">Chambre :</label>
				</td>
				<td>
					<input type="number" name="nbr_chambre" id="nbr_chambre" style="width: 30px;">
				</td>
			</tr>

			<tr>
				<td>
					<label for="nbr_jardin">Jardin :</label>
				</td>
				<td>
					<input type="checkbox" name="nbr_jardin" id="nbr_jardin",>
				</td>
			</tr>

		</table>
		
	</form>
</section>

</div>

</body>
</html>