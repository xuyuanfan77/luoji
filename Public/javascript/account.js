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