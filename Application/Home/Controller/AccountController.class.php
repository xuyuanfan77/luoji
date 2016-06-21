<?php
namespace Home\Controller;
use Think\Controller;
header("Content-Type: text/html;charset=utf-8");
class AccountController extends Controller {
	
	// //模型
	// private $Article;
	// private $User;
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
		// $this->User = M('User');
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
	
	public function login(){
		$contents['username'] = $_POST['username'];
		$contents['password'] = $_POST['password'];
		$contents['identifyingcode'] = $_POST['identifyingcode'];
		dump($contents);
	}
	
	public function register(){
		$contents['username'] = $_POST['username'];
		$contents['nickname'] = $_POST['nickname'];
		$contents['password'] = $_POST['password'];
		$contents['confirmpassword'] = $_POST['confirmpassword'];
		$contents['identifyingcode'] = $_POST['identifyingcode'];
		dump($contents);
	}
}