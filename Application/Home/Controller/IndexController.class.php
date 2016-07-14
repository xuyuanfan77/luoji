<?php
namespace Home\Controller;
header("Content-Type: text/html;charset=utf-8");
class IndexController extends LayoutController {
	
	//获取栏目
	private function getCategory() {
		if($_GET['category']) {
			$artCategory = $_GET['category'];
		} else {
			$artCategory = 0;
		}
		return $artCategory;
	}
	
	//获取页数
	private function getPageNum() {
		if($_GET['p']) {
			$pageNum = $_GET['p'];
		} else {
			$pageNum = 1;
		}
		return $pageNum;
	}
	
	//初始化专辑
	private function initSpecial() {
		$Special = M('Special');
		$specialData = $Special->limit(5)->select();
		for ($index=0; $index<=4; $index++) {
			$specialImages[$index] = C('__ROOT__') . 'Public/resource/coverimage/' . $specialData[$index]['coverimage'];
			$specialMaintitles[$index] = $specialData[$index]['maintitle'];
			$specialSubheads[$index] = $specialData[$index]['subhead'];
			$specialHrefs[$index] = U('Content/index', array('type'=>'articles','specialId'=>$specialData[$index]['id']));
		}
		$this->assign('specialImages',$specialImages);
		$this->assign('specialMaintitles',$specialMaintitles);
		$this->assign('specialSubheads',$specialSubheads);
		$this->assign('specialHrefs',$specialHrefs);
	}
	
	//初始化文章列表
	private function initArticle() {
		$artCategory = $this->getCategory();
		if ($artCategory != 0) {
			$condition['type1'] = array('eq',$artCategory);
		}
		$Article = D('ArticleView');
		$pageNum = $this->getPageNum();
		$articleData = $Article->where($condition)->page($pageNum .',10')->select();
		$articleCount = count($articleData);
		for ($index=0; $index<$articleCount; $index++) {
			$articleCoverImage[$index] = C('__ROOT__') . 'Public/resource/minimalimage/' . $articleData[$index]['coverimage'];
			switch ($articleData[$index]['type1'])
			{
			case 1:
				$articleClassification[$index] = '技术开发';
				break;
			case 2:
				$articleClassification[$index] = '产品设计';
				break;
			case 3:
				$articleClassification[$index] = '金融经济';
				break;
			default:
				$articleClassification[$index] = '其他';
				break;
			}
			
			$Collect = M("Collect");
			$condition['user_id'] = array('eq',session('userId'));
			$condition['article_id'] = array('eq',$articleData[$index]['article_id']);
			$collectData = $Collect->where($condition)->find();
			if($collectData) {
				$articleCollect[$index] = 'article-collection-select';
			} else {
				$articleCollect[$index] = 'article-collection-default';
			}	

			$articleId[$index] = $articleData[$index]['article_id'];
			$articleHref[$index] = U('Content/index', array('type'=>'article','articleId'=>$articleData[$index]['article_id']));
			$articleMaintitle[$index] = $articleData[$index]['maintitle'];
			$articleIntroduction[$index] = $articleData[$index]['article_introduction'];
			$articleReadnum[$index] = $articleData[$index]['readnum'];
			$articleNickname[$index] = $articleData[$index]['nickname'];
			$expertHref[$index] = U('User/index', array('authorId'=>$articleData[$index]['user_id']));
		}

		$this->assign('articleCoverImage',$articleCoverImage);
		$this->assign('articleClassification',$articleClassification);
		$this->assign('articleCollect',$articleCollect);
		$this->assign('articleId',$articleId);
		$this->assign('articleHref',$articleHref);
		$this->assign('articleMaintitle',$articleMaintitle);
		$this->assign('articleIntroduction',$articleIntroduction);
		$this->assign('articleReadnum',$articleReadnum);
		$this->assign('articleNickname',$articleNickname);
		$this->assign('expertHref',$expertHref);
	}
	
	//准备分页
	private function initPage() {
		$Article = D('ArticleView');
		$artCategory = $this->getCategory();
		if ($artCategory != 0) {
			$condition['type1'] = array('eq',$artCategory);
		}
		$articleCount = $Article->where($condition)->count();
		$Page = new \Think\Page($articleCount,10);
		foreach($condition as $key=>$val) {
			$Page->parameter[$key] = urlencode($val);
		}
		$pageShow = $Page->show();
		$this->assign('pageShow',$pageShow);
	}
	
    public function index(){
		$artCategory = $this->getCategory();
		$this->setArtCategory($artCategory);
		$this->initLayout();
		$this->initSpecial();
		$this->initArticle();
		$this->initPage();
        $this->display();
	}
}