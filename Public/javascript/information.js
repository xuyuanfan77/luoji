function updateSubmitForm() {
	
	var result = true;
	/*用户名验证*/
	var usernameInput = document.getElementById("username");
	var userNameRegExp = /^[a-zA-Z0-9]{4,20}$/;
	var usernameResult = userNameRegExp.test(usernameInput.value);
	if(usernameResult) {
		usernameInput.style.border = "";
		usernameInput.style.boxShadow = "";
	} else {
		usernameInput.style.border = "1px solid #FF0000";
		usernameInput.style.boxShadow = "0px 0px 2px red";
		result = false;
	}
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
	
	if(!result) {
		alert('红色框内信息填写不正确！');
		usernameInput.style.border = "";
		usernameInput.style.boxShadow = "";
		nicknameInput.style.border = "";
		nicknameInput.style.boxShadow = "";
		passwordInput.style.border = "";
		passwordInput.style.boxShadow = "";
		repasswordInput.style.border = "";
		repasswordInput.style.boxShadow = "";
	} else {
		var username = document.getElementById("username").value;
		var nickname = document.getElementById("nickname").value;
		var password = document.getElementById("password").value;
		var repassword = document.getElementById("repassword").value;
		
		var url = document.getElementById("url").value;
		var data = 'username='+username+'&nickname='+nickname+'&password='+password+'&repassword='+repassword;
		
		$.ajax({  
			type:'post',
			dataType:'json',
			data:data,  
			url:url,
			success : function(data) {
				// if(data == '注册成功！') {
					// location.href=document.referrer;
				// } else {
					// alert(data);
				// }
			},  
			error : function() {  
				// alert('响应异常！');
			}  
		}); 
	}
}