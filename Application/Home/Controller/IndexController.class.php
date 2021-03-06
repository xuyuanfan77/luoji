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
	
	//初始化通知
	private function initNotification() {
		$Carouselfigure = M("Carouselfigure");
		$condition['show'] = array('eq','yes');
		$carouselData = $Carouselfigure->where($condition)->order('ordernum asc')->limit(8)->select();
		for ($index=0; $index<count($carouselData); $index++) {
			$carouselImages[$index] = C('__ROOT__') . 'Public/resource/carouselfigure/' . $carouselData[$index]['image'];
			$carouselTitles[$index] = $carouselData[$index]['title'];
			$carouselIndexs[$index] = $carouselData[$index]['ordernum'];
			$carouselHrefs[$index] = $carouselData[$index]['url'];
		}
		$this->assign('carouselImages',$carouselImages);
		$this->assign('carouselTitles',$carouselTitles);
		$this->assign('carouselIndexs',$carouselIndexs);
		$this->assign('carouselHrefs',$carouselHrefs);
	}
	
	//初始化专辑
	private function initSpecial() {
		$Special = M('Special');
		$specialData = $Special->limit(5)->select();
		for ($index=0; $index<count($specialData); $index++) {
			$specialImages[$index] = C('__ROOT__') . 'Public/resource/coverimage/' . $specialData[$index]['coverimage'];
			$specialMaintitles[$index] = $specialData[$index]['maintitle'];
			$specialSubheads[$index] = $specialData[$index]['subhead'];
			$specialHrefs[$index] = U('Album/index', array('specialId'=>$specialData[$index]['id']));
		}
		$this->assign('specialImages',$specialImages);
		$this->assign('specialMaintitles',$specialMaintitles);
		$this->assign('specialSubheads',$specialSubheads);
		$this->assign('specialHrefs',$specialHrefs);
	}
	
	//初始化文章列表
	private function initArticle() {
		$artCategory = $this->getCategory();

		//设置查询分类
		$Category = M("Category");
		$subCategoryData = $Category->where('level=2')->order(array('parent','index'))->select();
		for ($index=0; $index<count($subCategoryData); $index++) {
			$categoryId = $subCategoryData[$index]['id'];
			$parentCategoryId = $subCategoryData[$index]['parent'];
			$mainCategory[$parentCategoryId][$index] = $categoryId;
		}

		if($artCategory == 0){
			
		}elseif($mainCategory[$artCategory]){
			$inCondition = $artCategory. ',';
			foreach ($mainCategory[$artCategory] as $value) {
				$inCondition = $inCondition. $value. ',';
			}
			$condition['categoryid'] = array('in',$inCondition);
		}else{
			$condition['categoryid'] = array('eq',$artCategory);
		}

		$Article = D('ArticleView');
		$pageNum = $this->getPageNum();
		$articleData = $Article->where($condition)->page($pageNum .',10')->select();
		$articleCount = count($articleData);
		for ($index=0; $index<$articleCount; $index++) {
			$articleCoverImage[$index] = C('__ROOT__') . 'Public/resource/minimalimage/' . $articleData[$index]['coverimage'];
			$Category = M("Category");
			$condition['id'] = array('eq',$articleData[$index]['categoryid']);
			$categoryData = $Category->where($condition)->find();
			$articleClassification[$index] = $categoryData['name'];
			
			$Collect = M("Collect");
			$condition['user_id'] = array('eq',session('userId'));
			$condition['article_id'] = array('eq',$articleData[$index]['article_id']);
			$collectData = $Collect->where($condition)->find();
			if($collectData) {
				$articleCollect[$index] = 'collect1';
			} else {
				$articleCollect[$index] = 'collect2';
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
			$condition['categoryid'] = array('eq',$artCategory);
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
		$this->initLayout();
		$this->initNotification();
		$this->initSpecial();
		$this->initArticle();
		$this->initPage();
        $this->display();
	}
	
	//换一批
	public function changeALot() {
		$Special = M('Special');
		$pageNum = $_POST['specialPage'];
		$specialData = $Special->page($pageNum .',5')->select();
		$specialCount = count($specialData);
		$count = ceil($Special->count()/5);
		$nextPage = $pageNum<$count?$pageNum+1:1;
		for ($index=0; $index<$specialCount; $index++) {
			$data[$index]['coverimage'] = C('__ROOT__') . 'Public/resource/coverimage/' . $specialData[$index]['coverimage'];
			$data[$index]['maintitle'] = $specialData[$index]['maintitle'];
			$data[$index]['subhead'] = $specialData[$index]['subhead'];
			$data[$index]['href'] = U('Album/index', array('specialId'=>$specialData[$index]['id']));
		}
		$data['nextPage'] = $nextPage;
		$this->ajaxReturn($data);
	}
}