window.onload = function() {
    var oDiv = document.getElementById("account-tab");
    var oLi = oDiv.getElementsByTagName("div")[0].getElementsByTagName("li");
    var aCon = oDiv.getElementsByTagName("div")[1].getElementsByTagName("div");
    var timer = null;
    for (var i = 0; i < oLi.length; i++) {
        oLi[i].index = i;
        oLi[i].onclick = function() {
            show(this.index);
        }
    }
    function show(a) {
        index = a;
        for (var j = 0; j < oLi.length; j++) {
            oLi[j].className = "tabList-other";
            aCon[j].className = "tabCon-other";
        }
        oLi[index].className = "tabList-cur";
		aCon[index].className = "tabCon-cur";
    }
}

function refreshVerifyImg(obj) { 
	if( obj.src.indexOf('?')>0){  
		obj.src = obj.src+'&random='+Math.random();
    }else{  
		obj.src = obj.src.replace(/\?.*$/,'')+'?'+Math.random();
    }  
}

function registerSubmitForm() {
	
	var result = true;
	/*用户名验证*/
	var usernameInput = document.getElementById("rusername");
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
	var nicknameInput = document.getElementById("rnickname");
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
	var passwordInput = document.getElementById("rpassword");
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
	var repasswordInput = document.getElementById("rrepassword");
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
	/*验证码验证*/
	var verifyInput = document.getElementById("rverify");
	var verifyRegExp = /^[A-Za-z0-9]{4}$/;
	var verifyResult = verifyRegExp.test(verifyInput.value);
	if(verifyResult) {
		verifyInput.style.border = "";
		verifyInput.style.boxShadow = "";
	} else {
		verifyInput.style.border = "1px solid red";
		verifyInput.style.boxShadow = "0px 0px 2px red";
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
		verifyInput.style.border = "";
		verifyInput.style.boxShadow = "";
	} else {
		var rusername = document.getElementById("rusername").value;
		var rnickname = document.getElementById("rnickname").value;
		var rpassword = document.getElementById("rpassword").value;
		var rrepassword = document.getElementById("rrepassword").value;
		var rverify = document.getElementById("rverify").value;
		
		var rurl = document.getElementById("rurl").value;
		var rdata = 'username='+rusername+'&nickname='+rnickname+'&password='+rpassword+'&repassword='+rrepassword+'&verify='+rverify;
		
		$.ajax({  
			type:'post',
			dataType:'json',
			data:rdata,  
			url:rurl,
			success : function(data) {
				if(data == '注册成功！') {
					location.href=document.referrer;
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

function loginSubmitForm() {
	
	var result = true;
	/*用户名验证*/
	var usernameInput = document.getElementById("lusername");
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
	/*密码验证*/
	var passwordInput = document.getElementById("lpassword");
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
	/*验证码验证*/
	var verifyInput = document.getElementById("lverify");
	var verifyRegExp = /^[A-Za-z0-9]{4}$/;
	var verifyResult = verifyRegExp.test(verifyInput.value);
	if(verifyResult) {
		verifyInput.style.border = "";
		verifyInput.style.boxShadow = "";
	} else {
		verifyInput.style.border = "1px solid red";
		verifyInput.style.boxShadow = "0px 0px 2px red";
		result = false;
	}
	
	if(!result) {
		alert('红色框内信息填写不正确！');
		usernameInput.style.border = "";
		usernameInput.style.boxShadow = "";
		passwordInput.style.border = "";
		passwordInput.style.boxShadow = "";
		verifyInput.style.border = "";
		verifyInput.style.boxShadow = "";
	} else {
		var lusername = document.getElementById("lusername").value;
		var lpassword = document.getElementById("lpassword").value;
		var lverify = document.getElementById("lverify").value;
		
		var lurl = document.getElementById("lurl").value;
		var ldata = 'username='+lusername+'&password='+lpassword+'&verify='+lverify;
		
		$.ajax({  
			type:'post',
			dataType:'json',
			data:ldata,  
			url:lurl,
			success : function(data) {
				if(data == '登录成功！') {
					location.href=document.referrer;
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