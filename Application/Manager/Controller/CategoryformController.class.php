<?php
namespace Manager\Controller;
header("Content-Type: text/html;charset=utf-8");
class CategoryformController extends LayoutController {
    public function index(){
		if(cookie('PHPSESSID') && session('admin_id') && cookie('PHPSESSID') == session('admin_id')) {
			$this->initLayout("category");
			if($_GET['id']){
				$Category = M('category');
				$condition['id'] = array('eq',$_GET['id']);
				$categoryData = $Category->where($condition)->find();
				if($categoryData) {
					$this->assign('categoryData',$categoryData);
				}
			}
			$Category = M('category');
			$categoryAllData = $Category->select();
			$this->assign('categoryAllData',$categoryAllData);
			$this->display();
		} else {
			$this->redirect('Account/index');
		}
	}
	
	public function save(){
		$Category = M('category');
		$Category->create();
		if($_POST['id']){
			$Category->save();
		}else{
			$Category->add();
		}
		
		$this->redirect('Category/index');
	}
}