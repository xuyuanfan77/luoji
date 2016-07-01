<?php
namespace Home\Model;
use Think\Model;
class UserModel extends Model {
	//array(验证字段,验证规则,错误提示,验证条件,附加规则,验证时间)
	protected  $_validate = array(
		array('username', '', '用户名称已经存在', self::EXISTS_VALIDATE, 'unique', self::MODEL_BOTH),
		array('username', '/^[a-zA-Z0-9]{4,20}$/', '用户名需4至20位字符，仅支持字母和数字', self::EXISTS_VALIDATE, 'regex', self::MODEL_BOTH),
		array('nickname', '/^[\x{4e00}-\x{9fa5}a-zA-Z0-9]{1,20}$/u', '昵称需1-20位字符，支持字母、数字和中文', self::EXISTS_VALIDATE, 'regex', self::MODEL_BOTH),
		array('password', '/^[A-Za-z0-9\@\!\#\$\%\^\&\*\.\~]{4,20}$/', '密码需4-20位字符，支持字母、数字和标点符号', self::EXISTS_VALIDATE, 'regex', self::MODEL_BOTH),
		array('repassword', 'password', '两次输入密码不一致', self::EXISTS_VALIDATE, 'confirm', self::MODEL_BOTH),
		array('email', '/^([a-z0-9]+([._\\-]*[a-z0-9])*@([a-z0-9]+[-a-z0-9]*[a-z0-9]+.){1,63}[a-z0-9]+)?$/', '请输入正确的邮箱格式', self::EXISTS_VALIDATE, 'regex', self::MODEL_BOTH),
		array('jobs', '/^[\x{4e00}-\x{9fa5}a-zA-Z]{0,10}$/u', '岗位需0-10位字符，支持字母和中文', self::EXISTS_VALIDATE, 'regex', self::MODEL_BOTH),
		array('company', '/^[\x{4e00}-\x{9fa5}a-zA-Z]{0,20}$/u', '单位需0-20位字符，支持字母和中文', self::EXISTS_VALIDATE, 'regex', self::MODEL_BOTH),
		array('introduction', '/^[\s\S]{0,250}$/u', '介绍需0-250位字符', self::EXISTS_VALIDATE, 'regex', self::MODEL_BOTH),
	);
	
	//array(填充字段,填充内容,填充条件,附加规则)
	protected $_auto=array(
		array('password','md5',self::MODEL_BOTH,'function'),
		array('headimage','default.jpg',self::MODEL_INSERT),
		array('createtime','getDate',self::MODEL_INSERT,'callback'),
	);
	
	function getDate(){
		return date('Y-m-d H:i:s');
	}
}