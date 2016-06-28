function updateSubmitForm() {
	
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
	/*密码验证*/
	var passwordInput = document.getElementById("password");
	var passwordRegExp = /^[A-Za-z0-9\@\!\#\$\%\^\&\*\.\~]{4,20}$/;
	var passwordResult = passwordRegExp.test(passwordInput.value);
	if(passwordResult) {
		passwordInput.style.border = "";
		passwordInput.style.boxShadow = "";
	} else {
		passwordInput.style.border = "1px solid red";
		passwordInput.style.boxShadow = "0px 0px 2px red";
		result = false;
	}
	/*确认密码验证*/
	var repasswordInput = document.getElementById("repassword");
	var repasswordRegExp = /^[A-Za-z0-9\@\!\#\$\%\^\&\*\.\~]{4,20}$/;
	var repasswordResult = repasswordRegExp.test(repasswordInput.value);
	if(repasswordResult) {
		repasswordInput.style.border = "";
		repasswordInput.style.boxShadow = "";
	} else {
		repasswordInput.style.border = "1px solid red";
		repasswordInput.style.boxShadow = "0px 0px 2px red";
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
	var introductionRegExp = /^[\u0391-\uFFE5|a-zA-Z]{0,250}$/;
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
		passwordInput.style.border = "";
		passwordInput.style.boxShadow = "";
		repasswordInput.style.border = "";
		repasswordInput.style.boxShadow = "";
		jobsInput.style.border = "";
		jobsInput.style.boxShadow = "";
		companyInput.style.border = "";
		companyInput.style.boxShadow = "";
		introductionInput.style.border = "";
		introductionInput.style.boxShadow = "";
	} else {
		var nickname = document.getElementById("nickname").value;
		var password = document.getElementById("password").value;
		var repassword = document.getElementById("repassword").value;
		var jobs = document.getElementById("jobs").value;
		var company = document.getElementById("company").value;
		var introduction = document.getElementById("introduction").value;
		
		var url = document.getElementById("url").value;
		var data = 'nickname='+nickname+'&password='+password+'&repassword='+repassword+'&jobs='+jobs+'&company='+company+'&introduction='+introduction;
		
		$.ajax({  
			type:'post',
			dataType:'json',
			data:data,  
			url:url,
			success : function(data) {
				// if(data == '注册成功！') {
					// location.href=document.referrer;
				// } else {
					alert(data);
				// }
			},  
			error : function() {  
				alert('响应异常！');
			}  
		}); 
	}
}