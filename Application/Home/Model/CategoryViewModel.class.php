<?php
namespace Home\Model;
use Think\Model\ViewModel;
class CategoryViewModel extends ViewModel {
	public $viewFields = array(
		'Category'=>array(
			'_as'=>'maincategory',
			'id'=>'mainid',
			'name'=>'mainname',
			'index'=>'mainindex',
			'level'=>'mainlevel',
			'parent'=>'mainparent',
			
		),
		'Category'=>array(
			'_as'=>'subcategory',
			'id'=>'subid',
			'name'=>'subname',
			'index'=>'subindex',
			'level'=>'sublevel',
			'parent'=>'subparent',
			'_on'=>'subcategory.parent=maincategory.id',
			'_type'=>'INNER',
		),
	);
 }