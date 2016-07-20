<?php
namespace Home\Controller;
header("Content-Type: text/html;charset=utf-8");
class ManuscriptController extends LayoutController {
	
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
	private function initManuscript() {
		$Manuscript = M('Manuscript');
		$condition['author'] = array('eq',session('userId'));
		$pageNum = $this->getPageNum();
		$manuscriptData = $Manuscript->where($condition)->page($pageNum .',8')->select();
		$manuscriptCount = count($manuscriptData);
		for ($index=0; $index<$manuscriptCount; $index++) {
			$manuscriptMaintitle[$index] = $manuscriptData[$index]['maintitle'];
			$manuscriptHref[$index] = U('Content/index', array('type'=>'manuscript','articleId'=>$manuscriptData[$index]['id']));
			switch ($manuscriptData[$index]['status'])
			{
			case 0:
				$manuscriptStatus[$index] = '待审核';
				$manuscriptStatusStyl[$index] = 'pending-audit';
				break;  
			case 1:
				$manuscriptStatus[$index] = '已通过';
				$manuscriptStatusStyl[$index] = 'already-passed';
				break;
			case 2:
				$manuscriptStatus[$index] = '未通过';
				$manuscriptStatusStyl[$index] = 'not-through';
				break;
			default:
				$manuscriptStatus[$index] = '待审核';
				$manuscriptStatusStyl[$index] = 'pending-audit';
			}
			$manuscriptCreatetime[$index] = $manuscriptData[$index]['createtime'];
			$manuscriptDelHref[$index] = U('Manuscript/cancel', array('articleId'=>$manuscriptData[$index]['id']));
		}
		$this->assign('manuscriptDelHref',$manuscriptDelHref);
		$this->assign('manuscriptMaintitle',$manuscriptMaintitle);
		$this->assign('manuscriptHref',$manuscriptHref);
		$this->assign('manuscriptStatus',$manuscriptStatus);
		$this->assign('manuscriptStatusStyl',$manuscriptStatusStyl);
		$this->assign('manuscriptCreatetime',$manuscriptCreatetime);
	}
	
	//初始化页数
	private function initPage() {
		$Manuscript = M('Manuscript');
		$condition['author'] = array('eq',session('userId'));
		$manuscriptCount = $Manuscript->where($condition)->count();
		$Page = new \Think\Page($manuscriptCount,8);
		foreach($condition as $key=>$val) {
			$Page->parameter[$key] = urlencode($val);
		}
		$pageShow = $Page->show();
		$this->assign('pageShow',$pageShow);
	}
	
    public function index(){
		$this->initLayout();
		$this->assign('nickname',session('nickname'));
		$this->initManuscript();
		$this->initPage();
        $this->display();
	}
	
	public function cancel(){
		$Manuscript = M('Manuscript');
		$condition['id'] = array('eq',$_GET['articleId']);
		$mainimage = $Manuscript->where($condition)->getField('mainimage');
		$file = './Public/resource/manuscriptimage/' . $mainimage;
		$result = $Manuscript->delete($_GET['articleId']);
		if($result){
			unlink($file);
			$this->redirect('Manuscript/index');
		}else{
			$scriptCode = '<script>alert("删除失败！");</script>';
			echo $scriptCode;
		}
	}
}