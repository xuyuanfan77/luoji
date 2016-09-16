<?php
namespace Manager\Controller;
header("Content-Type: text/html;charset=utf-8");
class CarouselformController extends LayoutController {
    public function index(){
		if(cookie('PHPSESSID') && session('admin_id') && cookie('PHPSESSID') == session('admin_id')) {
			$this->initLayout("carousel");
			if($_GET['id']){
				$Carousel = M('carouselfigure');
				$condition['id'] = array('eq',$_GET['id']);
				$carouselData = $Carousel->where($condition)->find();
				if($carouselData) {
					$this->assign('carouselData',$carouselData);
				}
			}
			$this->display();
		} else {
			$this->redirect('Account/index');
		}
	}
	
	public function save(){
		if($_POST['id']){
			$Carousel = M('carouselfigure');
			$Carousel->create();
			$Carousel->save();
			$carouselId = $_POST['id'];
			
			if($_FILES["image"]["error"] <= 0)
			{
				$upload = new \Think\Upload();											// 实例化上传类
				$upload->maxSize	= 3145728;											// 设置附件上传大小
				$upload->exts		= array('jpg', 'gif', 'png', 'jpeg');				// 设置附件上传类型
				$upload->rootPath	= './Public/resource/carouselfigure/';				// 设置附件上传根目录
				$upload->autoSub	= false;
				$upload->replace 	= true;
				$upload->saveName	= $carouselId;
				$info = $upload->upload();
			}
		}else{
			$postData = $_POST;
			$Carousel = M('carouselfigure');
			$Carousel->create($postData);
			$carouselId = $Carousel->add();

			if($_FILES["image"]["error"] <= 0)
			{
				$upload = new \Think\Upload();											// 实例化上传类
				$upload->maxSize	= 3145728;											// 设置附件上传大小
				$upload->exts		= array('jpg', 'gif', 'png', 'jpeg');				// 设置附件上传类型
				$upload->rootPath	= './Public/resource/carouselfigure/';				// 设置附件上传根目录
				$upload->autoSub	= false;
				$upload->replace 	= true;
				$upload->saveName	= $carouselId;
				$info = $upload->upload();
				if($info) {
					$fileName = $carouselId.'.'.pathinfo($_FILES["image"]["name"],PATHINFO_EXTENSION);
					$Carousel = M('carouselfigure');
					$condition['id'] = array('eq',$carouselId);
					$Carousel-> where($condition)->setField('image',$fileName);
				}
			} else {
				$Carousel = M('carouselfigure');
				$condition['id'] = array('eq',$carouselId);
				$Carousel->where($condition)->delete();
			}
		}
		
		$this->redirect('Carousel/index');
	}
}