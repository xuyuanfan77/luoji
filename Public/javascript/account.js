$(function() {
    var lis = document.getElementById("tabList").getElementsByTagName("li");
    var con = document.getElementById("tabCon").getElementsByTagName("div");
    for (var i = 0; i < lis.length; i++) {
        lis[i].index = i;
        lis[i].onclick = function() {
            show(this.index);
        }
    }
    function show(a) {
        for (var j = 0; j < lis.length; j++) {
            lis[j].className = "tabList-other";
            con[j].className = "tabCon-other";
        }
        lis[a].className = "tabList-cur";
		con[a].className = "tabCon-cur";
    }
});

$(function() {
	$('input, textarea').placeholder();
});

function refreshVerifyImg(obj) { 
	if( obj.src.indexOf('?')>0){  
		obj.src = obj.src+'&random='+Math.random();
    }else{  
		obj.src = obj.src.replace(/\?.*$/,'')+'?'+Math.random();
    }  
}

function verify(fieldArray){
	var result = true;
	for (fieldIndex in fieldArray){
		var fieldName = document.getElementById(fieldArray[fieldIndex]['name']);
		var fieldRegExp = fieldArray[fieldIndex]['regexp'];
		var verifyResult = fieldRegExp.test(fieldName.value);
		if(verifyResult) {
			fieldName.style.border = "";
			fieldName.style.boxShadow = "";
		} else {
			fieldName.style.border = "1px solid #FF0000";
			fieldName.style.boxShadow = "0px 0px 2px red";
			result = false;
		}
	}
	return result;
}

function registerSubmitForm() {
	var fieldArray = new Array();
	fieldArray[1] = {name:"rusername", regexp:/^[a-zA-Z0-9]{4,20}$/};
	fieldArray[2] = {name:"rnickname", regexp:/^[\u0391-\uFFE5|a-zA-Z0-9]{1,20}$/};
	fieldArray[3] = {name:"rpassword", regexp:/^[A-Za-z0-9\@\!\#\$\%\^\&\*\.\~]{4,20}$/};
	fieldArray[4] = {name:"rrepassword", regexp:/^[A-Za-z0-9\@\!\#\$\%\^\&\*\.\~]{4,20}$/};
	fieldArray[5] = {name:"rverify", regexp:/^[A-Za-z0-9]{4}$/};
	var result = verify(fieldArray);
	if(!result) {
		alert('红色框内信息填写不正确！');
		
		for (fieldIndex in fieldArray){
			var fieldName = document.getElementById(fieldArray[fieldIndex]['name']);
			fieldName.style.border = "";
			fieldName.style.boxShadow = "";
		}
	} else {
		var rusername = document.getElementById(fieldArray[1]['name']).value;
		var rnickname = document.getElementById(fieldArray[2]['name']).value;
		var rpassword = document.getElementById(fieldArray[3]['name']).value;
		var rrepassword = document.getElementById(fieldArray[4]['name']).value;
		var rverify = document.getElementById(fieldArray[5]['name']).value;

		var rdata = 'username='+rusername+'&nickname='+rnickname+'&password='+rpassword+'&repassword='+rrepassword+'&verify='+rverify;
		
		$.ajax({  
			type:'post',
			dataType:'json',
			data:rdata,  
			url:'/luoji/index.php/Home/Account/register',
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
	var fieldArray = new Array();
	fieldArray[1] = {name:"lusername", regexp:/^[a-zA-Z0-9]{4,20}$/};
	fieldArray[2] = {name:"lpassword", regexp:/^[A-Za-z0-9\@\!\#\$\%\^\&\*\.\~]{4,20}$/};
	fieldArray[3] = {name:"lverify", regexp:/^[A-Za-z0-9]{4}$/};
	var result = verify(fieldArray);
	if(!result) {
		alert('红色框内信息填写不正确！');
		for (fieldIndex in fieldArray){
			var fieldName = document.getElementById(fieldArray[fieldIndex]['name']);
			fieldName.style.border = "";
			fieldName.style.boxShadow = "";
		}
	} else {
		var lusername = document.getElementById(fieldArray[1]['name']).value;
		var lpassword = document.getElementById(fieldArray[2]['name']).value;
		var lverify = document.getElementById(fieldArray[3]['name']).value;
		var ldata = 'username='+lusername+'&password='+lpassword+'&verify='+lverify;
		
		$.ajax({  
			type:'post',
			dataType:'json',
			data:ldata,  
			url:'/luoji/index.php/Home/Account/login',
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