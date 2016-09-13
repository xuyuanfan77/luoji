<?php
namespace Manager\Controller;
header("Content-Type: text/html;charset=utf-8");
class CarouselController extends LayoutController {
    public function index(){
		$this->initLayout();
        $this->display();
	}
}