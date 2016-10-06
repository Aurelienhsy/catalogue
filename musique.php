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
		<li id="courant"><a title="musique" href="musique.php">Musique</a></li>
		<li><a title="Gestion" href="gestion.php">Gestion</a></li>
	</ul>
	<div id="entete">
		<h1 id="titre">Musique</h1>
	</div>
	<div id="corps">

		<form id="myForm" name="myForm">
		<fieldset>
        <legend>Choisissez les CD de musique qui vous intéressent</legend>
			<fieldset>
				<input type="button" id="BTvivaldi" class="BTlivres" name="BTvivaldi" value="+"/>
				<input type="text" id="NBvivaldi" class="NBlivres" name="NBvivaldi"/>
				<label for="vivaldi">Vivaldi</label>
			</fieldset>
			<fieldset>
				<input type="button" id="BTbach" class="BTlivres" name="BTbach" value="+"/>
				<input type="text" id="NBbach" class="NBlivres" name="NBbach"/>
				<label for="bach">Bach</label>
			</fieldset>
			<fieldset>
				<input type="button" id="BThaendel" class="BTlivres" name="BThaendel" value="+"/>
				<input type="text" id="NBhaendel" class="NBlivres" name="NBhaendel"/>
				<label for="haendel">Haendel</label>
			</fieldset>
			<fieldset>
				<input type="button" id="BTmozart" class="BTlivres" name="BTmozart" value="+"/>
				<input type="text" id="NBmozart" class="NBlivres" name="NBmozart"/>
				<label for="mozart">Mozart</label>
			</fieldset>
			<fieldset>
				<input type="button" id="BTbeethoven" class="BTlivres" name="BTbeethoven" value="+"/>
				<input type="text" id="NBbeethoven" class="NBlivres" name="NBbeethoven"/>
				<label for="mozart">Beethoven</label>
			</fieldset>
		</fieldset>
		</form>
	
	
	</div>
	<div id="pied">
		<div id="right"><a href="gestion.php">Retour-à-Gestion</a></div> 
	</div>

	<script type="text/javascript" src="formulaire.js"></script>	
</body>
</html>
