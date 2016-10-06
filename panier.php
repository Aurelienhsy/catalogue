<?php

	$nom_cookie = "panier";
	
	$chainetableHTMLArticleQuantite = ""; 
	

	$articles = array(); 
	$articles['beethoven'] = 'j'; $articles['mozart'] = 'i'; $articles['haendel'] = 'h'; $articles['bach'] = 'g'; $articles['vivaldi'] = 'f'; 
	$articles['balzac'] = 'a'; $articles['stendhal'] = 'b'; $articles['flaubert'] = 'c'; $articles['maupassant'] = 'd'; $articles['proust'] = 'e';;
	
	if (isset($_COOKIE[$nom_cookie])) {

		$panier = htmlentities ($_COOKIE[$nom_cookie]);

		$tableauNomArticleQuantite = convertirCookieEnTableau($panier);

		$chainetableHTMLArticleQuantite = afficherTableauEnHTML($tableauNomArticleQuantite);
	}
	else $chainetableHTMLArticleQuantite = "Le panier est vide";


function convertirCookieEnTableau($cookie) {
	global $articles;
    $tableauNomArticleQuantite = array();
	$inverseArticles = array_flip($articles); 

	$tab = explode("#", $cookie);
	for ( $i = 0; $i < count($tab); $i++ )   {
		$codeQuantite = explode("_", $tab[$i]); 

		$nomArticle = $inverseArticles[$codeQuantite[0]];
		$quantite = $codeQuantite[1];
		$tableauNomArticleQuantite[$nomArticle] = $quantite;
	}
	return $tableauNomArticleQuantite;
}

function afficherTableauEnHTML($tableauNomArticleQuantite) {
	$chainetableHTMLArticleQuantite  = "<table><caption>Voici vos articles</caption>";
	$chainetableHTMLArticleQuantite .= "<tr><th>Article</th><th>Quantité</th></tr>";
	foreach ( $tableauNomArticleQuantite as $nomArticle => $quantite ) {
		$chainetableHTMLArticleQuantite .= "<tr><td>$nomArticle</td><td>$quantite</td></tr>";
	}
	$chainetableHTMLArticleQuantite .= "<tr><th id='supprimerCookies' colspan='2'>";
	$chainetableHTMLArticleQuantite .= "<form id='myForm'><input type='button' id='supprimerCookies' value='Cliquez-ici pour supprimer les cookies'/></form>";
	$chainetableHTMLArticleQuantite .= "</th></tr></table>";
    return $chainetableHTMLArticleQuantite;
}

?>
