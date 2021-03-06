<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title><?php echo ($title); ?> | 逻辑</title>

	<link type="text/css" href="/luoji/Public/css/layout/frame.css" rel="stylesheet"/>
	<link type="text/css" href="/luoji/Public/css/layout/header.css" rel="stylesheet"/>
	<link type="text/css" href="/luoji/Public/css/layout/footer.css" rel="stylesheet"/>
	<script type="text/javascript" src="/luoji/Public/javascript/jquery-1.12.4.js"></script>
</head>

<body>
	<div class="page-header">
		<div class="pr header">
			<a class="pr logo"><img src="/luoji/Public/picture/logo-white.png"/></a>
			<div class="nav">
				<ul>
					<?php if(is_array($mainCategory)): foreach($mainCategory as $key=>$item): ?><li><a href="<?php echo ($item['href']); ?>"><?php echo ($item['name']); ?></a>
							<?php if($item['sub']|count != 0): ?><ul>
									<?php if(is_array($item['sub'])): foreach($item['sub'] as $key=>$subItem): ?><li><a href="<?php echo ($subCategory[$subItem]['href']); ?>"><?php echo ($subCategory[$subItem]['name']); ?></a></li><?php endforeach; endif; ?>
								</ul><?php endif; ?>
						</li><?php endforeach; endif; ?>
				</ul>
			</div>
			<div class="login">
				<img src="<?php echo ($headimage); ?>"/>
				<ul>
					<?php if(is_array($accountMenuText)): foreach($accountMenuText as $index=>$item): ?><li><a href="<?php echo ($accountMenuUrl[$index]); ?>"><?php echo ($accountMenuText[$index]); ?></a></li><?php endforeach; endif; ?>
				</ul>
			</div>
		</div>
	</div>
	<div class="page-body">
		<link type="text/css" href="/luoji/Public/css/account.css" rel="stylesheet"/>
<script type="text/javascript" src="/luoji/Public/javascript/account.js"></script>
<script type="text/javascript" src="/luoji/Public/javascript/jquery.placeholder.js"></script>

<div>
	<img src="/luoji/Public/picture/loginBg.jpg" width="100%"/>
	<div id="tab">
		<ul id="tabList">
			<li class="<?php echo ($loginTab); ?>">登录</li>
			<li class="<?php echo ($registerTab); ?>">注册</li>
		</ul>
		<div id="tabCon">
			<div class="<?php echo ($loginForm); ?>">
				<form class="login-form">
					<table class="login-table">
						<tr>
							<td colspan="2"><input type="text" class="input" id="lusername" placeholder="请输入用户名（4至20位字符，仅支持字母和数字）"/></td>
						</tr>
						<tr>
							<td colspan="2"><input type="password" class="input" id="lpassword" placeholder="请输入密码（4-20位字符，支持字母、数字和标点符号）"/></td>
						</tr>
						<tr>
							<td><input type="text" class="verify-input" id="lverify" placeholder="请输入验证码"/></td>
							<td><img src="<?php echo U('Account/verify',array());?>" class="verify-img" title="点击刷新" onclick="refreshVerifyImg(this)"/></td>
						</tr>
						<tr>
							<td colspan="2"><input type="button" class="button" value="登录" onclick="loginSubmitForm()"/></td>
						</tr>
					</table>
				</form>
			</div>
			<div class="<?php echo ($registerForm); ?>">
				<form class="register-form">
					 <table class="register-table">
						<tr>
							<td colspan="2"><input type="text" class="input" id="rusername" placeholder="请输入用户名（4至20位字符，仅支持字母和数字）"/></td>
						</tr>
						<tr>
							<td colspan="2"><input type="text" class="input" id="rnickname" placeholder="请输入昵称（1-20位字符，支持字母、数字和中文）"/></td>
						</tr>
						<tr>
							<td colspan="2"><input type="password" class="input" id="rpassword" placeholder="请输入密码（4-20位字符，支持字母、数字和标点符号）"/></td>
						</tr>
						<tr>
							<td colspan="2"><input type="password" class="input" id="rrepassword" placeholder="请确认密码（4-20位字符，支持字母、数字和标点符号）"/></td>
						</tr>
						<tr>
							<td><input type="text" class="verify-input" id="rverify" placeholder="请输入验证码"/></td>
							<td><img src="<?php echo U('Account/verify',array());?>" class="verify-img" title="点击刷新" onclick="refreshVerifyImg(this)"/></td>
						</tr>
						<tr>
							<td colspan="2"><input type="button" class="button" value="注册" onclick="registerSubmitForm()"/></td>
						</tr>
					</table>
				</form>
			</div>
		</div>
	</div>
</div>
	</div>
	<div class="page-footer">
		<table class="footer">
			<tr>
				<td class="td1"><img src="/luoji/Public/picture/logo-color.png"/></td>
				<td class="td2">
					<p class="p1">没有什么逻辑是一张图看不懂的，如果有，那就两张</p>
					<br/>
					<p class="p2">逻辑（www.luoji.com）是中国最大、最活跃的，以互联网界为范围，以逻辑为核心，以图片为载体的学习平台。在互联网业内得到了广泛关注和高度好评。平台目前拥有300万忠实粉丝。只要有清晰的逻辑图，就没有学不懂的逻辑。</p>
				</td>
				<td class="td3"><div class="vertical-line"></div></td>
				<td class="td4">
					<p>商务合作：</p>
					<p>电话：13539917795</p>
					<p>QQ：752952009</p>
					<p>E-mail：xuyuanfan77@outlook.com</p>
					<br/>
					<p>版权所有Copyright 2016 by 远航科技</p>
				</td>
			</tr>
		</table>
	</div>
</body>
</html>