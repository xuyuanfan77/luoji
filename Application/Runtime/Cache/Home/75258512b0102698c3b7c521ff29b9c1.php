<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>逻辑</title>

	<link type="text/css" href="/luoji/Public/css/layout/frame.css" rel="stylesheet"/>
	<link type="text/css" href="/luoji/Public/css/layout/header.css" rel="stylesheet"/>
	<link type="text/css" href="/luoji/Public/css/layout/footer.css" rel="stylesheet"/>
	<script type="text/javascript" src="/luoji/Public/javascript/layout/header.js"></script>
	<script type="text/javascript" src="/luoji/Public/javascript/jquery-1.12.4.js"></script>
</head>


<body>
	<div class="page-header">
		<div class="header">
			<div class="logo">
				<img src="/luoji/Public/picture/logo-white.png"/>
			</div>
			<div class="menu">
				<ul>
					<li><a href="<?php echo U('Index/index','category=0');?>" class="<?php echo ($navigation[0]); ?>">首页</a></li>
					<li><a href="<?php echo U('Index/index','category=1');?>" class="<?php echo ($navigation[1]); ?>">技术</a></li>
					<li><a href="<?php echo U('Index/index','category=2');?>" class="<?php echo ($navigation[2]); ?>">产品</a></li>
					<li><a href="<?php echo U('Index/index','category=3');?>" class="<?php echo ($navigation[3]); ?>">经济</a></li>
					<li><a href="<?php echo U('Information/index','category=4');?>" class="<?php echo ($navigation[4]); ?>">其他</a></li>
				</ul>
			</div>
			<div class="login" id="login-image" onmouseover="showLoginMenu();" onmouseout="hideLoginMenu();">
				<img src="<?php echo ($headimage); ?>"/>
				<div class="login-menu" id="login-menu">	
					<ul>
						<?php if(is_array($accountMenuText)): foreach($accountMenuText as $index=>$item): ?><li><a href="<?php echo ($accountMenuUrl[$index]); ?>"><?php echo ($accountMenuText[$index]); ?></a></li><?php endforeach; endif; ?>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="page-body">
		<!--div class="test">
		</div-->
		<link type="text/css" href="/luoji/Public/css/account.css" rel="stylesheet"/>
<script type="text/javascript" src="/luoji/Public/javascript/account.js"></script>

<div>
	<img src="/luoji/Public/picture/loginBg.jpg" width="100%"/>
	<div id="account-tab">
		<div class="tabList">
			<ul>
				<li class="<?php echo ($loginTab); ?>">登录</li>
				<li class="<?php echo ($registerTab); ?>">注册</li>
			</ul>
		</div>
		<div class="tabCon">
			<div class="<?php echo ($loginForm); ?>">
				<form action="<?php echo U('Account/login');?>" method="post" class="login-form">
					<table class="login-table">
						<tr>
							<td colspan="2">
								<input type="text" class="input" id="lusername" placeholder="请输入用户名（4至20位字符，仅支持字母和数字）"/>
							</td>
						</tr>
						<tr>
							<td colspan="2">
								<input type="password" class="input" id="lpassword" placeholder="请输入密码（4-20位字符，支持字母、数字和标点符号）"/>
							</td>
						</tr>
						<tr>
							<td>
								<input type="text" class="verify-input" id="lverify" placeholder="请输入验证码"/>
							</td>
							<td>
								<img src="<?php echo U('Account/verify',array());?>" class="verify-img" title="点击刷新" onclick="refreshVerifyImg(this)"/>
							</td>
						</tr>
						<tr>
							<td colspan="2">
								<input type="button" class="button" value="登录" onclick="loginSubmitForm()"/>
							</td>
						</tr>
						<input type="hidden" id="lurl" value="<?php echo U('Account/login');?>">
					</table>
				</form>
			</div>
			<div class="<?php echo ($registerForm); ?>">
				<form class="register-form">
					 <table class="register-table">
						<tr>
							<td colspan="2">
								<input type="text" class="input" id="rusername" placeholder="请输入用户名（4至20位字符，仅支持字母和数字）"/>
							</td>
						</tr>
						<tr>
							<td colspan="2">
								<input type="text" class="input" id="rnickname" placeholder="请输入昵称（1-20位字符，支持字母、数字和中文）"/>
							</td>
						</tr>
						<tr>
							<td colspan="2">
								<input type="password" class="input" id="rpassword" placeholder="请输入密码（4-20位字符，支持字母、数字和标点符号）"/>
							</td>
						</tr>
						<tr>
							<td colspan="2">
								<input type="password" class="input" id="rrepassword" placeholder="请确认密码"/>
							</td>
						</tr>
						<tr>
							<td>
								<input type="text" class="verify-input" id="rverify" placeholder="请输入验证码"/>
							</td>
							<td>
								<img src="<?php echo U('Account/verify',array());?>" class="verify-img" title="点击刷新" onclick="refreshVerifyImg(this)"/>
							</td>
						</tr>
						<tr>
							<td colspan="2">
								<input type="button" class="button" value="注册" onclick="registerSubmitForm()"/>
							</td>
						</tr>
						<input type="hidden" id="rurl" value="<?php echo U('Account/register');?>">
					</table>
				</form>
			</div>
		</div>
	</div>
</div>
	</div>
	<div class="page-footer">
	</div>
</body>
</html>