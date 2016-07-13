function submitForm() {
	var information = document.getElementById("information");
	information.action = "contribute";
	information.submit()
}

function previewForm() {
	var information = document.getElementById("information");
	information.action = "preview";
	information.submit()
}