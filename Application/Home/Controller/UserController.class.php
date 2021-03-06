<?php
namespace Home\Controller;
header("Content-Type: text/html;charset=utf-8");
class UserController extends LayoutController {
	private $title;
	//获取页数
	private function getPageNum() {
		if($_GET['p']) {
			$pageNum = $_GET['p'];
		} else {
			$pageNum = 1;
		}
		return $pageNum;
	}
	
	//获取作者
	private function getAuthorId() {
		if($_GET['authorId']) {
			$authorId = $_GET['authorId'];
		} else {
			$authorId = 2;
		}
		return $authorId;
	}
	
	//初始化作者
	private function initAuthor() {
		$User = M('User');
		$authorId = $this->getAuthorId();
		$condition['id'] = array('eq',$authorId);
		$userData = $User->where($condition)->find();
		$user['headimage'] = C('__ROOT__') . 'Public/resource/headportrait/' . $userData['headimage'];
		$user['nickname'] = $userData['nickname'];
		$user['rank'] = $userData['rank'];
		$user['jobs'] = $userData['jobs'];
		$user['company'] = $userData['company'];
		$user['introduction'] = $userData['introduction'];
		$this->title = $user['nickname'];
		$this->assign('user',$user);
	}
	
	//初始化文章
	private function initArticle() {
		$Article = M('Article');
		$authorId = $this->getAuthorId();
		$condition['author'] = array('eq',$authorId);
		$pageNum = $this->getPageNum();
		$articleData = $Article->where($condition)->page($pageNum .',8')->select();
		$articleCount = count($articleData);
		$articleTotalReadnum = 0;
		for ($index=0; $index<$articleCount; $index++) {
			$articleCoverImage[$index] = C('__ROOT__') . 'Public/resource/minimalimage/' . $articleData[$index]['coverimage'];
			$Category = M("Category");
			$condition['id'] = array('eq',$articleData[$index]['categoryid']);
			$categoryData = $Category->where($condition)->find();
			$articleClassification[$index] = $categoryData['name'];
			$articleHref[$index] = U('Content/index', array('type'=>'article','articleId'=>$articleData[$index]['id']));
			$articleMaintitle[$index] = $articleData[$index]['maintitle'];
			$articleIntroduction[$index] = $articleData[$index]['introduction'];
			$articleReadnum[$index] = $articleData[$index]['readnum'];
			$articleTotalReadnum = $articleTotalReadnum + $articleData[$index]['readnum'];
		}
		$this->assign('articleCoverImage',$articleCoverImage);
		$this->assign('articleClassification',$articleClassification);
		$this->assign('articleHref',$articleHref);
		$this->assign('articleMaintitle',$articleMaintitle);
		$this->assign('articleIntroduction',$articleIntroduction);
		$this->assign('articleReadnum',$articleReadnum);
		$this->assign('articleTotalReadnum',$articleTotalReadnum);
		$this->assign('articleCount',$articleCount);
	}
	
	//初始化页数
	private function initPage() {
		$Article = D('ArticleView');
		$authorId = $this->getAuthorId();
		$condition['user_id'] = array('eq',$authorId);
		$articleCount = $Article->where($condition)->count();
		$Page = new \Think\Page($articleCount,8);
		foreach($condition as $key=>$val) {
			$Page->parameter[$key] = urlencode($val);
		}
		$pageShow = $Page->show();
		$this->assign('pageShow',$pageShow);
	}
	
    public function index(){
		$this->initAuthor();
		$this->initArticle();
		$this->initPage();
		$this->initLayout($this->title);
        $this->display();
	}
}