<?php
namespace Home\Widget;
use Think\Controller;
header("Content-Type: text/html;charset=utf-8");
class ExpertsWidget extends Controller {

    public function index(){
		$User = M('User');
		$expertData = $User->order('rank desc')->limit(5)->select();
		
		for ($index=0; $index<count($expertData); $index++) {
			$expertImage[$index] = C('__ROOT__') . 'Public/resource/headportrait/' . $expertData[$index]['headimage'];	
			$expertNickname[$index] = $expertData[$index]['nickname'];
			$expertJobs[$index] = $expertData[$index]['jobs'];
			$expertCompany[$index] = $expertData[$index]['company'];
			$expertHref[$index] = U('User/index', array('authorId'=>$expertData[$index]['id']));
		}
		$this->assign('expertImage',$expertImage);
		$this->assign('expertNickname',$expertNickname);
		$this->assign('expertJobs',$expertJobs);
		$this->assign('expertCompany',$expertCompany);
		$this->assign('expertHref',$expertHref);
			
		$this->display('Experts:index');
	}
}