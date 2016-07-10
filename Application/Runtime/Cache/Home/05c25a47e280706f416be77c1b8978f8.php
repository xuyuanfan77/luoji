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
					<li><a href="<?php echo U('User/index','category=4');?>" class="<?php echo ($navigation[4]); ?>">其他</a></li>
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
		<link type="text/css" href="/luoji/Public/css/article.css" rel="stylesheet"/>
<script type="text/javascript" src="/luoji/Public/javascript/article.js"></script>

<div class="article clearfix">

	<!-- 左边栏 -->
	<div class="left-frame">
	
		<!-- 标题栏 -->
		<div class="article-title">
			<h1><?php echo ($articleMaintitle); ?></h1>
			<h2><?php echo ($articleSubhead); ?></h2>
		</div>
		
		<!-- 概述栏 -->
		<div class="article-text">
			<h3><?php echo ($articleIntroduction); ?></h3>
		</div>
		
		<!-- 图片栏 -->
		<div class="article-image">
			<img src="<?php echo ($articleImage); ?>"/>
		</div>
		
		<!-- 分享栏 -->
		<div class="article-share">
			<a class="weixin" href="#"><img src="/luoji/Public/picture/weixin.png"/>分享到微信</a>
			<a class="weibo" href="#"><img src="/luoji/Public/picture/weibo.png"/>分享到微博</a>
			<a class="qq" href="#"><img src="/luoji/Public/picture/qq.png"/>分享到QQ</a>
		</div>
		
		<!-- 目录栏 -->
		<div id="article-catalog" class="<?php echo ($artListDisplay); ?>">
			<a id="catalog-text" onmouseover="display()" onmouseout="disappear()">目<br>录</a>
			<div id="catalog-list" onmouseover="display()" onmouseout="disappear()">
				<ul>
					<?php if(is_array($artListTitle)): foreach($artListTitle as $index=>$item): ?><li><a class="<?php echo ($artListStyle[$index]); ?>" href="<?php echo ($artListHref[$index]); ?>" target="_blank"><?php echo ($artListTitle[$index]); ?></a></li><?php endforeach; endif; ?>
				</ul>
			</div>
		</div>
	</div>
	
	<!-- 右边栏 -->
	<div class="right-frame">
	
		<!-- 作者栏 -->
		<table class="article-author">
			<tr><td>
				<table>
					<tr>
						<td rowspan="2"><img class="author-image" src="<?php echo ($expertImage); ?>"/></td>
						<td><a href="<?php echo ($expertHref); ?>" target="_blank" class="author-name"><?php echo ($expertNickname); ?></a></td>
					</tr>
					<tr>
						<td><a class="author-rank">少尉</a></td>
					</tr>
				</table>
			</td></tr>
			<tr><td><hr class="line"/></td></tr>
			<tr><td>
				<a class="author-jobs"><?php echo ($expertJobs); ?></a>
				<a class="author-company"><?php echo ($expertCompany); ?></a>
			</td></tr>
			<tr><td><hr class="line"/></td></tr>
			<tr><td>
				<div class="author-introduct"><?php echo ($expertIntroduction); ?></div>
			</td></tr>
		</table>
		<div class="segmentation"></div>
		<?php echo W('Special/index');?>
		<div class="segmentation"></div>
		<?php echo W('Article/index');?>
	</div>
</div>

	</div>
	<div class="page-footer">
	</div>
</body>
</html>