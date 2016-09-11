<?php
namespace Home\Model;
use Think\Model\ViewModel;
class CollectViewModel extends ViewModel {
	public $viewFields = array(
		'User'=>array(
			'id'=>'user_id',
			'username',
			'password',
			'nickname',
			'headimage',
			'rank',
			'jobs',
			'company',
			'introduction'=>'user_introduction',
			'createtime'=>'user_createtime',
			'_type'=>'RIGHT',
		),
		'Collect'=>array(
			'createtime'=>'collect_createtime',
			'_type'=>'LEFT',
			'_on'=>'User.id=Collect.user_id',
		),
		'Article'=>array(
			'id'=>'article_id',
			'mainimage',
			'coverimage',
			'maintitle',
			'subhead',
			'introduction'=>'article_introduction',
			'author',
			'categoryid',
			'collectnum',
			'readnum',
			'createtime'=>'article_createtime',
			'_on'=>'Article.id=Collect.article_id',
		),
	);
 }