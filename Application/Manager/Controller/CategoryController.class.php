<?php
namespace Manager\Controller;
header("Content-Type: text/html;charset=utf-8");
class CategoryController extends LayoutController {
    public function index(){
		if(cookie('PHPSESSID') && session('admin_id') && cookie('PHPSESSID') == session('admin_id')) {
			$this->initLayout("category");

			if($_GET['p']) {
				$pageNum = $_GET['p'];
			} else {
				$pageNum = 1;
			}
			$Category = M('Category');
			$categoryData = $Category->page($pageNum .',10')->select();
			
			foreach ($categoryData as $key=>$value) {
				if($value['parent'] == 0){
					$categoryData[$key]['parent'] = "无";
				}else{
					$categoryTemp = M('Category');
					$condition['id'] = array('eq',$value['parent']);
					$parent = $categoryTemp->where($condition)->find();
					$categoryData[$key]['parent'] = $parent['name'];
				}
			}
			
			$this->assign('categoryData',$categoryData);

			$count = $Category->count();
			$Page = new \Think\Page($count,10);
			$pageShow = $Page->show();
			$this->assign('pageShow',$pageShow);
			
			$this->display();
		} else {
			$this->redirect('Account/index');
		}
	}
	
	public function del(){
		$Category = M('Category');
		$condition['id'] = array('eq',$_GET['id']);
		$Category->where($condition)->delete(); 

		$this->redirect('Category/index');
	}
}