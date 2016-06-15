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
		$num = array('一、', '二、', '三、', '四、', '五、', '六、', '七、', '八、', '九、', '十、');
		$type = $_GET['type'];
		$albumid = $_GET['albumid'];
		$id = $_GET['id'];

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
			$this->assign('user',$userData);
			//dump($userData);
			$this->display();
		} elseif($type == 'articles') {
			$style = 'show';
			$this->assign('style',$style);
			
			$combination = $Combination->where('albumid=' . $albumid)->select();
			$count = count($combination);
			$data = array();
			for ($index=0; $index<$count; $index++) {
				$article = $Image->where('mainimage="' . $combination[$index]['mainimage'] . '"')->find();
				$data[$index] = $num[$index] . mb_substr($article['maintitle'],0,13,'utf-8') . '…';
			}
			$data['count'] = $count;
			$data['current'] = $id;
			$data['albumid'] = $albumid;
			$this->assign('catalog',$data);
			
			$id = $combination[$id]['mainimage'];
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