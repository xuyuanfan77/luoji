<?php
namespace Home\Controller;
header("Content-Type: text/html;charset=utf-8");
class AccountController extends LayoutController {

	//获取操作类型
	private function getOperation(){
		if($_GET['operation']) {
			$operation = $_GET['operation'];
		} else {
			$operation = 0;
		}
		return $operation;
	}
	
    public function index(){
		if(cookie('PHPSESSID') && session('id') && cookie('PHPSESSID') == session('id')) {
			$this->redirect('Contribute/index');
		} else {
			$this->initLayout();
			
			//准备表单数据
			$operation = $this->getOperation();
			if($operation == 0) {
				$loginTab = 'tabList-cur';
				$registerTab = 'tabList-other';
				$loginForm = 'tabCon-cur';
				$registerForm = 'tabCon-other';
			} else {
				$loginTab = 'tabList-other';
				$registerTab = 'tabList-cur';
				$loginForm = 'tabCon-other';
				$registerForm = 'tabCon-cur';
			}
			
			$this->assign('loginTab',$loginTab);
			$this->assign('registerTab',$registerTab);
			$this->assign('loginForm',$loginForm);
			$this->assign('registerForm',$registerForm);
		
			$this->display();
		}
	}
	
	//刷新验证码
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
	
	//检验验证码
	private function check_verify($code, $id = '') {
		$verify = new \Think\Verify();
		return $verify->check($code, $id);
	}
	
	//登录账号
	public function login(){
		$contents['username'] = $_POST['username'];
		$contents['password'] = $_POST['password'];
		$contents['verify'] = $_POST['verify'];

		if (!$this->check_verify($_POST['verify'])) {
			$this->ajaxReturn('验证码有误！');
		} else {
			$User = D('User');
			$condition['username'] = array('eq',$_POST['username']);
			$userData = $User->where($condition)->find();
			if($userData) {
				$password = md5($_POST['password']);
				if($password == $userData['password']) {
					$sessionID = session_id();
					session('id', $sessionID);
					session('userId', $userData['id']); 
					session('headimage', $userData['headimage']);
					session('nickname', $userData['nickname']);	
					$this->ajaxReturn('登录成功！');
				} else {
					$this->ajaxReturn('密码不正确！');
				}
			} else {
				$this->ajaxReturn('不存在此账号！快点注册吧！');
			}
		}
	}
	
	//注册账号
	public function register(){
		if (!$this->check_verify($_POST['verify'])) {
			$this->ajaxReturn('验证码有误！');
		} else {
			$User = D('User');
			if (!$User->create($_POST)){
				$error = $User->getError();
				$this->ajaxReturn($error);
			}else{
				$userId = $User->add();
				if($userId){
					$sessionID = session_id();
					session('id', $sessionID);
					session('userId', $userId); 
					session('headimage', 'default.jpg');
					session('nickname', $_POST['nickname']);					
					$this->ajaxReturn('注册成功！');
				} else {
					$this->ajaxReturn('注册异常！');
				}
			}
		}
	}
	
	//注销账号
	public function logout() {
		session('[destroy]');
		$this->redirect('Account/index', array('operation'=>0));
	}
}