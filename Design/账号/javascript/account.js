$(document).ready(function(){	
	var tabGroup=document.getElementById('tab-group');
	var tabs=tabGroup.getElementsByTagName('a');
	var panelGroup=document.getElementById('panel-group');
	var panels=panelGroup.getElementsByTagName('div');

	for(var i=0;i<tabs.length;i++){
		tabs[i].index=i;
		tabs[i].onclick=function (){
			for(var i=0;i<tabs.length;i++){
				tabs[i].className='tab-default';
				panels[i].style.display='none';
			}
			this.className='tab-select';
			panels[this.index].style.display='block';
		}
	}
})