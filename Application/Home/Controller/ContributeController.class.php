<?php
namespace Home\Controller;
header("Content-Type: text/html;charset=utf-8");
class ContributeController extends LayoutController {
	
    public function index(){
		$this->initLayout();
		
		//准备个人信息数据
		$User = M('User');
		$condition['id'] = array('eq',session('userId'));
		$userData = $User->where($condition)->find();
		if($userData) {
			$nickname = $userData['nickname'];
		} else {
			$this->redirect('Account/index', array('operation'=>0));
		}
		$this->assign('nickname',$nickname);

        $this->display();
	}
	
	//提示弹框
	private function alert($tips, $url) {
		$scriptCode = '<script>alert("';
		$index = 1;
		foreach ($tips as $tip) {
		  $scriptCode = $scriptCode . $index . '、' . $tip . '\\n';
		  $index = $index+1;
		}
		$scriptCode = $scriptCode . '");location.href="' . $url . '";</script>';
		echo $scriptCode;
	}
	
	//文章投稿
	public function contribute(){
		
		$postData = $_POST;
		$postData['author'] = session('userId');
		$Manuscript = D('Manuscript');
		if(!$Manuscript->create($postData)){
			$tips['error'] = $Manuscript->getError();
			$this->alert($tips, U('Contribute/index'));
			return;
		}
		$manuscriptId = $Manuscript->add();
		if(!$manuscriptId){
			$tips['error'] = '数据写入异常';
			$this->alert($tips, U('Contribute/index'));
			return;
		}
			
		if($_FILES["mainimage"]["error"] <= 0)
		{
			$upload = new \Think\Upload();											// 实例化上传类
			$upload->maxSize	= 3145728;											// 设置附件上传大小
			$upload->exts		= array('jpg', 'gif', 'png', 'jpeg');				// 设置附件上传类型
			$upload->rootPath	= './Public/resource/manuscriptimage/';				// 设置附件上传根目录
			$upload->autoSub	= false;
			$upload->replace 	= true;
			$upload->saveName	= $manuscriptId;
			$info = $upload->upload();
			if($info) {
				$fileName = $manuscriptId.'.'.pathinfo($_FILES["mainimage"]["name"],PATHINFO_EXTENSION);
				$Manuscript = D("Manuscript");
				$condition['id'] = array('eq',$manuscriptId);
				$Manuscript-> where($condition)->setField('mainimage',$fileName);
				$this->redirect('Collect/index');
				return;
			}
		}
		
		$Manuscript = D("Manuscript");
		$condition['id'] = array('eq',$manuscriptId);
		$Manuscript->where($condition)->delete();
		$tips['error'] = '逻辑图上传失败';
		$this->alert($tips, U('Contribute/index'));
	}

	//初始化文章
	private function initArticle() {
		$this->assign('artListDisplay','hide');

		$articleMaintitle = $_POST['maintitle'];
		$articleSubhead = $_POST['subhead'];
		$articleIntroduction = $_POST['introduction'];
		if($_FILES["mainimage"]["error"] <= 0)
		{
			$upload = new \Think\Upload();											// 实例化上传类
			$upload->maxSize	= 3145728;											// 设置附件上传大小
			$upload->exts		= array('jpg', 'gif', 'png', 'jpeg');				// 设置附件上传类型
			$upload->rootPath	= './Public/resource/previewimage/';				// 设置附件上传根目录
			$upload->autoSub	= false;
			$upload->replace 	= true;
			$upload->saveName	= session('userId');
			$info = $upload->upload();
			if($info) {
				$fileName = session('userId').'.'.pathinfo($_FILES["mainimage"]["name"],PATHINFO_EXTENSION);
				$articleImage = C('__ROOT__') . 'Public/resource/previewimage/' . $fileName;
			}
		}

		$this->assign('articleMaintitle',$articleMaintitle);
		$this->assign('articleSubhead',$articleSubhead);
		$this->assign('articleIntroduction',$articleIntroduction);
		$this->assign('articleImage',$articleImage);
		
	}
	
	//初始化作者
	private function initExpert() {
		$UserView = M('User');
		$condition['id'] = array('eq',session('userId'));
		$userData = $UserView->where($condition)->find();
		
		$expertImage = C('__ROOT__') . 'Public/resource/headportrait/' . $userData['headimage'];
		$expertNickname = $userData['nickname'];
		$expertJobs = $userData['jobs'];
		$expertCompany = $userData['company'];
		$expertIntroduction = $userData['introduction'];
		$expertHref = U('User/index', array('authorId'=>$userData['id']));
		
		$this->assign('expertImage',$expertImage);
		$this->assign('expertNickname',$expertNickname);
		$this->assign('expertJobs',$expertJobs);
		$this->assign('expertCompany',$expertCompany);
		$this->assign('expertIntroduction',$expertIntroduction);
		$this->assign('expertHref',$expertHref);
	}
	
	//文章预览
	public function preview(){
		$this->initLayout();
		$this->initArticle();
		$this->initExpert();
		$this->display('Content:index');
	}
}