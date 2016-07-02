<?php
namespace Home\Controller;
header("Content-Type: text/html;charset=utf-8");
class InformationController extends LayoutController {
	
    public function index(){
		$this->initLayout();
		
		//准备个人信息数据
		$User = M('User');
		$condition['id'] = array('eq',session('userId'));
		$userData = $User->where($condition)->find();
		if($userData) {
			$nickname = $userData['nickname'];
			$email = $userData['email'];
			$jobs = $userData['jobs'];
			$company = $userData['company'];
			$introduction = $userData['introduction'];
		} else {
			$this->redirect('Account/index', array('operation'=>0));
		}
		$this->assign('nickname',$nickname);
		$this->assign('email',$email);
		$this->assign('jobs',$jobs);
		$this->assign('company',$company);
		$this->assign('introduction',$introduction);

        $this->display();
	}
	
	//数据检验
	private function validate($data) {
		$tips = array();		
		if(isset($data['nickname'])){
			if (!preg_match('/^[\x{4e00}-\x{9fa5}a-zA-Z0-9]{1,20}$/u', $data['nickname'])){
				$tips['nickname'] = '昵称需1-20位字符，支持字母、数字和中文';
			}
		}
		
		if(isset($data['password'])){
			if (!preg_match('/^[A-Za-z0-9\@\!\#\$\%\^\&\*\.\~]{4,20}$/', $data['password'])){
				$tips['password'] = '密码需4-20位字符，支持字母、数字和标点符号';
			}
		}
		
		if(isset($data['repassword'])){
			if ($data['repassword'] != $data['password']){
				$tips['repassword'] = '两次输入密码不一致';
			}
		}
		
		if(isset($data['email'])){
			if (!preg_match('/^([a-z0-9]+([._\\-]*[a-z0-9])*@([a-z0-9]+[-a-z0-9]*[a-z0-9]+.){1,63}[a-z0-9]+)?$/', $data['email'])){
				$tips['email'] = '请输入正确的邮箱格式';
			}
		}
		
		if(isset($data['jobs'])){
			if (!preg_match('/^[\x{4e00}-\x{9fa5}a-zA-Z]{0,10}$/u', $data['jobs'])){
				$tips['jobs'] = '岗位需0-10位字符，支持字母和中文';
			}
		}
		
		if(isset($data['company'])){
			if (!preg_match('/^[\x{4e00}-\x{9fa5}a-zA-Z]{0,20}$/u', $data['company'])){
				$tips['company'] = '单位需0-20位字符，支持字母和中文';
			}
		}
		
		if(isset($data['introduction'])){
			if (!preg_match('/^[\s\S]{0,250}$/u', $data['introduction'])){
				$tips['introduction'] = '介绍需0-250位字符';
			}
		}
		
		return $tips;
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
	
	//更新信息
	public function update(){
		$result = true;
		
		$postData = $_POST;
		if(!$postData['password'] && !$postData['repassword']){
			unset($postData['password']); 
			unset($postData['repassword']);
		}
		$tips = $this->validate($postData);
		if(count($tips)==0){
			if($postData['password']){
				$postData['password'] = md5($postData['password']);
			}
			$User = D("User");
			$condition['id'] = array('eq',session('userId'));
			$User-> where($condition)->setField($postData);
			if(isset($postData['nickname'])){
				session('nickname',$postData['nickname']);
			}
		} else {
			$result = false;
		}

		if ($_FILES["headimage"]["error"] <= 0)
		{
			$upload = new \Think\Upload();											// 实例化上传类
			$upload->maxSize	= 3145728;											// 设置附件上传大小
			$upload->exts		= array('jpg', 'gif', 'png', 'jpeg');				// 设置附件上传类型
			$upload->rootPath	= './Public/resource/headportrait/';				// 设置附件上传根目录
			$upload->autoSub	= false;
			$upload->replace 	= true;
			$upload->saveName	= session('userId');
			$info = $upload->upload();
			if($info) {
				$fileName = session('userId').'.'.pathinfo($_FILES["headimage"]["name"],PATHINFO_EXTENSION);
				session('headimage',$fileName);
				$User = D("User");
				$condition['id'] = array('eq',session('userId'));
				$User-> where($condition)->setField('headimage',$fileName);
			} else {
				$tips['headimage'] = '上传头像失败';
				$result = false;
			}
		}

		if($result)	{
			$this->redirect('Information/index');
		} else {
			$this->alert($tips, U('Information/index'));
		}
	}
}