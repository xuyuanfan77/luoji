<?php
namespace Home\Controller;
use Think\Controller;
header("Content-Type: text/html;charset=utf-8");
class ContentController extends Controller {
    public function index(){
		//模型
		$Image = M('Image');
		$User = M('User');
		$Album = M('Album');
		
		//输入参数
		$type=$_GET['type'];
		$id=$_GET['id'];

		if($type == 'article') {
			$style = 'hide';
			$this->assign('style',$style);
			$data = $Image->where('mainimage="' . $id . '"')->find();
			$data['imagesrc'] = C('__ROOT__') . 'Public/resource/largerimage/' . $data['mainimage'] . '.jpg';
			$this->assign('article',$data);

			$userData = $User->where('username="' . $data['author'] . '"')->find();
			$this->assign('userData',$userData);
			//dump($userData);
			$this->display();
		} elseif($type == 'articles') {
			$style = 'show';
			$this->assign('style',$style);
			$data = $Image->where('mainimage="' . $id . '"')->find();
			$data['imagesrc'] = C('__ROOT__') . 'Public/resource/largerimage/' . $data['mainimage'] . '.jpg';
			$this->assign('article',$data);

			$userData = $User->where('username="' . $data['author'] . '"')->find();
			$this->assign('userData',$userData);
			//dump($userData);
			$this->display();
		}
		
	}
}