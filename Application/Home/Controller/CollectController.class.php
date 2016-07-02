<?php
namespace Home\Controller;
header("Content-Type: text/html;charset=utf-8");
class CollectController extends LayoutController {
	
	//获取页数
	private function getPageNum() {
		if($_GET['p']) {
			$pageNum = $_GET['p'];
		} else {
			$pageNum = 1;
		}
		return $pageNum;
	}
	
	//初始化文章
	private function initArticle() {
		$Collect = D('CollectView');
		$condition['user_id'] = array('eq',session('userId'));
		$pageNum = $this->getPageNum();
		$articleData = $Collect->where($condition)->page($pageNum .',8')->select();
		$articleCount = count($articleData);
		for ($index=0; $index<$articleCount; $index++) {
			$articleHref[$index] = U('Content/index', array('type'=>'article','articleId'=>$articleData[$index]['article_id']));
			$articleMaintitle[$index] = $articleData[$index]['maintitle'];
			$articleSubhead[$index] = $articleData[$index]['subhead'];
			$collectCreatetime[$index] = $articleData[$index]['collect_createtime'];
		}
		$this->assign('articleHref',$articleHref);
		$this->assign('articleMaintitle',$articleMaintitle);
		$this->assign('articleSubhead',$articleSubhead);
		$this->assign('collectCreatetime',$collectCreatetime);
	}
	
	//初始化页数
	private function initPage() {
		$Collect = D('CollectView');
		$condition['user_id'] = array('eq',session('userId'));
		$articleCount = $Collect->where($condition)->count();
		$Page = new \Think\Page($articleCount,8);
		foreach($condition as $key=>$val) {
			$Page->parameter[$key] = urlencode($val);
		}
		$pageShow = $Page->show();
		$this->assign('pageShow',$pageShow);
	}
	
    public function index(){
		$this->initLayout();
		$this->assign('nickname',session('nickname'));
		$this->initArticle();
		$this->initPage();
        $this->display();
	}
	
	public function collect() {
		$Collect = M("Collect");
		$condition['user_id'] = array('eq',session('userId'));
		$condition['article_id'] = array('eq',$_POST['articleId']);
		$collectData = $Collect->where($condition)->find();
		if($collectData) {
			$result = $Collect->where($condition)->delete();
			if($result){
				$this->ajaxReturn('no');
			} else {
				$this->ajaxReturn('error');
			}
		} else {
			$data['user_id'] = session('userId');
			$data['article_id'] = $_POST['articleId'];
			$data['createtime'] = date('Y-m-d H:i:s');;
			$result = $Collect->add($data);
			if($result){
				$this->ajaxReturn('yes');
			} else {
				$this->ajaxReturn('error');
			}
		}	
	}
}