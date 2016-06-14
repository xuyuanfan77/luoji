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
			$articleSort = 0;
		}
		
		//输出参数
		
		
		
		//准备导航栏数据
		$data = array('menu-default','menu-default','menu-default','menu-default','menu-default');
		switch ($articleSort)
		{
			case 0:
				$data[0] = 'menu-select';
				break;
			case 1:
				$data[1] = 'menu-select';
				break;
			case 2:
				$data[2] = 'menu-select';
				break;
			case 3:
				$data[3] = 'menu-select';
				break;
			default:
				$data[4] = 'menu-select';
				break;
		}
		$this->assign('navigation',$data);
		
		
		//准备文章列表数据
		if ($articleSort != 0) {
			$condition['type1'] = array('eq',$articleSort);
		}
		$condition['state'] = array('eq',1);
		$data = $Image->where($condition)->page($pageNum .',10')->select();
		$index = 0;
		foreach ($data as $value) {
			$data[$index]['imagesrc'] = C('__ROOT__') . 'Public/resource/minimalimage/' . $data[$index]['minorimage'] . '.jpg';
			switch ($data[$index]['type1'])
			{
			case 1:
				$data[$index]['type1'] = '技术开发';
				break;
			case 2:
				$data[$index]['type1'] = '产品设计';
				break;
			case 3:
				$data[$index]['type1'] = '金融经济';
				break;
			default:
				$data[$index]['type1'] = '其他';
				break;
			}
			$userData = $User->where('username="' . $data[$index]['author'] . '"')->find();
			$data[$index]['nickname'] = $userData['nickname'];
			$index++;
		}
		$this->assign('articles',$data);
		
		//准备分页数据
		$count = $Image->where($condition)->count();
		$Page = new \Think\Page($count,10);
		foreach($condition as $key=>$val) {
			$Page->parameter[$key]   =   urlencode($val);
		}
		$show = $Page->show();
		$this->assign('page',$show);
		//dump($Page);
		
		//准备专辑数据
		$data = $Album->limit(5)->select();
		for ($index=0; $index<=4; $index++) {
			$data[$index]['coverimage'] = C('__ROOT__') . 'Public/' . $data[$index]['coverimage'];			
		}
		$this->assign('special',$data);
		
		//准备专家数据
		$data = $User->limit(5)->select();
		for ($index=0; $index<=4; $index++) {
			$data[$index]['icon'] = C('__ROOT__') . 'Public/resource/headportrait/' . $data[$index]['icon'];			
		}
		$this->assign('user',$data);

        $this->display();
	}
}