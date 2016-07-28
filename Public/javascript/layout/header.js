function showLoginMenu(){
	document.getElementById("login-menu").style.display="block"; 
	document.getElementById("login-image").style.backgroundColor="#FFFFFF";
}

function hideLoginMenu(){
	document.getElementById("login-menu").style.display="none"; 
	document.getElementById("login-image").style.backgroundColor=""; 
}

function showSubMenu(obj){
	document.getElementById(obj.text).style.display="block";
}

function hideSubMenu(obj){
	document.getElementById(obj.text).style.display="none";
}

function showSubMenuSelf(obj){
	obj.style.display="block";
}

function hideSubMenuSelf(obj){
	obj.style.display="none";
}