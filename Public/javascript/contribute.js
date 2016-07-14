function submitForm() {
	var information = document.getElementById("information");
	information.target = "_self";
	information.action = "contribute";
	information.submit()
}

function previewForm() {
	var information = document.getElementById("information");
	information.target = "_blank";
	information.action = "preview";
	information.submit()
}