<?php
namespace Home\Model;
use Think\Model;
class UserModel extends Model {
	//array(验证字段,验证规则,错误提示,验证条件,附加规则,验证时间)
	protected  $_validate = array(
		array('username', '', '用户名称已经存在', self::MUST_VALIDATE, 'unique', self::MODEL_INSERT),
		array('username', '/^[a-zA-Z0-9]{4,20}$/', '用户名需4至20位字符，仅支持字母和数字', self::MUST_VALIDATE, 'regex', self::MODEL_INSERT),
		array('nickname', '/^[\x{4e00}-\x{9fa5}a-zA-Z0-9]{1,20}$/u', '昵称需1-20位字符，支持字母、数字和中文', self::MUST_VALIDATE, 'regex', self::MODEL_INSERT),
		array('password', '/^[A-Za-z0-9\@\!\#\$\%\^\&\*\.\~]{4,20}$/', '密码需4-20位字符，支持字母、数字和标点符号', self::MUST_VALIDATE, 'regex', self::MODEL_INSERT),
		array('repassword', 'password', '两次输入密码不一致', self::MUST_VALIDATE, 'confirm', self::MODEL_INSERT),
	);
	
	//array(填充字段,填充内容,填充条件,附加规则)
	protected $_auto=array(
		array('password','md5',self::MODEL_INSERT,'function'),
		array('headimage','default.jpg',self::MODEL_INSERT),
		array('createtime','getDate',self::MODEL_INSERT,'callback'),
	);
	
	function getDate(){
		return date('Y-m-d H:i:s');
	}
}