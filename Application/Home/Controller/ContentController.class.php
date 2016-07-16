<?php
namespace Home\Controller;
header("Content-Type: text/html;charset=utf-8");
class ContentController extends LayoutController {

	//获取文章ID
	private function getArticleId() {
		if($_GET['articleId']) {
			$articleId = $_GET['articleId'];
		} else {
			$condition['special_id'] = array('eq',$_GET['specialId']);
			$IncludeView = D('IncludeView');
			$specialData = $IncludeView->where($condition)->select();
			$articleId = $specialData[0]['article_id'];
		}
		return $articleId;
	}
	
	//初始化文章与作者
	private function initArticleExpert() {
		if($_GET['type'] == 'article') {
			$ArticleView = D('ArticleView');
			$articleId = $this->getArticleId();
			$condition['article_id'] = array('eq',$articleId);
			$articleData = $ArticleView->where($condition)->find();

			$articleMaintitle = $articleData['maintitle'];
			$articleSubhead = $articleData['subhead'];
			$articleIntroduction = $articleData['article_introduction'];
			$articleImage = C('__ROOT__') . 'Public/resource/largerimage/' . $articleData['mainimage'];
			$expertImage = C('__ROOT__') . 'Public/resource/headportrait/' . $articleData['headimage'];
			$expertNickname = $articleData['nickname'];
			$expertJobs = $articleData['jobs'];
			$expertCompany = $articleData['company'];
			$expertIntroduction = $articleData['user_introduction'];
			$expertHref = U('User/index', array('authorId'=>$articleData['user_id']));
		} elseif($_GET['type'] == 'manuscript') {
			$ManuscriptView = D('ManuscriptView');
			$articleId = $this->getArticleId();
			$condition['manuscript_id'] = array('eq',$articleId);
			$articleData = $ManuscriptView->where($condition)->find();

			$articleMaintitle = $articleData['maintitle'];
			$articleSubhead = $articleData['subhead'];
			$articleIntroduction = $articleData['manuscript_introduction'];
			$articleImage = C('__ROOT__') . 'Public/resource/manuscriptimage/' . $articleData['mainimage'];
			$expertImage = C('__ROOT__') . 'Public/resource/headportrait/' . $articleData['headimage'];
			$expertNickname = $articleData['nickname'];
			$expertJobs = $articleData['jobs'];
			$expertCompany = $articleData['company'];
			$expertIntroduction = $articleData['user_introduction'];
			$expertHref = U('User/index', array('authorId'=>$articleData['user_id']));
		}
		$this->assign('articleMaintitle',$articleMaintitle);
		$this->assign('articleSubhead',$articleSubhead);
		$this->assign('articleIntroduction',$articleIntroduction);
		$this->assign('articleImage',$articleImage);
		$this->assign('expertImage',$expertImage);
		$this->assign('expertNickname',$expertNickname);
		$this->assign('expertJobs',$expertJobs);
		$this->assign('expertCompany',$expertCompany);
		$this->assign('expertIntroduction',$expertIntroduction);
		$this->assign('expertHref',$expertHref);
	}
	
	//更新阅读数
	private function updateReadnum() {
		$Article = M('Article');
		$articleId = $this->getArticleId();
		$condition['id'] = array('eq',$articleId);
		$Article->where($condition)->setInc('readnum',1,60);
	}
	
    public function index(){
		
		$this->initLayout();
		$this->initArticleExpert();
		$this->display();
		$this->updateReadnum();
	}
}