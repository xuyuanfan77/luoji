<?php
namespace Home\Controller;
use Think\Controller;
header("Content-Type: text/html;charset=utf-8");
class AccountController extends Controller {
	
	//模型
	// private $Article;
	private $User;
	// private $Special;
	
	//输入参数
	private $operation;
	
	//输出参数
	public $navigation;
	
	public $headimage;
	public $accountMenuUrl;
	public $accountMenuText;
	public $loginTab;
	public $registerTab;
	public $loginForm;
	public $registerForm;
	
	protected function init(){
		// $this->Article = D('ArticleView');
		$this->User = D('User');
		// $this->Special = M('Special');
		
		if($_GET['operation']) {
			$this->operation = $_GET['operation'];
		} else {
			$this->operation = 0;
		}
		$this->navigation = array('menu-default','menu-default','menu-default','menu-default','menu-default');
	}
	
    public function index(){
		$this->init();

		//准备菜单栏数据
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
		
		//准备表单数据
		if($this->operation == 0) {
			$this->loginTab = 'tabList-cur';
			$this->registerTab = 'tabList-other';
			$this->loginForm = 'tabCon-cur';
			$this->registerForm = 'tabCon-other';
		} else {
			$this->loginTab = 'tabList-other';
			$this->registerTab = 'tabList-cur';
			$this->loginForm = 'tabCon-other';
			$this->registerForm = 'tabCon-cur';
		}
		
		$this->assign('loginTab',$this->loginTab);
		$this->assign('registerTab',$this->registerTab);
		$this->assign('loginForm',$this->loginForm);
		$this->assign('registerForm',$this->registerForm);
	
        $this->display();
	}
	
	public function verify(){
		//准备验证码
		$Verify = new \Think\Verify();
		$Verify->useImgBg = true;
		$Verify->fontSize = 18;
		$Verify->imageW = 150;
		$Verify->imageH = 39;
		$Verify->length = 4; 
		$Verify->entry();
	}
	
	function check_verify($code, $id = '') {
		$verify = new \Think\Verify();
		return $verify->check($code, $id);
	}
	
	public function login(){
		$contents['username'] = $_POST['username'];
		$contents['password'] = $_POST['password'];
		$contents['verify'] = $_POST['verify'];
		
		$this->init();
		
		if (!$this->check_verify($_POST['verify'])) {
			$this->ajaxReturn('验证码有误！');
		} else {

			$condition['username'] = array('eq',$_POST['username']);
			$userData = $this->User->where($condition)->find();
			if($userData) {
				$password = md5($_POST['password']);
				if($password == $userData['password']) {
					$sessionID = session_id();
					session('id', $sessionID);
					session('userId', $userData['id']); 
					session('headimage', $userData['headimage']);
					$this->ajaxReturn('登录成功！');
				} else {
					$this->ajaxReturn('密码不正确！');
				}
			} else {
				$this->ajaxReturn('不存在此账号！快点注册吧！');
			}
		}
	}
	
	public function register(){
		$this->init();
		
		if (!$this->check_verify($_POST['verify'])) {
			$this->ajaxReturn('验证码有误！');
		} else {
			if (!$this->User->create($_POST)){
				$error = $this->User->getError();
				$this->ajaxReturn($error);
			}else{
				$result = $this->User->add();
				if($result){
					$sessionID = session_id();
					session('id', $sessionID);
					session('userId', $result); 
					session('headimage', 'default.jpg'); 
					$this->ajaxReturn('注册成功！');
				} else {
					$this->ajaxReturn('注册异常！');
				}
			}
		}
	}
	
	public function logout() {
		session('[destroy]');
		$this->redirect('Account/index', array('operation'=>0));
	}
}