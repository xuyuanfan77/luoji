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
	
	//获取文章列表序列号
	private function getArtListIndex(){
		if($_GET['artListIndex']) {
			$this->artListIndex = $_GET['artListIndex'];
		} else {
			$this->artListIndex = 0;
		}
	}
	
	//初始化文章列表
	private function initArtList() {
		if($_GET['type'] == 'article' || $_GET['type'] == 'manuscript') {
			$this->assign('artListDisplay','hide');
		} elseif($_GET['type'] == 'articles') {
			$this->assign('artListDisplay','show');
			
			$IncludeView = D('IncludeView');
			$condition['special_id'] = array('eq',$_GET['specialId']);
			$specialData = $IncludeView->where($condition)->select();
			$condition = NULL;
			$articleCount = count($specialData);
			
			$articleIndex = array('一、', '二、', '三、', '四、', '五、', '六、', '七、', '八、', '九、', '十、', '十一、', '十二、', '十三、', '十四、', '十五、');
			for ($index=0; $index<$articleCount; $index++) {
				$artListTitle[$index] = $articleIndex[$index] . mb_substr($specialData[$index]['article_maintitle'],0,13,'utf-8') . '…';
				$artListHref[$index] = U('Content/index', array('type'=>'articles','specialId'=>$_GET['specialId'],'articleId'=>$specialData[$index]['article_id'],'artListIndex'=>$index));
				$artListIndex = $this->getArtListIndex();
				if($index == $artListIndex) {
					$artListStyle[$index] = 'list-select';
				} else {
					$artListStyle[$index] = 'list-default';
				}
			}
			$this->assign('artListTitle',$artListTitle);
			$this->assign('artListHref',$artListHref);
			$this->assign('artListStyle',$artListStyle);
		}
	}
	
	//初始化文章与作者
	private function initArticleExpert() {
		if($_GET['type'] == 'article' || $_GET['type'] == 'articles') {
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
	
    public function index(){
		$this->initLayout();
		$this->initArtList();
		$this->initArticleExpert();
		$this->display();
	}
}