<?php
namespace Manager\Controller;
use Think\Controller;
header("Content-Type: text/html;charset=utf-8");
class LayoutController extends Controller {
    protected function initLayout($page){
		if($page == "account"){
			$this->assign('navbarDispaly',"none");
			$this->assign('logoutDispaly',"none");
		}elseif($page == "carousel"){
			$this->assign('navbarDispaly',"inherit");
			$this->assign('logoutDispaly',"inherit");
			$navbarColor = array("#eee","#fff","#fff","#fff","#fff","#fff");
			$this->assign('navbarColor',$navbarColor);
		}elseif($page == "category"){
			$this->assign('navbarDispaly',"inherit");
			$this->assign('logoutDispaly',"inherit");
			$navbarColor = array("#fff","#eee","#fff","#fff","#fff","#fff");
			$this->assign('navbarColor',$navbarColor);
		}
			
	}
}