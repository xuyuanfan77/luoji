<?php
namespace Home\Controller;
use Think\Controller;
header("Content-Type: text/html;charset=utf-8");
class LayoutController extends Controller {
    protected function initLayout($title){
		//设置标题
		if($title){
			$this->assign('title',$title);
		} else {
			$this->assign('title','辑图片博客平台');
		}
		//导航菜单
		$Category = M("Category");
		$mainCategoryData = $Category->where('level=1')->order(array('index'))->select();
		$subCategoryData = $Category->where('level=2')->order(array('parent','index'))->select();
		
		for ($index=0; $index<count($mainCategoryData); $index++) {
			$categoryId = $mainCategoryData[$index]['id'];
			$mainCategory[$categoryId]['name'] = $mainCategoryData[$index]['name'];
			$mainCategory[$categoryId]['href'] = U('Index/index', array('category'=>$categoryId));
		}
		
		for ($index=0; $index<count($subCategoryData); $index++) {
			$categoryId = $subCategoryData[$index]['id'];
			$parentCategoryId = $subCategoryData[$index]['parent'];
			$subCategory[$categoryId]['name'] = $subCategoryData[$index]['name'];
			$subCategory[$categoryId]['href'] = U('Index/index', array('category'=>$categoryId));
			$mainCategory[$parentCategoryId]['sub'][$index] = $categoryId;
		}
		$this->assign('mainCategory',$mainCategory);
		$this->assign('subCategory',$subCategory);

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