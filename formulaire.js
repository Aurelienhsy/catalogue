
var nom_cookie = "panier"; 

var articles = new Array();
articles['beethoven'] = 'j'; articles['mozart'] = 'i'; articles['haendel'] = 'h'; articles['bach'] = 'g'; articles['vivaldi'] = 'f';
articles['balzac'] = 'a'; articles['stendhal'] = 'b'; articles['flaubert'] = 'c'; articles['maupassant'] = 'd'; articles['proust'] = 'e';
	
var formulaire = document.getElementById('myForm'); 

var tableauDesDonnees = cookieTotableau();

for (i=0; i<formulaire.elements.length; i++) {
	if (!(typeof(formulaire.elements[i].name) == 'undefined' || formulaire.elements[i].name == null)) {
		var nom = formulaire.elements[i].name;

		var extension = nom.substr ( 0, 2 ); 
		if (extension == "BT") { 
			var racine = nom.substr ( 2 ); 
			setFunctionOnClick(racine, formulaire.elements[i], formulaire.elements['NB'+racine]);
			var code = articles[racine];
			var quantite = tableauDesDonnees[code];
			if ( quantite != undefined ) {
				formulaire.elements['NB'+racine].value = quantite;
			}
		}
	}
}


function cookieTotableau() {
	var tableau = new Array();
	var buffer = getCookie( nom_cookie );
	if (buffer == null || buffer == "") return tableau;
	var tab = buffer.split("#");
	for ( var i = 0; i < tab.length; i++ )   {
		var codeQuantite = tab[i].split("_");
		codeArticle = codeQuantite[0];
		quantite = codeQuantite[1];
		tableau[codeArticle] = parseInt(quantite);
	}
	return tableau;
}


function tableauTocookie() {
	var buffer = "";
	for ( var racine in articles )   {
		var code = articles[racine];
		var quantite = tableauDesDonnees[code];
		if (quantite>0) {
			var separateur = "#";
			if (buffer == "") separateur = "";
			buffer += separateur+code+"_"+quantite;
		}
	}
	return buffer;
}


function getValeur(value) {		
	return (isNaN(parseInt(value)))? 0 : parseInt(value);
}


function setFunctionOnClick(nomArticle, boutonArticle, champQuantiteArticle) {		
	boutonArticle.onclick = function(){
		var quantite = getValeur(champQuantiteArticle.value);
		champQuantiteArticle.value = ++quantite;	
		codeArticle = articles[nomArticle];		
		tableauDesDonnees[codeArticle] = quantite;
		setCookie( nom_cookie, tableauTocookie() );
	};
}


	
	