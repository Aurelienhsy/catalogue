<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
<head>	
	<title>Cookies et Sessions</title>
	<meta http-equiv="content-type" content="text/html;charset=iso-8859-1" />
	<meta http-equiv="content-language" content="fr" />	
	<link rel="stylesheet" type="text/css" href="style.css" /> 
	<script type="text/javascript" src="cookies.js"></script>	
</head>
<body>
	<ul id="menu">
		<li id="courant"><a title="Livres" href="livres.php">Livres</a></li>
		<li><a title="Musique" href="musique.php">Musique</a></li>
		<li><a title="Gestion" href="gestion.php">Gestion</a></li>
	</ul>
	<div id="entete">
		<h1 id="titre">Livres</h1>
	</div>
	<div id="corps">

		<form id="myForm" name="myForm">
		<fieldset>
        <legend>Choisissez les romans qui vous intéressent</legend>
			<fieldset>
				<input type="button" id="BTbalzac" class="BTlivres" name="BTbalzac" value="+"/>
				<input type="text" id="NBbalzac" class="NBlivres" name="NBbalzac"/>
				<label for="balzac">Balzac</label>
			</fieldset>
			<fieldset>
				<input type="button" id="BTstendhal" class="BTlivres" name="BTstendhal" value="+"/>
				<input type="text" id="NBstendhal" class="NBlivres" name="NBstendhal"/>
				<label for="stendhal">Stendhal</label>
			</fieldset>
			<fieldset>
				<input type="button" id="BTflaubert" class="BTlivres" name="BTflaubert" value="+"/>
				<input type="text" id="NBflaubert" class="NBlivres" name="NBflaubert"/>
				<label for="flaubert">Flaubert</label>
			</fieldset>
			<fieldset>
				<input type="button" id="BTmaupassant" class="BTlivres" name="BTmaupassant" value="+"/>
				<input type="text" id="NBmaupassant" class="NBlivres" name="NBmaupassant"/>
				<label for="maupassant">Maupassant</label>
			</fieldset>
			<fieldset>
				<input type="button" id="BTproust" class="BTlivres" name="BTproust" value="+"/>
				<input type="text" id="NBproust" class="NBlivres" name="NBproust"/>
				<label for="proust">Proust</label>
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
