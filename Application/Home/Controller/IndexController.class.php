<?php
namespace Home\Controller;
use Think\Controller;
header("Content-Type: text/html;charset=utf-8");
class IndexController extends Controller {
	
	//模型
	private $Article;
	private $User;
	private $Special;
	
	//输入参数
	private $pageNum;
	private $artCategory;
	
	//输出参数
	public $navigation = array('menu-default','menu-default','menu-default','menu-default','menu-default');
	
	protected function init(){
		$Article = M('Article');
		$User = M('User');
		$Special = M('Special');
		
		if($_GET['p']) {
			$pageNum = $_GET['p'];
		} else {
			$pageNum = 1;
		}
		if($_GET['category']) {
			$artCategory = $_GET['category'];
		} else {
			$artCategory = 0;
		}
	}
	
    public function index(){
		$this->init();

		//准备菜单栏数据
		$navigation[$artCategory] = 'menu-select';
		$this->assign('navigation',$navigation);
		
		// //准备专辑数据
		// $special = $Special->limit(5)->select();
		// for ($index=0; $index<=4; $index++) {
			// $data[$index]['coverimage'] = C('__ROOT__') . 'Public/' . $data[$index]['coverimage'];			
		// }
		// $this->assign('special',$data);
		
		// //准备文章列表数据
		// if ($articleSort != 0) {
			// $condition['type1'] = array('eq',$articleSort);
		// }
		// $condition['state'] = array('eq',1);
		// $data = $Image->where($condition)->page($pageNum .',10')->select();
		// $index = 0;
		// foreach ($data as $value) {
			// $data[$index]['imagesrc'] = C('__ROOT__') . 'Public/resource/minimalimage/' . $data[$index]['minorimage'] . '.jpg';
			// switch ($data[$index]['type1'])
			// {
			// case 1:
				// $data[$index]['type1'] = '技术开发';
				// break;
			// case 2:
				// $data[$index]['type1'] = '产品设计';
				// break;
			// case 3:
				// $data[$index]['type1'] = '金融经济';
				// break;
			// default:
				// $data[$index]['type1'] = '其他';
				// break;
			// }
			// $userData = $User->where('username="' . $data[$index]['author'] . '"')->find();
			// $data[$index]['nickname'] = $userData['nickname'];
			// $index++;
		// }
		// $this->assign('articles',$data);
		
		// //准备分页数据
		// $count = $Image->where($condition)->count();
		// $Page = new \Think\Page($count,10);
		// foreach($condition as $key=>$val) {
			// $Page->parameter[$key]   =   urlencode($val);
		// }
		// $show = $Page->show();
		// $this->assign('page',$show);
		// //dump($Page);
		
		
		
		// //准备专家数据
		// $data = $User->limit(5)->select();
		// for ($index=0; $index<=4; $index++) {
			// $data[$index]['icon'] = C('__ROOT__') . 'Public/resource/headportrait/' . $data[$index]['icon'];			
		// }
		// $this->assign('user',$data);

        $this->display();
	}
}