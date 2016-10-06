
function setCookie(nom, valeur, days, chemin, domaine, securite){
	var date = new Date ();
	date.setDate ( date.getDate () + days );
    document.cookie = nom + ' = ' + escape(valeur) + '  ' +
               ((days == undefined) ? '' : ('; expires = ' + date.toGMTString())) +
               ((chemin == undefined) ? '' : ('; path = ' + chemin)) +
               ((domaine == undefined) ? '' : ('; domain = ' + domaine)) +
               ((securite == true) ? '; secure' : '');
}

function getCookie ( name ) {
	var tab = document.cookie.split(";");
	for ( var i = 0; i < tab.length; i++ )   {
		var index = tab[i].indexOf ("=");
		var nom = tab[i].substr ( 0, index );
		if ( nom == name ) {
			var value = tab[i].substr ( index + 1 );
			return unescape ( value );
		}
	}
	return null;
}

