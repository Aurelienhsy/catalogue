
var nom_cookie = "panier"; 

document.getElementById('supprimerCookies').onclick = supprimerCookie;


function supprimerCookie(){  
	setCookie( nom_cookie, "", -1 );
	location.reload();
}
	
	