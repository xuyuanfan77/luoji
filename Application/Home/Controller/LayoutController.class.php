<?php
namespace Home\Controller;
use Think\Controller;
header("Content-Type: text/html;charset=utf-8");
class LayoutController extends Controller {
	
	private $artCategory;
	
	protected function setArtCategory($artCategory) {
		$this->artCategory = $artCategory;
	}
	
    protected function initLayout(){
		
		//文章分类
		$navigation = array('menu-default','menu-default','menu-default','menu-default','menu-default');
		if($this->artCategory >= 0) {
			$navigation[$this->artCategory] = 'menu-select';
		}
		$this->assign('navigation',$navigation);

		//账号菜单
		if(cookie('PHPSESSID') && session('id') && cookie('PHPSESSID') == session('id')) {
			$headimage = C('__ROOT__') . 'Public/resource/headportrait/' .session('headimage');
			$accountMenuText[0] = '我要投稿';
			$accountMenuText[1] = '我的投稿';
			$accountMenuText[2] = '我的收藏';
			$accountMenuText[3] = '个人信息';
			$accountMenuText[4] = '退 出';
			$accountMenuUrl[0] = U('Contribute/index');
			$accountMenuUrl[1] = U('Manuscript/index');
			$accountMenuUrl[2] = U('Collect/index');
			$accountMenuUrl[3] = U('Information/index');
			$accountMenuUrl[4] = U('Account/logout');
		} else {
			$headimage = C('__ROOT__') . 'Public/picture/' .'login.jpg';
			$accountMenuText[0] = '登 陆';
			$accountMenuText[1] = '注 册';
			$accountMenuUrl[0] = U('Account/index', array('operation'=>0));
			$accountMenuUrl[1] = U('Account/index', array('operation'=>1));
		}
		
		$this->assign('headimage',$headimage);
		$this->assign('accountMenuText',$accountMenuText);
		$this->assign('accountMenuUrl',$accountMenuUrl);
	}
}