<?php
namespace Home\Widget;
use Think\Controller;
header("Content-Type: text/html;charset=utf-8");
class ExpertsWidget extends Controller {

    public function index(){
		$User = M('User');
		$expertData = $User->order('rank desc')->limit(5)->select();
		
		for ($index=0; $index<=4; $index++) {
			$expertImage[$index] = C('__ROOT__') . 'Public/resource/headportrait/' . $expertData[$index]['headimage'];	
			$expertNickname[$index] = $expertData[$index]['nickname'];
			$expertJobs[$index] = $expertData[$index]['jobs'];
			$expertCompany[$index] = $expertData[$index]['company'];			
		}
		$this->assign('expertImage',$expertImage);
		$this->assign('expertNickname',$expertNickname);
		$this->assign('expertJobs',$expertJobs);
		$this->assign('expertCompany',$expertCompany);
			
		$this->display('Experts:index');
	}
}