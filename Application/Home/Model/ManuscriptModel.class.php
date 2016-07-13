<?php
namespace Home\Model;
use Think\Model;
class ManuscriptModel extends Model {
	//array(验证字段,验证规则,错误提示,验证条件,附加规则,验证时间)
	protected  $_validate = array(
		array('maintitle', '/^[\s|\S]{1,75}$/', '主标题需1至25字', self::EXISTS_VALIDATE, 'regex', self::MODEL_BOTH),
		array('subhead', '/^[\s|\S]{1,90}$/', '副标题需1至30字', self::EXISTS_VALIDATE, 'regex', self::MODEL_BOTH),
		array('introduction', '/^[\s|\S]{1,3000}$/', '简介需1至1000字', self::EXISTS_VALIDATE, 'regex', self::MODEL_BOTH),
	);
	
	//array(填充字段,填充内容,填充条件,附加规则)
	protected $_auto=array(
		array('createtime','getDate',self::MODEL_INSERT,'callback'),
	);
	
	function getDate(){
		return date('Y-m-d H:i:s');
	}
}