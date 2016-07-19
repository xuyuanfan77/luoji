var t = n = 0, count;
$(document).ready(
	function(){	
		count=$("#banner-pic a").length;
		$("#banner-pic a:not(:first-child)").hide();
		$("#banner-tit").html($("#banner-pic a:first-child").find("img").attr('title'));
		$("#banner-tit").click(function(){window.open($("#banner-pic a:first-child").attr('href'), "_blank")});
		$("#banner-but li").click(function() {
			var i = $(this).attr('alt');
			n = i;
			if (i >= count) return;
			$("#banner-tit").html($("#banner-pic a").eq(i).find("img").attr('title'));
			$("#banner-tit").unbind().click(function(){window.open($("#banner-pic a").eq(i).attr('href'), "_blank")})
			$("#banner-pic a").filter(":visible").fadeOut(500).parent().children().eq(i).fadeIn(1000);
			document.getElementById("banner").style.background="";
			$(this).toggleClass("on");
			$(this).siblings().removeAttr("class");
		});
		t = setInterval("showAuto()", 4000);
		$("#banner").hover(function(){clearInterval(t)}, function(){t = setInterval("showAuto()", 4000);});
	}
)
	
function showAuto(){
	n = n >=(count - 1) ? 0 : ++n;
	$("#banner-but li").eq(n).trigger('click');
}

function collect(articleObj){
	$.ajax({  
		type:'post',
		dataType:'json',
		data:"articleId="+articleObj.id,  
		url:"/luoji/index.php/Home/Collect/collect",
		success : function(data) {
			if(data == 'yes') {
				articleObj.className = 'fr collect1'; 
			} else if(data == 'no'){
				articleObj.className = 'fr collect2'; 
			} else if(data == 'permission'){
				alert('请先登录！');
			} else {
				alert('收藏异常！');
			}
		},  
		error : function() {  
			alert('响应异常！');
		}  
	});
}

function changeALot(specialPage){
	$.ajax({  
		type:'post',
		dataType:'json',
		data:"specialPage="+specialPage.alt,  
		url:"/luoji/index.php/Home/Index/changeALot",
		success:function(data) {
			var htmlCode='';
			for (var index=0;index<5;index++){
				if(data[index]){
					htmlCode = htmlCode+'<li>';
					htmlCode = htmlCode+'<img src="'+data[index]['coverimage']+'"/>';
					htmlCode = htmlCode+'<div class="pa special-title">';
					htmlCode = htmlCode+'<a class="pa main-title" href="'+data[index]['href']+'" target="_blank"><nobr>'+data[index]['maintitle']+'</nobr></a>';
					htmlCode = htmlCode+'<a class="pa minor-title" href="'+data[index]['href']+'" target="_blank"><nobr>'+data[index]['subhead']+'</nobr></a>';
					htmlCode = htmlCode+'</div>';
					htmlCode = htmlCode+'</li>';
				}
			}
			$("#specials").html(htmlCode);
			specialPage.alt = data['nextPage'];
		},  
		error:function() {  
			alert('响应异常！');
		}  
	});
}