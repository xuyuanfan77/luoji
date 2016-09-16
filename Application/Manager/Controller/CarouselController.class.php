<?php
namespace Manager\Controller;
header("Content-Type: text/html;charset=utf-8");
class CarouselController extends LayoutController {
    public function index(){
		if(cookie('PHPSESSID') && session('admin_id') && cookie('PHPSESSID') == session('admin_id')) {
			$this->initLayout("carousel");

			if($_GET['p']) {
				$pageNum = $_GET['p'];
			} else {
				$pageNum = 1;
			}
			$Carousel = M('Carouselfigure');
			$carouselData = $Carousel->page($pageNum .',10')->select();
			$this->assign('carouselData',$carouselData);

			$count = $Carousel->count();
			$Page = new \Think\Page($count,10);
			$pageShow = $Page->show();
			$this->assign('pageShow',$pageShow);
			
			$this->display();
		} else {
			$this->redirect('Account/index');
		}
	}
	
	public function del(){
		$Carousel = M('Carouselfigure');
		$condition['id'] = array('eq',$_GET['id']);
		$Carousel->where($condition)->delete(); 
		
		$files = glob("./Public/resource/carouselfigure/".$_GET['id'].".*");
		unlink($files[0]);
		$this->redirect('Carousel/index');
	}
}