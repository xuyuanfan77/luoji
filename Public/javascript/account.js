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

function registerVerifyAllInput() {
	var result = true;
	/*用户名验证*/
	var usernameInput = document.getElementById("rusername");
	var userNameRegExp = /^[a-zA-Z0-9]{4,20}$/;
	var usernameResult = userNameRegExp.test(usernameInput.value);
	if(usernameResult) {
		usernameInput.style.border = "";
		usernameInput.style.boxShadow = "";
	} else {
		usernameInput.style.border = "1px solid red";
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
		nicknameInput.style.border = "1px solid red";
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
	return result;
}

function registerSubmitForm() {
	if(!registerVerifyAllInput()) {
		alert('红色框内信息填写不正确！');
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
					window.history.back(-1);
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