<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../style/style.css">
	<title>
		<?php echo ($titre); ?>
	</title>
</head>
	<body>
		<div id="tete">
			<?php echo($entete);?>
		</div>

		<hr>

		<div id="corps">
			<div id="aside">
				<?php echo($aside); ?>
			</div>
			<div id="contenu">
				<?php echo($contenu); ?>
			</div>	
		</div>

		<hr>

		<div id="pied">
			<?php echo ($pied); ?>
		</div>

	</body>
</html>