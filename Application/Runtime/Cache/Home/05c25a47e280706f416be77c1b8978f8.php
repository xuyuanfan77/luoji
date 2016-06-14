<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>逻辑</title>

	<link type="text/css" href="/luoji/Public/css/layout/frame.css" rel="stylesheet"/>
	<link type="text/css" href="/luoji/Public/css/layout/header.css" rel="stylesheet"/>
	<link type="text/css" href="/luoji/Public/css/layout/footer.css" rel="stylesheet"/>
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
					<li><a href="<?php echo U('Index/index','sort=0');?>" class="<?php echo ($navigation[0]); ?>">首页</a></li>
					<li><a href="<?php echo U('Index/index','sort=1');?>" class="<?php echo ($navigation[1]); ?>">技术</a></li>
					<li><a href="<?php echo U('Index/index','sort=2');?>" class="<?php echo ($navigation[2]); ?>">产品</a></li>
					<li><a href="<?php echo U('Index/index','sort=3');?>" class="<?php echo ($navigation[3]); ?>">经济</a></li>
					<li><a href="<?php echo U('Index/index','sort=4');?>" class="<?php echo ($navigation[4]); ?>">其他</a></li>
				</ul>
			</div>
			<!--div class="login" onmouseover="showLoginMenu();" onmouseout="hideLoginMenu();">
				<img src="/luoji/Public/picture/login.jpg"/>
				<div class="login-menu">
					<ul>
						<li><a href="#">我要发表</a></li>
						<li><a href="#">我的收藏</a></li>
						<li><a href="#">我的发表</a></li>
						<li><a href="#">退出</a></li>
					</ul>
				</div>
			</div-->
		</div>
	</div>
	<div class="page-body">
		<!--div class="test">
		</div-->
		<link type="text/css" href="/luoji/Public/css/article.css" rel="stylesheet"/>
<script type="text/javascript" src="/luoji/Public/javascript/article.js"></script>

<div class="article clearfix">

	<!-- 左边栏 -->
	<div class="left-frame">
	
		<!-- 标题栏 -->
		<div class="article-title">
			<p><?php echo ($article['maintitle']); ?></p>
			<a><?php echo ($article['minortitle']); ?></a>
		</div>
		
		<!-- 概述栏 -->
		<div class="article-text">
			<a><?php echo ($article['introduct']); ?></a>
		</div>
		
		<!-- 图片栏 -->
		<div class="article-image">
			<img src="<?php echo ($article['imagesrc']); ?>"/>
		</div>
		
		<!-- 分享栏 -->
		<div class="article-share">
			<a class="weixin" href="#"><img src="/luoji/Public/picture/weixin.png"/>分享到微信</a>
			<a class="weibo" href="#"><img src="/luoji/Public/picture/weibo.png"/>分享到微博</a>
			<a class="qq" href="#"><img src="/luoji/Public/picture/qq.png"/>分享到QQ</a>
		</div>
		
		<!-- 目录栏 -->
		<div id="article-catalog" class="<?php echo ($style); ?>">
			<a id="catalog-text" onmouseover="display()" onmouseout="disappear()">目<br>录</a>
			<div id="catalog-list" onmouseover="display()" onmouseout="disappear()">
				<ul>
					<?php $__FOR_START_17615__=0;$__FOR_END_17615__=$catalog['count'];for($articleNum=$__FOR_START_17615__;$articleNum < $__FOR_END_17615__;$articleNum+=1){ if($articleNum == $catalog['current']): ?><li><a class="list-select" href="https://www.baidu.com"><?php echo ($catalog[$articleNum]); ?></a></li>
						<?php else: ?>
							<li><a class="list-default" href="https://www.baidu.com"><?php echo ($catalog[$articleNum]); ?></a></li><?php endif; } ?>
				</ul>
			</div>
		</div>
	</div>
	
	<!-- 右边栏 -->
	<div class="right-frame">
	
		<!-- 作者栏 -->
		<div class="article-author">
			<img src="/luoji/Public/picture/login.jpg"/>
			<a class="author-name"><?php echo ($user['nickname']); ?></a>
			<a class="author-jobs"><?php echo ($user['jobs']); ?></a>
			<a class="author-company"><?php echo ($user['company']); ?></a>
			<a class="author-introduct"><?php echo ($user['introduct']); ?></a>
		</div>
		<div class="article-recommend">
		</div>
	</div>
</div>

	</div>
	<div class="page-footer">
	</div>
</body>
</html>