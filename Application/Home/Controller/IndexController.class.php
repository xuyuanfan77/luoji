<?php
namespace Home\Controller;
use Think\Controller;
header("Content-Type: text/html;charset=utf-8");
class IndexController extends Controller {
    public function index(){		
		//模型
		$Image = M('Image');
		$User = M('User');
		$Album = M('Album');
		
		//输入参数
		if($_GET['p']) {
			$pageNum = $_GET['p'];
		} else {
			$pageNum = 1;
		}
		if($_GET['sort']) {
			$articleSort = $_GET['sort'];
		} else {
			$articleSort = 1;
		}
		
		//输出参数
		$data = array();
		
		
		//注备导航栏数据
		$data = array('menu-default','menu-default','menu-default','menu-default','menu-default');
		switch ($articleSort)
		{
			case 1:
				$data[0] = 'menu-select';
				break;
			case 2:
				$data[1] = 'menu-select';
				break;
			case 3:
				$data[2] = 'menu-select';
				break;
			case 4:
				$data[3] = 'menu-select';
				break;
			default:
				$data[4] = 'menu-select';
				break;
		}
		$this->assign('articleSort',$data);
		
		
		//准备文章列表数据
		$map['type1'] = array('eq',$articleSort);
		$map['state'] = array('eq',1);
		$data = $Image->where($map)->page($pageNum .',10')->select();
		$x = 0;
		foreach ($data as $value) {
			$data[$x]['imagesrc'] = C('__ROOT__') . 'Public/resource/minimalimage/' . $data[$x]['minorimage'] . '.jpg';
			switch ($data[$x]['type1'])
			{
			case 1:
				$data[$x]['type1'] = '技术开发';
				break;
			case 2:
				$data[$x]['type1'] = '产品设计';
				break;
			case 3:
				$data[$x]['type1'] = '金融经济';
				break;
			default:
				$data[$x]['type1'] = '其他';
				break;
			}
			$userData = $User->where('username="' . $data[$x]['author'] . '"')->find();
			$data[$x]['nickname'] = $userData['nickname'];
			$x++;
		}
		$this->assign('article',$data);
		
		//生成分页代码
		$count = $Image->where($map)->count();
		$Page = new \Think\Page($count,10);
		
		foreach($map as $key=>$val) {
			$Page->parameter[$key]   =   urlencode($val);
		}


		$show = $Page->show();
		$this->assign('page',$show);
		//dump($Page);
		
		//准备专辑数据
		$data = $Album->limit(5)->select();
		for ($x=0; $x<=4; $x++) {
			$data[$x]['coverimage'] = C('__ROOT__') . 'Public/' . $data[$x]['coverimage'];			
		}
		$this->assign('album',$data);
		
		//准备专家数据
		$data = $User->limit(5)->select();
		for ($x=0; $x<=4; $x++) {
			$data[$x]['icon'] = C('__ROOT__') . 'Public/resource/headportrait/' . $data[$x]['icon'];			
		}
		$this->assign('user',$data);
		
		$parameter = array(
			'menu' => array(
				'class' => array('menu-default','menu-default','menu-default','menu-default','menu-default'),
			)
		);

        $this->display();
	}
}