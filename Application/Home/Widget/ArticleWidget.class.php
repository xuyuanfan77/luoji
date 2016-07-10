<?php
namespace Home\Widget;
use Think\Controller;
header("Content-Type: text/html;charset=utf-8");
class ArticleWidget extends Controller {

    public function index(){
		$Article = M('Article');
		$articleData = $Article->order('readnum desc')->limit(8)->select();
		
		for ($index=0; $index<=7; $index++) {
			$articleMaintitle[$index] = $articleData[$index]['maintitle'];
			$articleHref[$index] = U('Content/index', array('type'=>'article','articleId'=>$articleData[$index]['id']));
		}
		$this->assign('articleMaintitle',$articleMaintitle);
		$this->assign('articleHref',$articleHref);
			
		$this->display('Article:index');
	}
}