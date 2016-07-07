<?php
namespace Home\Widget;
use Think\Controller;
header("Content-Type: text/html;charset=utf-8");
class SpecialWidget extends Controller {

    public function index(){
		$Special = M('Special');
		$specialData = $Special->order('readnum desc')->limit(5)->select();
		
		for ($index=0; $index<=2; $index++) {
			$specialImage[$index] = C('__ROOT__') . 'Public/resource/coverimage/' . $specialData[$index]['coverimage'];	
			$specialMaintitle[$index] = $specialData[$index]['maintitle'];	
			$specialSubhead[$index] = $specialData[$index]['subhead'];	
		}
		$this->assign('specialImage',$specialImage);
		$this->assign('specialMaintitle',$specialMaintitle);
		$this->assign('specialSubhead',$specialSubhead);
			
		$this->display('Special:index');
	}
}