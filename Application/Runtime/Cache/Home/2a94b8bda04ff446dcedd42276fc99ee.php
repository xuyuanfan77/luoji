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
					<li><a href="<?php echo U('Index/index','category=0');?>" class="<?php echo ($navigation[0]); ?>">首页</a></li>
					<li><a href="<?php echo U('Index/index','category=1');?>" class="<?php echo ($navigation[1]); ?>">技术</a></li>
					<li><a href="<?php echo U('Index/index','category=2');?>" class="<?php echo ($navigation[2]); ?>">产品</a></li>
					<li><a href="<?php echo U('Index/index','category=3');?>" class="<?php echo ($navigation[3]); ?>">经济</a></li>
					<li><a href="<?php echo U('Index/index','category=4');?>" class="<?php echo ($navigation[4]); ?>">其他</a></li>
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
		<link type="text/css" href="/luoji/Public/css/index.css" rel="stylesheet"/>
<script type="text/javascript" src="/luoji/Public/javascript/index.js"></script>

<!-- 通知栏 -->
<div class="notification clearfix">
	<div id="banner">
		<div id="banner-list">
			<a href="www.baidu.com"><img src="/luoji/Public/picture/p1.jpg" title="橡树小屋的blog" alt="橡树小屋的blog1" /></a>
			<a href="www.baidu.com"><img src="/luoji/Public/picture/p2.jpg" title="橡树小屋的blog" alt="橡树小屋的blog2" /></a>
			<a href="www.baidu.com"><img src="/luoji/Public/picture/p3.jpg" title="橡树小屋的blog" alt="橡树小屋的blog3" /></a>
			<a href="www.baidu.com"><img src="/luoji/Public/picture/p4.jpg" title="橡树小屋的blog" alt="橡树小屋的blog4" /></a>
		</div>
		<a id="banner-info"></a>
		<div id="banner-button">
			<ul>
				<li alt="1" class="on"></li>
				<li alt="2"></li>
				<li alt="3"></li>
				<li alt="4"></li>
			</ul>
		</div>
	</div>
	<div class="channel">
		<a>交流频道</a>
		<ul>
			<li><a>HTML交流群：</a><a>548588839</a></li>
			<li><a>JS交流群：</a><a>548588839</a></li>
			<li><a>PHP交流群：</a><a>548588839</a></li>
			<li><a>MySQL交流群：</a><a>548588839</a></li>
			<li><a>产品交流群：</a><a>548588839</a></li>
		</ul>
	</div>
</div>

<!-- 专辑栏 -->
<div class="special clearfix">
	<ul>
		<?php $__FOR_START_16164__=0;$__FOR_END_16164__=5;for($specialIndex=$__FOR_START_16164__;$specialIndex < $__FOR_END_16164__;$specialIndex+=1){ if($specialImages[$specialIndex] != NULL): ?><li>
					<img src="<?php echo ($specialImages[$specialIndex]); ?>"/>
					<div class="special-title">
						<a class="main-title" href="<?php echo ($specialHrefs[$specialIndex]); ?>" target="_blank"><?php echo ($specialMaintitles[$specialIndex]); ?></a>
						<a class="minor-title" href="<?php echo ($specialHrefs[$specialIndex]); ?>" target="_blank"><?php echo ($specialSubheads[$specialIndex]); ?></a>
					</div>
				</li><?php endif; } ?>
	</ul>
	<a class="special-more" href="#">
		<br/><br/><br/>换<br/>一<br/>批<br/><br/><br/>
	</a>
</div>

<!-- 内容栏 -->
<div class="content clearfix">

	<!-- 文章栏 -->
	<div class="articles">
		<ul>
			<?php $__FOR_START_2701__=0;$__FOR_END_2701__=10;for($articleIndex=$__FOR_START_2701__;$articleIndex < $__FOR_END_2701__;$articleIndex+=1){ if($articleImage[$articleIndex] != NULL): ?><li>
						<img src="<?php echo ($articleImage[$articleIndex]); ?>"/>
						<ul>
							<li class="article-firstline">
								<a class="article-classify1"><?php echo ($articleClassification[$articleIndex]); ?></a>
								<div class="article-classify2"></div>
								<div class="article-collection-default"></div>
							</li>
							<li class="article-secondline">
								<a href="<?php echo ($articleHref[$specialIndex]); ?>" target="_blank" class="article-title"><?php echo ($articleMaintitle[$articleIndex]); ?></a>
								<a class="article-overview"><?php echo ($articleIntroduction[$articleIndex]); ?></a>
							</li>
							<li class="article-thirdline">
								<a>阅读：<?php echo ($articleReadnum[$articleIndex]); ?></a>
								<a>作者：<?php echo ($articleNickname[$articleIndex]); ?></a>
							</li>
						</ul>
					</li><?php endif; } ?>
		</ul>
		<div class="pages">
			<ul>
				<?php echo ($pageShow); ?>
			</ul>
			
		</div>
	</div>
	
	<!-- 其他栏 -->
	<div class="others">
		<div class="experts">
			<div class="experts-title">
				<div>
				</div>
				<a>专家名榜</a>
			</div>
			<ul>
				<?php $__FOR_START_9282__=0;$__FOR_END_9282__=5;for($expertsIndex=$__FOR_START_9282__;$expertsIndex < $__FOR_END_9282__;$expertsIndex+=1){ if($expertImage[$expertsIndex] != NULL): ?><li>
							<img src="<?php echo ($expertImage[$expertsIndex]); ?>"/>
							<a class="experts-name"><?php echo ($expertNickname[$expertsIndex]); ?></a>
							<a class="experts-jobs"><?php echo ($expertJobs[$expertsIndex]); ?></a>
							<a class="experts-introduction"><?php echo ($expertIntroduction[$expertsIndex]); ?></a>
						</li><?php endif; } ?>
			</ul>
		</div>
	</div>
</div>

	</div>
	<div class="page-footer">
	</div>
</body>
</html>