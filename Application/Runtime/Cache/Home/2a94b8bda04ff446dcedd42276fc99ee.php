<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>逻辑</title>

	<link href="/luoji/Public/css/frame.css" rel="stylesheet" type="text/css" />
	<link href="/luoji/Public/css/header.css" rel="stylesheet" type="text/css" />
	<link href="/luoji/Public/css/body-index.css" rel="stylesheet" type="text/css" />
	<script type="text/javascript" src="/luoji/Public/javascript/jquery-1.12.4.js"></script>
	<script type="text/javascript" src="/luoji/Public/javascript/index.js"></script>
</head>

<body>
	<div class="page-header">
		<div class="header">
			<div class="logo">
				<img src="/luoji/Public/picture/logo.png"/>
			</div>
			<div class="menu">
				<ul>
					<li><a href="<?php echo U('Index/index','sort=1');?>" class="<?php echo ($articleSort[0]); ?>">首页</a></li>
					<li><a href="<?php echo U('Index/index','sort=2');?>" class="<?php echo ($articleSort[1]); ?>">技术</a></li>
					<li><a href="<?php echo U('Index/index','sort=3');?>" class="<?php echo ($articleSort[2]); ?>">产品</a></li>
					<li><a href="<?php echo U('Index/index','sort=4');?>" class="<?php echo ($articleSort[3]); ?>">经济</a></li>
					<li><a href="<?php echo U('Index/index','sort=5');?>" class="<?php echo ($articleSort[4]); ?>">其他</a></li>
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
		<div class="notification">
			<div id="banner">
				<div id="banner_list">
					<a href="#"><img src="/luoji/Public/picture/p1.jpg" title="橡树小屋的blog" alt="橡树小屋的blog1" /></a>
					<a href="#"><img src="/luoji/Public/picture/p2.jpg" title="橡树小屋的blog" alt="橡树小屋的blog2" /></a>
					<a href="#"><img src="/luoji/Public/picture/p3.jpg" title="橡树小屋的blog" alt="橡树小屋的blog3" /></a>
					<a href="#"><img src="/luoji/Public/picture/p4.jpg" title="橡树小屋的blog" alt="橡树小屋的blog4" /></a>
				</div>
				<div id="banner_info"></div>
				<div id="banner_button">
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
		<div class="collection">
			<ul>
				<li>
					<img src="<?php echo ($album[0]['coverimage']); ?>"/>
					<div class="collection-title">
						<p><?php echo ($album[0]['maintitle']); ?></p>
						<a><?php echo ($album[0]['minortitle']); ?></a>
					</div>
				</li>
				<li>
					<img src="<?php echo ($album[1]['coverimage']); ?>"/>
					<div class="collection-title">
						<p><?php echo ($album[1]['maintitle']); ?></p>
						<a><?php echo ($album[1]['minortitle']); ?></a>
					</div>
				</li>
				<li>
					<img src="<?php echo ($album[2]['coverimage']); ?>"/>
					<div class="collection-title">
						<p><?php echo ($album[2]['maintitle']); ?></p>
						<a><?php echo ($album[2]['minortitle']); ?></a>
					</div>
				</li>
				<li>
					<img src="<?php echo ($album[3]['coverimage']); ?>"/>
					<div class="collection-title">
						<p><?php echo ($album[3]['maintitle']); ?></p>
						<a><?php echo ($album[3]['minortitle']); ?></a>
					</div>
				</li>
				<li>
					<img src="<?php echo ($album[4]['coverimage']); ?>"/>
					<div class="collection-title">
						<p><?php echo ($album[4]['maintitle']); ?></p>
						<a><?php echo ($album[4]['minortitle']); ?></a>
					</div>
				</li>
			</ul>
		</div>
		<div class="content">
			<div class="items">
				<ul>
					<?php $__FOR_START_20666__=0;$__FOR_END_20666__=10;for($articleNum=$__FOR_START_20666__;$articleNum < $__FOR_END_20666__;$articleNum+=1){ if($article[$articleNum]['imagesrc'] == null ): ?><li></li>
						<?php else: ?>
							<li>
								<img src="<?php echo ($article[$articleNum]['imagesrc']); ?>"/>
								<ul>
									<li class="item-firstline">
										<a class="item-classify1"><?php echo ($article[$articleNum]['type1']); ?></a>
										<div class="item-classify2"></div>
										<div class="item-collection-default"></div>
									</li>
									<li class="item-secondline">
										<a href="<?php echo U('Content/index', array('type'=>'article','id'=>$article[$articleNum]['minorimage']));?>" target="_blank" class="item-title"><?php echo ($article[$articleNum]['maintitle']); ?></a>
										<a class="item-overview"><?php echo ($article[$articleNum]['introduct']); ?></a>
									</li>
									<li class="item-thirdline">
										<a>阅读：<?php echo ($article[$articleNum]['read']); ?></a>
										<a>作者：<?php echo ($article[$articleNum]['nickname']); ?></a>
									</li>
								</ul>
							</li><?php endif; } ?>
				</ul>
				<div class="pages">
					<ul>
						<?php echo ($page); ?>
					</ul>
					
				</div>
			</div>
			<div class="others">
				<div class="experts">
					<div class="experts-title">
						<div>
						</div>
						<a>专家名榜</a>
					</div>
					<ul>
						<li>
							<img src="<?php echo ($user[0]['icon']); ?>"/>
							<a class="experts-name"><?php echo ($user[0]['nickname']); ?></a>
							<a class="experts-jobs"><?php echo ($user[0]['jobs']); ?></a>
							<a class="experts-specialty"><?php echo ($user[0]['introduct']); ?></a>
						</li>
						<li>
							<img src="<?php echo ($user[1]['icon']); ?>"/>
							<a class="experts-name"><?php echo ($user[1]['nickname']); ?></a>
							<a class="experts-jobs"><?php echo ($user[1]['jobs']); ?></a>
							<a class="experts-specialty"><?php echo ($user[1]['introduct']); ?></a>
						</li>
						<li>
							<img src="<?php echo ($user[2]['icon']); ?>"/>
							<a class="experts-name"><?php echo ($user[2]['nickname']); ?></a>
							<a class="experts-jobs"><?php echo ($user[2]['jobs']); ?></a>
							<a class="experts-specialty"><?php echo ($user[2]['introduct']); ?></a>
						</li>
						<li>
							<img src="<?php echo ($user[3]['icon']); ?>"/>
							<a class="experts-name"><?php echo ($user[3]['nickname']); ?></a>
							<a class="experts-jobs"><?php echo ($user[3]['jobs']); ?></a>
							<a class="experts-specialty"><?php echo ($user[3]['introduct']); ?></a>
						</li>
						<li>
							<img src="<?php echo ($user[4]['icon']); ?>"/>
							<a class="experts-name"><?php echo ($user[4]['nickname']); ?></a>
							<a class="experts-jobs"><?php echo ($user[4]['jobs']); ?></a>
							<a class="experts-specialty"><?php echo ($user[4]['introduct']); ?></a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		
	</div>
	<div class="page-footer">
	</div>
</body>
</html>