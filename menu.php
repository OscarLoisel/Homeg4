

<?php
/*session_start();

$bdd= new PDO('mysql:host=localhost;dbname=Homeg4; charset=utf8', 'root', '');

if (isset($_GET['id']) AND $_GET['id']> 0)
{
	$getid = intval($_GET['id']);
	$requser = $bdd ->prepare('SELECT * FROM utilisateur WHERE id = ?');
	$requser -> execute(array($getid));
	$userinfo = $requser->fetch();*/

?>



<header>
	<div class="logo">
		<img src="images/logo(3).jpg" alt= "logo">
	</div>
	<nav>
		<ul id ="menu-accordeon">
			<li><a href="#">Home</a></li>
			<li id="reglage"><a href="#">Réglage</a>
				<ul>
					<li class ="reglage_2"><a href="#">Sécurité</a></li>
					<li class ="reglage_2"><a href="#">Système</a></li>
					<li class ="reglage_2"><a href="#">Conditions générales d'utilisation</a></li>
				</ul>
			</li>
			<li id="contact"><a href="#">Contact</a>
				<ul>
					<li class ="contact_2"><a href="#">Newsletter</a></li>
					<li class ="contact_2"><a href="#">Forum</a></li>
					<li class ="contact_2"><a href="#">S.A.V</a></li>
				</ul>
			</li>
		</ul>
	</nav>
	<div>
			<?php
				if (isset($_SESSION['id']) AND $userinfo['id'] == $_SESSION['id'])
				{
				?>
				<a href="#">Editer mon profil</a>
				<a href="deconnexion.php">Deconnexion</a>

				<?php
				}
				?>
		</div>
</header>




