var t = n = 0, count;
$(document).ready(function(){	
	count=$("#banner-list a").length;
	$("#banner-list a:not(:first-child)").hide();
	$("#banner-info").html($("#banner-list a:first-child").find("img").attr('alt'));
	$("#banner-info").click(function(){window.open($("#banner-list a:first-child").attr('href'), "_blank")});
	$("#banner-button > ul > li").click(function() {
		var i = $(this).attr('alt') - 1;
		n = i;
		if (i >= count) return;
		$("#banner-info").html($("#banner-list a").eq(i).find("img").attr('alt'));
		$("#banner-info").unbind().click(function(){window.open($("#banner-list a").eq(i).attr('href'), "_blank")})
		$("#banner-list a").filter(":visible").fadeOut(500).parent().children().eq(i).fadeIn(1000);
		document.getElementById("banner").style.background="";
		$(this).toggleClass("on");
		$(this).siblings().removeAttr("class");
	});
	t = setInterval("showAuto()", 4000);
	$("#banner").hover(function(){clearInterval(t)}, function(){t = setInterval("showAuto()", 4000);});
})
	
function showAuto()
{
	n = n >=(count - 1) ? 0 : ++n;
	$("#banner-button > ul > li").eq(n).trigger('click');
}

function collect(articleObj) {
	var curl = document.getElementById("collectUrl").value;
	$.ajax({  
		type:'post',
		dataType:'json',
		data:"articleId="+articleObj.id,  
		url:curl,
		success : function(data) {
			if(data == 'yes') {
				articleObj.className = 'article-collection-select'; 
			} else if(data == 'yes'){
				articleObj.className = 'article-collection-default'; 
			} else {
				alert('收藏异常！');
			}
		},  
		error : function() {  
			alert('响应异常！');
		}  
	});
	
}