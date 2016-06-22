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
		$this->assign('navigation',$this->navigation);
		
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
	
	public function login(){
		$contents['username'] = $_POST['username'];
		$contents['password'] = $_POST['password'];
		$contents['verify'] = $_POST['verify'];
		dump($contents);
	}
	
	public function register(){
		$this->init();
		
		if (!$this->User->create()){
			// 如果创建失败 表示验证没有通过 输出错误提示信息
			//dump($this->User->getError());
			$this->redirect('Account/index', array('operation' => 1), 0, $this->User->getError());
		}else{
			$result = $this->User->add();
			if($result){
				$this->redirect('Index/index', array('category' => 0, 'p' => 1), 0, '恭喜您！你已经成功注册账号！页面跳转中...');
			}
		}
	}
}