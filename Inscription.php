<!DOCTYPE html>
<html>
<head>
	<title>Homeg4</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<?php

$bdd= new PDO('mysql:host=localhost;dbname=Homeg4;', 'root', '');

if (isset($_POST['forminscription'])) 
{
	$nom = htmlspecialchars($_POST['nom']);
	$prenom = htmlspecialchars($_POST['prenom']);
	$identifiant = htmlspecialchars($_POST['identifiant']);
	$mail = htmlspecialchars($_POST['mail']);
	$mail2 = htmlspecialchars($_POST['mail2']);
	$tel1 = htmlspecialchars($_POST['tel1']);
	$tel2 = htmlspecialchars($_POST['tel2']);
	$n_rue = htmlspecialchars($_POST['n_rue']);
	$rue = htmlspecialchars($_POST['rue']);
	$ville = htmlspecialchars($_POST['ville']);
	$code_postal = htmlspecialchars($_POST['code_postal']);
	$mdp = sha1($_POST['mdp']);
	$mdp2 = sha1($_POST['mdp2']); // 13 variables
	
	if (!empty($_POST['nom']) AND !empty($_POST['prenom']) AND !empty($_POST['identifiant']) AND !empty($_POST['mail']) AND !empty($_POST['mail2']) AND !empty($_POST['tel1']) AND !empty($_POST['n_rue']) AND !empty($_POST['rue']) AND !empty($_POST['ville']) AND !empty($_POST['code_postal']) AND !empty($_POST['mdp']) AND !empty($_POST['mdp2'])) 
	{
		$nomlength = strlen($nom);
		if ($nomlength <= 255)
		{
			$prenomlength = strlen($prenom);
			if ($prenomlength <= 255)
			{
				$reqidentifiant = $bdd->prepare('SELECT * FROM utilisateur WHERE identifiant= ?');
				$reqidentifiant->execute(array($identifiant));
				$identifiantexist = $reqidentifiant-> rowCount(); 
				if ($identifiantexist == 0)
				{
					$identifiantlength = strlen($identifiant);
					if ($identifiantlength <= 255)
					{
						if ($mail == $mail2) 
						{
							$tel1length = strlen($tel1);
							if($tel1length <= 12)
							{
								//if (is_int($tel1)) 
								{
									$tel2length = strlen($tel2);
									if($tel2length <= 12)
									{
										//if (is_int($tel2)) 
										{
											if ($n_rue < 10000000000) 
											{
												//if (is_int($n_rue))	
												{
													$ruelength = strlen($rue);
													if ($ruelength <= 255)
													{
														$villelength = strlen($ville);
														if ($villelength <= 255) 
														{
															if ($code_postal < 10000000000) 
															{
																if ($mdp == $mdp2) 
																{
																	$insertmbr = $bdd -> prepare('INSERT INTO utilisateur(nom, prenom, mail, n_rue, rue, ville, code_postal, identifiant, mdp, tel1, tel2) VALUES ( ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)');
																	$insertmbr-> execute(array($nom, $prenom, $mail, $n_rue, $rue, $ville, $code_postal, $identifiant, $mdp, $tel1, $tel2));
																	$erreur = "Votre compte a bien été créer !"; 
																}
																else
																{
																	$erreur ="Les mots de passes ne correspondent pas !";
																}

															}
															else
															{
																$erreur ="Le code postal doit contenir au maximum 10 chiffres !";
															}

														}
														else
														{
															$erreur = "Le nom de la ville ne doit pas dépasser 255 caractères !";
														}

													}
													else
													{
														$erreur = "Le nom de la rue ne doit pas dépasser 255 caractères !";
													}

												}
												/*else
												{
													$erreur= "Le numéro de rue ne doit contenir que des chiffres !";
												}*/
											}
											else
											{
												$erreur = "Le numéro de rue doit contenir au maximum 10 chiffres !";
											}
										}
										/*else
										{
											$erreur= "Le numéro de téléphone 2 ne doit contenir que des chiffres !";
										}*/

									}
									else
									{
										$erreur = "Le numéro de téléphone 2 doit contenir au maximum 12 chiffres !";
									}

								}
								/*else
								{
									$erreur= "Le numéro de téléphone 1 ne doit contenir que des chiffres !";
								}*/
								
							}
							else
							{
								$erreur = "Le numéro de téléphone 1 doit contenir au maximum 12 chiffres !";
							}

						}
						else
						{
							$erreur ="Votre adresse email ne correspond pas !";
						}
						
					}
					else
					{
						$erreur = "L'identifiant ne doit pas dépasser 255 caractères !";
					}

				}
				else
				{
					$erreur = "Cette identifiant existe déjà, veuillez en saisir un nouveau !";
				}
			}
			else
			{
				$erreur = "Le prénom ne doit pas dépasser 255 caractères !";
			}
			
		}
		else
		{
			$erreur = "Le nom ne doit pas dépasser 255 caractères !";
		}

	}
	else
	{
		$erreur = "Veuillez remplir tous les champs !";
	}

}


