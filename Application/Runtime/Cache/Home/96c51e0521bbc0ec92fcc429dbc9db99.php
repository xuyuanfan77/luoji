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
					<li><a href="<?php echo U('Index/index','category=4');?>" class="<?php echo ($navigation[4]); ?>">其他</a></li>
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
		<link type="text/css" href="/luoji/Public/css/manuscript.css" rel="stylesheet"/>

<div class="pr total-frame">
	<div class="right-frame">
		<div class="right-title">
			<a>我的投稿</a>
		</div>
		<div class="right-content">
			<table class="content-table">
				<?php $__FOR_START_31295__=0;$__FOR_END_31295__=8;for($manuscriptIndex=$__FOR_START_31295__;$manuscriptIndex < $__FOR_END_31295__;$manuscriptIndex+=1){ if($manuscriptMaintitle[$manuscriptIndex] != NULL): ?><tr>
							<td>
								<table> 
									<tr>
										<td class="content-td1"><a class="title" href="<?php echo ($manuscriptHref[$manuscriptIndex]); ?>" target="_blank"><?php echo ($manuscriptMaintitle[$manuscriptIndex]); ?></a></td>
										<td rowspan="2"><a class="<?php echo ($manuscriptStatusStyl[$manuscriptIndex]); ?>"><?php echo ($manuscriptStatus[$manuscriptIndex]); ?></a></td>
									</tr>
									<tr>
										<td class="content-td1"><a class="date-time"><?php echo ($manuscriptCreatetime[$manuscriptIndex]); ?></a><a class="delete" href="<?php echo ($manuscriptDelHref[$manuscriptIndex]); ?>">删除</a></td>
									</tr>
								</table>
							</td>
						</tr><?php endif; } ?>
			</table>
			<div class="pages">
				<?php echo ($pageShow); ?>
			</div>
		</div>
	</div>
	<div class="left-frame">
		<table class="top-table"> 
			<tr>
				<td>
					<img class="headimage" src="<?php echo ($headimage); ?>"/>
				</td> 
			</tr>
			<tr>
				<td>
					<a class="username"><?php echo ($nickname); ?></a>
				</td> 
			</tr> 
		</table>
		<table class="bottom-table"> 
			<tr>
				<td class="default">
					<a href="<?php echo U('Contribute/index');?>">我要投稿<a/>
				</td> 
			</tr>
			<tr>
				<td class="select">
					<a href="<?php echo U('Manuscript/index');?>">我的投稿</a>
				</td> 
			</tr>
			<tr>
				<td class="default">
					<a href="<?php echo U('Collect/index');?>">我的收藏<a/>
				</td> 
			</tr>
			<tr>
				<td class="default">
					<a href="<?php echo U('Information/index');?>">个人信息</a>
				</td> 
			</tr> 
		</table>
	</div>
</div>
	</div>
	<div class="page-footer">
	</div>
</body>
</html>