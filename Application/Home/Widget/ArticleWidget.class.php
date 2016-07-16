<?php
namespace Home\Widget;
use Think\Controller;
header("Content-Type: text/html;charset=utf-8");
class ArticleWidget extends Controller {

    public function index(){
		$wArticle = M('Article');
		$articleData = $wArticle->order('readnum desc')->limit(8)->select();
		for ($index=0; $index<count($articleData); $index++) {
			$wArticleMaintitle[$index] = $articleData[$index]['maintitle'];
			$wArticleHref[$index] = U('Content/index', array('type'=>'article','articleId'=>$articleData[$index]['id']));
		}
		$this->assign('wArticleMaintitle',$wArticleMaintitle);
		$this->assign('wArticleHref',$wArticleHref);
			
		$this->display('Article:index');
	}
}