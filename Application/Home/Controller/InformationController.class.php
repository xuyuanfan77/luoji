<?php
namespace Home\Controller;
use Think\Controller;
header("Content-Type: text/html;charset=utf-8");
class InformationController extends Controller {
	
	//模型
	private $Article;
	private $User;
	private $Special;
	
	//输入参数
	
	//输出参数
	public $navigation;
	public $headimage;
	public $accountMenuUrl;
	public $accountMenuText;
	
	public $nickname;
	public $email;
	public $jobs;
	public $company;
	public $introduction;
	
	public $formstatus;
	
	protected function init(){
		// $this->Article = D('ArticleView');
		$this->User = M('User');
		// $this->Special = M('Special');
		
		// if($_GET['p']) {
			// $this->pageNum = $_GET['p'];
		// } else {
			// $this->pageNum = 1;
		// }
		// if($_GET['category']) {
			// $this->artCategory = $_GET['category'];
		// } else {
			// $this->artCategory = 0;
		// }
		$this->navigation = array('menu-default','menu-default','menu-default','menu-default','menu-default');
	}
	
    public function index(){
		$this->init();

		//准备菜单栏数据
		//dump($this->navigation);
		if(cookie('PHPSESSID') and session('id') and cookie('PHPSESSID') == session('id')) {
			$this->headimage = C('__ROOT__') . 'Public/resource/headportrait/' .session('headimage');
			$this->accountMenuText[0] = '我要投稿';
			$this->accountMenuText[1] = '我的收藏';
			$this->accountMenuText[2] = '我的投稿';
			$this->accountMenuText[3] = '个人信息';
			$this->accountMenuText[4] = '退 出';
			$this->accountMenuUrl[0] = '';
			$this->accountMenuUrl[1] = '';
			$this->accountMenuUrl[2] = '';
			$this->accountMenuUrl[3] = U('Information/index');
			$this->accountMenuUrl[4] = U('Account/logout');
		} else {
			$this->headimage = C('__ROOT__') . 'Public/picture/' .'login.jpg';
			$this->accountMenuText[0] = '登 陆';
			$this->accountMenuText[1] = '注 册';
			$this->accountMenuUrl[0] = U('Account/index', array('operation'=>0));
			$this->accountMenuUrl[1] = U('Account/index', array('operation'=>1));
		}
		$this->assign('navigation',$this->navigation);
		$this->assign('headimage',$this->headimage);
		$this->assign('accountMenuText',$this->accountMenuText);
		$this->assign('accountMenuUrl',$this->accountMenuUrl);
		
		//准备个人信息数据
		$condition['id'] = array('eq',session('userId'));
		$userData = $this->User->where($condition)->find();
		if($userData) {
			$this->nickname = $userData['nickname'];
			$this->email = $userData['email'];
			$this->jobs = $userData['jobs'];
			$this->company = $userData['company'];
			$this->introduction = $userData['introduction'];
		} else {
			$this->redirect('Account/index', array('operation'=>0));
		}
		$this->assign('nickname',$this->nickname);
		$this->assign('email',$this->email);
		$this->assign('jobs',$this->jobs);
		$this->assign('company',$this->company);
		$this->assign('introduction',$this->introduction);
		
		$this->formstatus = true;
		$this->assign('formstatus',$this->formstatus);

        $this->display();
	}
	
	public function update(){		
		// $User = D("User");
		// if (!$User->create()){
				// $error = $User->getError();
				// $this->ajaxReturn($error);
		// }else{
			// $condition['id'] = array('eq',session('userId'));
			// $result = $User->where($condition)->save();
			// if($result){ 
				// $this->ajaxReturn('更新成功！');
			// } else {
				// $this->ajaxReturn('更新异常！');
			// }
		// }
		dump($_POST);
		$fileName = session('headimage');
		if(session('headimage') == 'default.jpg'){
			$fileName = session('userId').'.jpg';
		}
		$upload = new \Think\Upload();			// 实例化上传类
		$upload->maxSize	= 3145728 ;			// 设置附件上传大小
		$upload->exts		= array('jpg', 'gif', 'png', 'jpeg');				// 设置附件上传类型
		$upload->rootPath	=  	'./Public/resource/headportrait/';// 设置附件上传根目录
		$upload->autoSub	= false;
		$upload->saveName	= $fileName;
		// 上传文件 
		$info	= $upload->upload();
		if(!$info) {							// 上传错误提示错误信息
			$this->error($upload->getError());
		}else{									// 上传成功
			$this->success('上传成功！');
		}
	}
	
	public function upload(){
		// $fileName = session('headimage');
		// if(session('headimage') == 'default.jpg'){
			// $fileName = session('userId').'.jpg';
		// }
		// $filePath = 'D:\wamp\www\luoji\Public\resource\headportrait\\';
		// if(move_uploaded_file($_FILES['imageInput']['tmp_name'], $filePath.$fileName)){
			// session('headimage',$fileName);
			// $User = D('User');
			// $data['id'] = session('userId');
			// $data['headimage'] = $fileName;
			// $User->create($data);
			// $res = $User->save();
			// if($res){
				// $result = "上传成功！";
			// } else {
				// $result = "上传头像失败！";
			// }
		// }else{
			// $result = "上传头像失败！";
		// }
		// echo json_encode($result);
	}
}