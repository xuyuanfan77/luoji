<?php
namespace Home\Controller;
use Think\Controller;
header("Content-Type: text/html;charset=utf-8");
class LayoutController extends Controller {
	
	private $artCategory;
	
	protected function setArtCategory($categoryId) {
		$Category = M("Category");
		$categoryData = $Category->alias('category1')
		->join('__CATEGORY__ category2 ON category2.parent=category1.id')
		->field('category1.id as maincategoryid,category2.id as subcategoryid')
		->select();
		
		for ($index=0; $index<count($categoryData); $index++) {
			if($categoryData[$index]['maincategoryid'] == $categoryId || $categoryData[$index]['subcategoryid'] == $categoryId){
				$this->artCategory = $categoryData[$index]['maincategoryid'];
				break;
			}
		}
	}
	
    protected function initLayout(){
		//导航菜单
		$Category = M("Category");
		$mainCategoryData = $Category->where('level=1')->order(array('index'))->select();
		$subCategoryData = $Category->where('level=2')->order(array('parent','index'))->select();
		$mainMenuCode = $mainMenuCode.'<ul>';
		$subMenuCode = '';
		for ($index=0; $index<count($mainCategoryData); $index++) {
			//一级导航
			$mainMenuCode = $mainMenuCode.'<li>';
			$href = U('Index/index', array('category'=>$mainCategoryData[$index]['id']));
			if($mainCategoryData[$index]['id'] == $this->artCategory){
				$class = "menu-select";
			}else{
				$class = "menu-default";
			}
			$subCategoryId = "subMenu". $mainCategoryData[$index]['id'];
			$mainMenuCode = $mainMenuCode.'<a href="'. $href. '" class="'. $class. '" onmouseover="document.getElementById(\''. $subCategoryId. '\').style.display=\'block\';" onmouseout="document.getElementById(\''. $subCategoryId. '\').style.display=\'none\';">'. $mainCategoryData[$index]['name']. '</a>';
			$mainMenuCode = $mainMenuCode.'</li>';
			
			//二级导航
			$subMenuCode = $subMenuCode. '<div class="menu2" id="'. $subCategoryId. '" onmouseover="this.style.display=\'block\';" onmouseout="this.style.display=\'none\';">';
			$subMenuCode = $subMenuCode. '<ul>';
			for ($subMenuIndex=0; $subMenuIndex<count($subCategoryData); $subMenuIndex++) {
				if($subCategoryData[$subMenuIndex]['parent'] == $mainCategoryData[$index]['id']){
					$href = U('Index/index', array('category'=>$subCategoryData[$subMenuIndex]['id']));
					$subMenuCode = $subMenuCode. '<li><a href="'. $href. '">'. $subCategoryData[$subMenuIndex]['name']. '</a></li>';
				}
			}
			$subMenuCode = $subMenuCode. '</ul>';
			$subMenuCode = $subMenuCode. '</div>';
		}
		$mainMenuCode = $mainMenuCode.'</ul>';
		$this->assign('mainMenu',$mainMenuCode);
		$this->assign('subMenu',$subMenuCode);

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