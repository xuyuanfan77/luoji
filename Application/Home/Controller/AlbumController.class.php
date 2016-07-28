<?php
namespace Home\Controller;
header("Content-Type: text/html;charset=utf-8");
class AlbumController extends LayoutController {
	//获取页数
	private function getPageNum() {
		if($_GET['p']) {
			$pageNum = $_GET['p'];
		} else {
			$pageNum = 1;
		}
		return $pageNum;
	}
	
	//获取专辑
	private function getSpecialId() {
		if($_GET['specialId']) {
			$specialId = $_GET['specialId'];
		} else {
			$specialId = 1;
		}
		return $specialId;
	}
	
	//初始化专辑
	private function initSpecial() {
		$Special = M('Special');
		$specialId = $this->getSpecialId();
		$condition['id'] = array('eq',$specialId);
		$specialData = $Special->where($condition)->find();
		$special['coverimage'] = C('__ROOT__') . 'Public/resource/coverimage/' . $specialData['coverimage'];
		$special['maintitle'] = $specialData['maintitle'];
		$special['subhead'] = $specialData['subhead'];
		$special['introduction'] = $specialData['introduction'];
		$this->assign('special',$special);
	}
	
	//初始化文章
	private function initArticle() {
		$IncludeView = D('IncludeView');
		$specialId = $this->getSpecialId();
		$condition['special_id'] = array('eq',$specialId);
		$pageNum = $this->getPageNum();
		$articleData = $IncludeView->where($condition)->page($pageNum .',8')->select();
		$articleCount = count($articleData);
		$articleTotalReadnum = 0;
		for ($index=0; $index<$articleCount; $index++) {
			$articleCoverImage[$index] = C('__ROOT__') . 'Public/resource/minimalimage/' . $articleData[$index]['article_coverimage'];
			$Category = M("Category");
			$condition['id'] = array('eq',$articleData[$index]['article_categoryid']);
			$categoryData = $Category->where($condition)->find();
			$articleClassification[$index] = $categoryData['name'];
			
			$articleHref[$index] = U('Content/index', array('type'=>'article','articleId'=>$articleData[$index]['article_id']));
			$articleMaintitle[$index] = $articleData[$index]['article_maintitle'];
			$articleIntroduction[$index] = $articleData[$index]['article_introduction'];
			$articleReadnum[$index] = $articleData[$index]['readnum'];
			$articleTotalReadnum = $articleTotalReadnum + $articleData[$index]['readnum'];
			
			$User = M('User');
			$condition['id'] = array('eq',$articleData[$index]['author']);
			$userData = $User->where($condition)->find();
			$articleAuthor[$index] = $userData['nickname'];
		}
		$this->assign('articleCoverImage',$articleCoverImage);
		$this->assign('articleClassification',$articleClassification);
		$this->assign('articleHref',$articleHref);
		$this->assign('articleMaintitle',$articleMaintitle);
		$this->assign('articleIntroduction',$articleIntroduction);
		$this->assign('articleReadnum',$articleReadnum);
		$this->assign('articleTotalReadnum',$articleTotalReadnum);
		$this->assign('articleCount',$articleCount);
		$this->assign('articleAuthor',$articleAuthor);
	}
	
	//初始化页数
	private function initPage() {
		$IncludeView = D('IncludeView');
		$specialId = $this->getSpecialId();
		$condition['special_id'] = array('eq',$specialId);
		$articleCount = $IncludeView->where($condition)->count();
		$Page = new \Think\Page($articleCount,8);
		foreach($condition as $key=>$val) {
			$Page->parameter[$key] = urlencode($val);
		}
		$pageShow = $Page->show();
		$this->assign('pageShow',$pageShow);
	}
	
    public function index(){
		$this->initLayout();
		$this->initSpecial();
		$this->initArticle();
		$this->initPage();
        $this->display();
	}
}