?>

<div class="page">

<header>
	<div class="logo">
		<img src="images/logo(3).jpg" alt= "logo">
	</div>

	<nav id="menu_inscription">
		<ul>
			<li>Formulaire d'inscription</li>
		</ul>
	</nav>
</header>


<section id="inscription">
	<form method="POST" action="">
		<table id="tableau_inscription">
			<tr>
				<td>
					<label for="nom">Nom :</label>
				</td>
				<td>
					<input type="text" name="nom" placeholder="Nom" id="nom" style="width: 250px; height: 15px;" value="<?php if (isset($nom)) { echo $nom;} ?>">
				</td>
			</tr>



			<tr>
				<td>
					<label for="prenom">Prénom :</label>
				</td>
				<td>
					<input type="text" name="prenom" placeholder="Prénom" id="prenom" style="width: 250px; height: 15px;" value="<?php if (isset($prenom)) { echo $prenom;} ?>">
				</td>
			</tr>



			<tr>
				<td>
					<label for="identifiant">Identifiant :</label>
				</td>
				<td>
					<input type="text" name="identifiant" placeholder="Identifiant" id="identifiant" style="width: 250px; height: 15px;" value="<?php if (isset($identifiant)) { echo $identifiant;} ?>">
				</td>
			</tr>



			<tr>
				<td>
					<label for="mail">Mail :</label>
				</td>
				<td>
					<input type="email" name="mail" placeholder="Mail" id="mail" style="width: 250px; height: 15px;" value="<?php if (isset($mail)) { echo $mail;} ?>">
				</td>
			</tr>



			<tr>
				<td>
					<label for="mail2">Confirmer votre mail :</label>
				</td>
				<td>
					<input type="email" name="mail2" placeholder="Confirmer votre mail" id="mail2" style="width: 250px; height: 15px;" value="<?php if (isset($mail2)) { echo $mail2;} ?>">
				</td>
			</tr>



			<tr>
				<td>
					<label for="tel1">Numéro de téléphone 1 :</label>
				</td>
				<td>
					<input type="tel" name="tel1" placeholder="Ex : 06********" id="tel1" style="width: 250px; height: 15px;" value="<?php if (isset($tel1)) { echo $tel1;} ?>">
				</td>
			</tr>



			<tr>
				<td>
					<label for="tel2">Numéro de téléphone 2 :</label>
				</td>
				<td>
					<input type="tel" name="tel2" placeholder="Ex : 06********" id="tel2" style="width: 250px; height: 15px;" value="<?php if (isset($tel2)) { echo $tel2;} ?>">
				</td>
			</tr>



			<tr>
				<td>
					<label for="n_rue">Numéro de rue :</label>
				</td>
				<td>
					<input type="text" name="n_rue" placeholder="Ex : 45" id="n_rue" style="width: 250px; height: 15px;" value="<?php if (isset($n_rue)) { echo $n_rue;} ?>">
				</td>
			</tr>



			<tr>
				<td>
					<label for="rue">Libellé de la rue :</label>
				</td>
				<td>
					<input type="text" name="rue" placeholder="Ex : rue de la Paix" id="rue" style="width: 250px; height: 15px;" value="<?php if (isset($rue)) { echo $rue;} ?>">
				</td>
			</tr>



			<tr>
				<td>
					<label for="ville">Ville :</label>
				</td>
				<td>
					<input type="text" name="ville" placeholder="Ex : Paris" id="ville" style="width: 250px; height: 15px;" value="<?php if (isset($ville)) { echo $ville;} ?>">
				</td>
			</tr>



			<tr>
				<td>
					<label for="code_postal">Code Postal :</label>
				</td>
				<td>
					<input type="text" name="code_postal" placeholder="Ex : 75000" id="code_postal" style="width: 250px; height: 15px;" value="<?php if (isset($code_postal)) { echo $code_postal;} ?>">
				</td>
			</tr>

			

			<tr>
				<td>
					<label for="mdp">Mot de passe :</label>
				</td>
				<td>
					<input type="password" name="mdp" placeholder="Mot de passe" id="mdp" style="width: 250px; height: 15px;">
				</td>
			</tr>



			<tr>
				<td>
					<label for="mdp2">Confirmer votre mot de passe :</label>
				</td>
				<td>
					<input type="password" name="mdp2" placeholder="Confirmer le mot de passe" id="mdp2" style="width: 250px; height: 15px;">
				</td>
			</tr>



			<tr>
				<td>
						
				</td>
				<td>
					<br/>
					<input type="submit" value="Je m'inscris" name="forminscription" style="width: 150px;">
				</td>
			</tr>

			<tr>
				<td colspan="2">
					<br/><br/>
					<div id="msg_erreur">
					<?php if (isset($erreur)) { echo '<font color="red">'.$erreur.'</font>';}?>
					</div>
				</td>
			</tr>

		</table>
		
	</form>



</section>
	
</div>

</body>
</html>