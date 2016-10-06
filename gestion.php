<?php include ( "panier.php" ) ; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
<head>	
	<title>Cookies et Sessions</title>
	<meta http-equiv="content-type" content="text/html;charset=iso-8859-1" />
	<meta http-equiv="Content-Language" content="fr" />		
	<link rel="stylesheet" type="text/css" href="style.css" /> 
	<script type="text/javascript" src="cookies.js"></script>	
</head>
<body>
	<ul id="menu">
		<li><a title="livres" href="livres.php">Livres</a></li>
		<li><a title="musique" href="musique.php">Musique</a></li>
		<li id="courant"><a title="Gestion" href="gestion.php">Gestion</a></li>
	</ul>
	<div id="entete">
		<h1 id="titre">Gestion</h1>
	</div>
	<div id="corps">

		<?php echo $chainetableHTMLArticleQuantite; ?>
		
	</div>
	<div id="pied">
		<div id="right"><a href="gestion.php">Retour-à-Gestion</a></div> 
	</div>

	<script type="text/javascript" src="gestion.js"></script>	
</body>
</html>

