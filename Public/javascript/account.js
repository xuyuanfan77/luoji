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

function registerVerifyInput(obj) {
	var result;
	switch(obj.name)
	{
	case "username":
		var userNameRegExp = /^[a-zA-Z0-9]{4,20}$/;
		result = userNameRegExp.test(obj.value);
		break;
	case "nickname":
		var nickNameRegExp = /^[\u0391-\uFFE5|a-zA-Z0-9]{1,20}$/;
		result = nickNameRegExp.test(obj.value);
		break;
	case "password":
		var passwordRegExp = /^[A-Za-z0-9\@\!\#\$\%\^\&\*\.\~]{4,20}$/;
		result = passwordRegExp.test(obj.value);
		break;
	case "repassword":
		var passwordRegExp = /^[A-Za-z0-9\@\!\#\$\%\^\&\*\.\~]{4,20}$/;
		result = repasswordRegExp.test(obj.value);
		break;
	default:;
	}
	
	if(result) {
		obj.style.border = "";
		obj.style.boxShadow = "";
	} else {
		obj.style.border = "1px solid red";
		obj.style.boxShadow = "0px 0px 2px red";
	}
}

function registerSubmitForm() {
	var rusername = document.getElementById("rusername").value;
	var rnickname = document.getElementById("rnickname").value;
	var rpassword = document.getElementById("rpassword").value;
	var rrepassword = document.getElementById("rrepassword").value;
	var rverify = document.getElementById("rverify").value;
	var postData = 'username='+rusername+'&nickname='+rnickname+'&password='+rpassword+'&repassword='+rrepassword+'&verify='+rverify;
	$.ajax({  
		type : 'POST',
		url : 'Account/register',/*action="{:U('Account/register')}" method="post"   onclick="registerSubmitForm()"*/
		data : postData,  
		dataType : 'json', 
		success : function(data) {
			alert("成功！");
		},  
		error : function() {  
			alert("失败！");
		}  
	}); 
}