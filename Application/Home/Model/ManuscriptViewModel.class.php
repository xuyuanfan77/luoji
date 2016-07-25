<?php
namespace Home\Model;
use Think\Model\ViewModel;
class ManuscriptViewModel extends ViewModel {
	public $viewFields = array(
		'Manuscript'=>array(
			'id'=>'manuscript_id',
			'mainimage',
			'maintitle',
			'subhead',
			'introduction'=>'manuscript_introduction',
			'author',
			'categoryid',
			'createtime'=>'manuscript_createtime',
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
			'_on'=>'Manuscript.author=User.id',
		),
	);
 }