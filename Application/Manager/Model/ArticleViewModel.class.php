<?php
namespace Home\Model;
use Think\Model\ViewModel;
class ArticleViewModel extends ViewModel {
	public $viewFields = array(
		'Article'=>array(
			'id'=>'article_id',
			'mainimage',
			'mainimagealt',
			'coverimage',
			'maintitle',
			'subhead',
			'introduction'=>'article_introduction',
			'author',
			'categoryid',
			'collectnum',
			'readnum',
			'createtime'=>'article_createtime',
			'_type'=>'LEFT',
		),
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
			'_on'=>'Article.author=User.id',
		),
	);
 }