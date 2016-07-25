<?php
namespace Home\Model;
use Think\Model\ViewModel;
class IncludeViewModel extends ViewModel {
	public $viewFields = array(
		'Special'=>array(
			'id'=>'special_id',
			'maintitle'=>'specical_maintitle',
			'subhead'=>'specical_subhead',
			'introduction'=>'specical_introduction',
			'coverimage'=>'specical_coverimage',
			'categoryid'=>'specical_categoryid',
			'createtime'=>'specical_createtime',
			'_type'=>'RIGHT',
		),
		'Include'=>array(
			'createtime'=>'include_createtime',
			'_type'=>'LEFT',
			'_on'=>'Special.id=Include.special_id',
		),
		'Article'=>array(
			'id'=>'article_id',
			'mainimage',
			'coverimage'=>'article_coverimage',
			'maintitle'=>'article_maintitle',
			'subhead'=>'article_subhead',
			'introduction'=>'article_introduction',
			'author',
			'categoryid'=>'article_categoryid',
			'collectnum',
			'readnum',
			'createtime'=>'article_createtime',
			'_on'=>'Article.id=Include.article_id',
		),
	);
 }