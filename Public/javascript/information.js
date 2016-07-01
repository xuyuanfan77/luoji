function updateSubmitForm() {
	var inputs = new Array("nickname","imageInput","imageDelete","password","repassword","email","jobs","company","introduction");
	for (var index=0;index<inputs.length;index++)
	{
		var input = document.getElementById(inputs[index]);
		input.disabled = false;
	}
	
	var updatebuttonInput = document.getElementById("updatebutton");
	updatebuttonInput.value = "保存";
	updatebuttonInput.onclick = saveSubmitForm;
}

function saveSubmitForm() {
	var information = document.getElementById("information");
	information.submit()
}

var inputImageFile = (function () { 
	if (window.FileReader) { 
		var imagePreview = null, oFReader = new window.FileReader(), 
		rFilter = /^(?:image\/bmp|image\/cis\-cod|image\/gif|image\/ief|image\/jpeg|image\/jpeg|image\/jpeg|image\/pipeg|image\/png|image\/svg\+xml|image\/tiff|image\/x\-cmu\-raster|image\/x\-cmx|image\/x\-icon|image\/x\-portable\-anymap|image\/x\-portable\-bitmap|image\/x\-portable\-graymap|image\/x\-portable\-pixmap|image\/x\-rgb|image\/x\-xbitmap|image\/x\-xpixmap|image\/x\-xwindowdump)$/i; 

		oFReader.onload = function (oFREvent) {
			var imagePreview = document.getElementById("image");			
			imagePreview.src = oFREvent.target.result; 
		}; 

		return function () { 
			var aFiles = document.getElementById("imageInput").files; 
			if (aFiles.length === 0) { return; } 
			if (!rFilter.test(aFiles[0].type)) { alert("You must select a valid image file!"); return; } 
			oFReader.readAsDataURL(aFiles[0]); 
			var imagePreview = document.getElementById("image");
			imagePreview.style.visibility = "visible";
		} 
	} 
	if (navigator.appName === "Microsoft Internet Explorer") { 
		return function () { 
			alert(document.getElementById("imageInput").value); 
			document.getElementById("imagePreview").filters.item("DXImageTransform.Microsoft.AlphaImageLoader").src = document.getElementById("imageInput").value; 
		} 
	} 
})(); 

function deleteImageFile() { 
	var imageInput = document.getElementById("imageInput"); 
	imageInput.outerHTML=imageInput.outerHTML;

	var imagePreview = document.getElementById("image");
	imagePreview.style.visibility = "hidden";
}