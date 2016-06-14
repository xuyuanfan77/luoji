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
		$Combination = M('Combination');
		
		//输入参数
		$type=$_GET['type'];
		$id=$_GET['id'];

		//准备导航栏数据
		$data = array('menu-default','menu-default','menu-default','menu-default','menu-default');
		$this->assign('navigation',$data);
		
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
			
			$data = $Combination->where('albumid=' . $id)->select();
			$count = count($data);
			for ($index=0; $index<$count; $index++) {
				$article = $Image->where('mainimage="' . $data[$index]['mainimage'] . '"')->find();
				$data[$index] = $article['maintitle'];
			}
			$data['count'] = $count;
			$data['current'] = 0;
			$this->assign('catalog',$data);
			
			$data = $Image->where('mainimage="' . $id . '"')->find();
			$data['imagesrc'] = C('__ROOT__') . 'Public/resource/largerimage/' . $data['mainimage'] . '.jpg';
			$this->assign('article',$data);

			$data = $User->where('username="' . $data['author'] . '"')->find();
			$this->assign('user',$data);
			//dump($userData);
			
			$this->display();
		}
		
	}
}