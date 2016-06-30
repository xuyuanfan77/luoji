function updateSubmitForm() {
	var updatebuttonInput = document.getElementById("updatebutton");
	updatebuttonInput.value = "保存";
	updatebuttonInput.onclick = saveSubmitForm;
	
	var nicknameInput = document.getElementById("nickname");
	var imageInput = document.getElementById("imageInput");
	var imageDelete = document.getElementById("imageDelete");
	var emailInput = document.getElementById("email");
	var jobsInput = document.getElementById("jobs");
	var companyInput = document.getElementById("company");
	var introductionInput = document.getElementById("introduction");
	nicknameInput.disabled = false;
	imageInput.disabled = false;
	imageDelete.disabled = false;
	emailInput.disabled = false;
	jobsInput.disabled = false;
	companyInput.disabled = false;
	introductionInput.disabled = false;
}

function saveSubmitForm() {
	
	var result = true;
	/*昵称验证*/
	var nicknameInput = document.getElementById("nickname");
	var nickNameRegExp = /^[\u0391-\uFFE5|a-zA-Z0-9]{1,20}$/;
	var nicknameResult = nickNameRegExp.test(nicknameInput.value);
	if(nicknameResult) {
		nicknameInput.style.border = "";
		nicknameInput.style.boxShadow = "";
	} else {
		nicknameInput.style.border = "1px solid #FF0000";
		nicknameInput.style.boxShadow = "0px 0px 2px red";
		result = false;
	}
	/*邮箱验证*/
	var emailInput = document.getElementById("email");
	var emailRegExp = /^[a-z0-9]+([._\\-]*[a-z0-9])*@([a-z0-9]+[-a-z0-9]*[a-z0-9]+.){1,63}[a-z0-9]+$/;
	var emailResult = emailRegExp.test(emailInput.value);
	if(emailResult) {
		emailInput.style.border = "";
		emailInput.style.boxShadow = "";
	} else {
		emailInput.style.border = "1px solid red";
		emailInput.style.boxShadow = "0px 0px 2px red";
		result = false;
	}
	/*岗位验证*/
	var jobsInput = document.getElementById("jobs");
	var jobsRegExp = /^[\u0391-\uFFE5|a-zA-Z]{0,10}$/;
	var jobsResult = jobsRegExp.test(jobsInput.value);
	if(jobsResult) {
		jobsInput.style.border = "";
		jobsInput.style.boxShadow = "";
	} else {
		jobsInput.style.border = "1px solid red";
		jobsInput.style.boxShadow = "0px 0px 2px red";
		result = false;
	}
	/*单位验证*/
	var companyInput = document.getElementById("company");
	var companyRegExp = /^[\u0391-\uFFE5|a-zA-Z]{0,20}$/;
	var companyResult = companyRegExp.test(companyInput.value);
	if(companyResult) {
		companyInput.style.border = "";
		companyInput.style.boxShadow = "";
	} else {
		companyInput.style.border = "1px solid red";
		companyInput.style.boxShadow = "0px 0px 2px red";
		result = false;
	}
	/*介绍验证*/
	var introductionInput = document.getElementById("introduction");
	var introductionRegExp = /^[\s\S]{0,250}$/;
	var introductionResult = introductionRegExp.test(introductionInput.value);
	if(introductionResult) {
		introductionInput.style.border = "";
		introductionInput.style.boxShadow = "";
	} else {
		introductionInput.style.border = "1px solid red";
		introductionInput.style.boxShadow = "0px 0px 2px red";
		result = false;
	}
	
	if(!result) {
		alert('红色框内信息填写不正确！');
		nicknameInput.style.border = "";
		nicknameInput.style.boxShadow = "";
		emailInput.style.border = "";
		emailInput.style.boxShadow = "";
		jobsInput.style.border = "";
		jobsInput.style.boxShadow = "";
		companyInput.style.border = "";
		companyInput.style.boxShadow = "";
		introductionInput.style.border = "";
		introductionInput.style.boxShadow = "";
	} else {
		var nickname = document.getElementById("nickname").value;
		var email = document.getElementById("email").value;
		var jobs = document.getElementById("jobs").value;
		var company = document.getElementById("company").value;
		var introduction = document.getElementById("introduction").value;
		
		var url = document.getElementById("updateUrl").value;
		var data = 'nickname='+nickname+'&email='+email+'&jobs='+jobs+'&company='+company+'&introduction='+introduction;
		
		$.ajax({  
			type:'post',
			dataType:'json',
			data:data,  
			url:url,
			success : function(data) {
				if(data == '更新成功！') {
					var aFiles = document.getElementById("imageInput").files; 
					if (aFiles.length === 0) {
						location.href = location.href;
					} else {
						var url = document.getElementById("uploadUrl").value;
						$.ajaxFileUpload({
							type: 'post',
							url:url,
							secureuri :false,
							fileElementId :'imageInput',
							dataType : 'json',     
							success : function (data, status){
								if(data == '上传成功！') {
									location.href = location.href;
								} else {
									alert(data);
								}
							},
							error: function(data, status, e){
								alert('响应异常！');
							}
						});
					}
				} else {
					alert(data);
				}
			},  
			error : function() {  
				alert('响应异常！');
			}  
		});
	}
}

var inputImageFile = (function () { 
	if (window.FileReader) { 
		var oPreviewImg = null, oFReader = new window.FileReader(), 
		rFilter = /^(?:image\/bmp|image\/cis\-cod|image\/gif|image\/ief|image\/jpeg|image\/jpeg|image\/jpeg|image\/pipeg|image\/png|image\/svg\+xml|image\/tiff|image\/x\-cmu\-raster|image\/x\-cmx|image\/x\-icon|image\/x\-portable\-anymap|image\/x\-portable\-bitmap|image\/x\-portable\-graymap|image\/x\-portable\-pixmap|image\/x\-rgb|image\/x\-xbitmap|image\/x\-xpixmap|image\/x\-xwindowdump)$/i; 

		oFReader.onload = function (oFREvent) {
			var oPreviewImg = document.getElementById("image");			
			oPreviewImg.src = oFREvent.target.result; 
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