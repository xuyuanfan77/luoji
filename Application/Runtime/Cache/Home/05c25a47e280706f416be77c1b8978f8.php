<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>逻辑</title>

	<link href="/luoji/Public/css/frame.css" rel="stylesheet" type="text/css" />
	<link href="/luoji/Public/css/header.css" rel="stylesheet" type="text/css" />
	<link href="/luoji/Public/css/body-content.css" rel="stylesheet" type="text/css" />
	<script type="text/javascript" src="/luoji/Public/javascript/jquery-1.12.4.js"></script>
	<script type="text/javascript" src="/luoji/Public/javascript/content.js"></script>
</head>

<body>
	<div class="page-header">
		<div class="header">
			<div class="logo">
				<img src="/luoji/Public/picture/logo.png"/>
			</div>
			<div class="menu">
				<ul>
					<li><a href="#" class="menu-select">首页</a></li>
					<li><a href="#" class="menu-default">技术</a></li>
					<li><a href="#" class="menu-default">产品</a></li>
					<li><a href="#" class="menu-default">经济</a></li>
					<li><a href="#" class="menu-default">其他</a></li>
				</ul>
			</div>
			<div class="login" onmouseover="showLoginMenu();" onmouseout="hideLoginMenu();">
				<img src="/luoji/Public/picture/login.jpg"/>
				<div class="login-menu">
					<ul>
						<li><a href="#">我要发表</a></li>
						<li><a href="#">我的收藏</a></li>
						<li><a href="#">我的发表</a></li>
						<li><a href="#">退出</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="page-body">
		<div class="content-body clearfix">
			<div class="left-frame">
				<div class="content-title">
					<p><?php echo ($article['maintitle']); ?></p>
					<a><?php echo ($article['minortitle']); ?></a>
				</div>
				<div class="content-text clearfix">
					<a><?php echo ($article['introduct']); ?></a>
				</div>
				<div class="content-image">
					<img src="<?php echo ($article['imagesrc']); ?>"/>
				</div>
				<div class="content-share clearfix">
					<a class="weixin" href="#"><img src="/luoji/Public/picture/weixin.png"/>分享到微信</a>
					<a class="weibo" href="#"><img src="/luoji/Public/picture/weibo.png"/>分享到微博</a>
					<a class="qq" href="#"><img src="/luoji/Public/picture/qq.png"/>分享到QQ</a>
				</div>
				<div id="content-catalog" class="<?php echo ($style); ?>">
					<a id="catalog-text" onmouseover="display()" onmouseout="disappear()">目<br>录</a>
					<div id="catalog-list" onmouseover="display()" onmouseout="disappear()">
						<ul>
							<li><a class="list-default" href="https://www.baidu.com">华医网结构图（一）</a></li>
							<li><a class="list-select" href="https://www.baidu.com">华医网结构图（二）</a></li>
							<li><a class="list-default" href="https://www.baidu.com">华医网结构图（三）</a></li>
							<li><a class="list-default" href="https://www.baidu.com">华医网结构图（四）</a></li>
							<li><a class="list-default" href="https://www.baidu.com">华医网结构图（五）</a></li>
							<li><a class="list-default" href="https://www.baidu.com">华医网结构图（六）</a></li>
							<li><a class="list-default" href="https://www.baidu.com">华医网结构图（七）</a></li>
							<li><a class="list-default" href="https://www.baidu.com">华医网结构图（八）</a></li>
							<li><a class="list-default" href="https://www.baidu.com">华医网结构图（九）</a></li>
							<li><a class="list-default" href="https://www.baidu.com">华医网结构图（十）</a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="right-frame">
				<div class="content-author clearfix">
					<img src="/luoji/Public/picture/login.jpg"/>
					<a class="author-name"><?php echo ($userData['nickname']); ?></a>
					<a class="author-jobs"><?php echo ($userData['jobs']); ?></a>
					<a class="author-company"><?php echo ($userData['company']); ?></a>
					<a class="author-introduct"><?php echo ($userData['introduct']); ?></a>
				</div>
				<div class="content-recommend">
				</div>
			</div>
		</div>
	</div>
	<div class="page-footer">
	</div>
</body>
</html>