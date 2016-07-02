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
		<link type="text/css" href="/luoji/Public/css/collect.css" rel="stylesheet"/>
<script type="text/javascript" src="/luoji/Public/javascript/collect.js"></script>

<div id="total-frame">
	<div id="right-frame">
		<div id="right-title">
			<a>我的收藏</a>
		</div>
		<div id="right-content">
			<table id="content-table"> 
			
			
				<?php $__FOR_START_10317__=0;$__FOR_END_10317__=8;for($articleIndex=$__FOR_START_10317__;$articleIndex < $__FOR_END_10317__;$articleIndex+=1){ if($articleMaintitle[$articleIndex] != NULL): ?><tr>
							<td>
								<table> 
									<tr>
										<td class="content-td1"><a class="title" href="<?php echo ($articleHref[$articleIndex]); ?>"><?php echo ($articleMaintitle[$articleIndex]); ?></a></td>
										<td rowspan="2"><a class="date-time"><?php echo ($collectCreatetime[$articleIndex]); ?></a></td>
									</tr>
									<tr>
										<td class="content-td1"><a class="author" href="<?php echo ($articleHref[$articleIndex]); ?>"><?php echo ($articleSubhead[$articleIndex]); ?></a></td>
									</tr>
								</table>
							</td>
						</tr><?php endif; } ?>	
			</table>
			<div id="pages">
				<?php echo ($pageShow); ?>
			</div>
		</div>
	</div>
	<div id="left-frame">
		<table id="top-table"> 
			<tr>
				<td>
					<img id="headimage" src="<?php echo ($headimage); ?>"/>
				</td> 
			</tr>
			<tr>
				<td>
					<a id="username"><?php echo ($nickname); ?></a>
				</td> 
			</tr> 
		</table>
		<table id="bottom-table"> 
			<tr>
				<td class="column-default">
					<a>我要投稿<a/>
				</td> 
			</tr>
			<tr>
				<td class="column-default">
					<a>我的投稿</a>
				</td> 
			</tr>
			<tr>
				<td class="column-select">
					<a href="<?php echo U('Collect/index');?>">我的收藏<a/>
				</td> 
			</tr>
			<tr>
				<td class="column-default">
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