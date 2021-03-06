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
		<link type="text/css" href="/luoji/Public/css/collect.css" rel="stylesheet"/>
<script type="text/javascript" src="/luoji/Public/javascript/collect.js"></script>

<div class="pr total-frame">
	<div class="right-frame">
		<div class="right-title">
			<a>我的收藏</a>
		</div>
		<div class="right-content">
			<table class="content-table"> 
				<?php $__FOR_START_24286__=0;$__FOR_END_24286__=8;for($articleIndex=$__FOR_START_24286__;$articleIndex < $__FOR_END_24286__;$articleIndex+=1){ if($articleMaintitle[$articleIndex] != NULL): ?><tr>
							<td>
								<table> 
									<tr>
										<td class="content-td1"><a class="title" href="<?php echo ($articleHref[$articleIndex]); ?>" target="_blank"><?php echo ($articleMaintitle[$articleIndex]); ?></a></td>
										<td rowspan="2"><a class="date-time"><?php echo ($collectCreatetime[$articleIndex]); ?></a></td>
									</tr>
									<tr>
										<td class="content-td1"><a class="author" target="_blank"><?php echo ($articleNickname[$articleIndex]); ?></a><a class="delete" href="<?php echo ($articleDelHref[$articleIndex]); ?>">删除</a></td>
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
				<td class="default">
					<a href="<?php echo U('Manuscript/index');?>">我的投稿</a>
				</td> 
			</tr>
			<tr>
				<td class="select">
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