<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>逻辑运营管理后台</title>

	<link type="text/css" href="/luoji/Public/bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
	<link type="text/css" href="/luoji/Public/css/manager/layout.css" rel="stylesheet"/>
	<script type="text/javascript" src="/luoji/Public/javascript/jquery-1.12.4.js"></script>
	<script type="text/javascript" src="/luoji/Public/bootstrap/js/bootstrap.min.js"></script>
</head>

<body>	
	<nav class="navbar navbar-inverse" role="navigation">
		<div class="navbar-header">
			<a class="navbar-brand">逻辑运营管理后台</a>
		</div>
		<a class="navbar-text" style="float:right;display:<?php echo ($logoutDispaly); ?>" href="<?php echo U('Account/logout');?>">退出</a>
	</nav>
	<div class="row" style="margin:0px">
		<div class="col-md-2" style="display:<?php echo ($navbarDispaly); ?>">
			<div class="panel panel-default" style="margin:15px 0px">
				<ul class="nav nav-pills nav-stacked" role="tablist" style="text-align:center;">
					<li role="presentation" style="background:<?php echo ($navbarColor[0]); ?>"><a href="<?php echo U('Carousel/index');?>">轮播图管理</a></li>
					<li role="presentation" style="background:<?php echo ($navbarColor[1]); ?>"><a href="<?php echo U('Category/index');?>">分类管理</a></li>
					<li role="presentation" style="background:<?php echo ($navbarColor[2]); ?>"><a href="#">稿件管理</a></li>
					<li role="presentation" style="background:<?php echo ($navbarColor[3]); ?>"><a href="#">文章管理</a></li>
					<li role="presentation" style="background:<?php echo ($navbarColor[4]); ?>"><a href="#">专辑管理</a></li>
					<li role="presentation" style="background:<?php echo ($navbarColor[5]); ?>"><a href="#">用户管理</a></li>
				</ul>
			</div>
		</div>
		<style type="text/css">
.pages {position:relative;width:700px;padding:10px 0px;background-color:#FFF;}
.num,.prev,.next,.current{width:60px;line-height:30px;display:inline-block;margin:0px 2px 0px 2px;text-align:center;}
.num,.prev,.next{color:#000;background-color:#eee;}
.current {color:#FFF;background-color:#008cba;}
.num:hover,.prev:hover,.next:hover{background-color:#008cba;color:#FFF;}
</style>

<div class="col-md-10">
	<a type="button" class="btn btn-default" href="<?php echo U('Carouselform/index');?>" style="float:right;margin:15px 0px">新增</a>
	<table class="table table-hover" style="margin:0px">
		<tr>
			<th>ID号</th>
			<th>图片</th>
			<th>标题</th>
			<th>序号</th>
			<th>URL</th>
			<th>是否禁用</th>
			<th>操作</th>
		</tr>
		<?php if(is_array($carouselData)): $k = 0; $__LIST__ = $carouselData;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$carousel): $mod = ($k % 2 );++$k;?><tr>
					<td><?php echo ($carousel["id"]); ?></td>
					<td><img src="/luoji/Public/resource/carouselfigure/<?php echo ($carousel["image"]); ?>" style="width:100px"></td>
					<td><?php echo ($carousel["title"]); ?></td>
					<td>第<?php echo ($carousel["ordernum"]); ?>张</td>
					<td><?php echo ($carousel["url"]); ?></td>
					<?php if(($carousel["show"] == 'yes')): ?><td>是</td>
					<?php else: ?>
						<td>否</td><?php endif; ?>
					<td><a href="<?php echo U('Carouselform/index', array('id'=>$carousel['id']));?>">修改</a> <a href="<?php echo U('Carousel/del', array('id'=>$carousel['id']));?>">删除</a></td>
				</tr><?php endforeach; endif; else: echo "" ;endif; ?>
	</table>
	<div class="pages">
		<?php echo ($pageShow); ?>
	</div>
</div>
	</div>
	<nav class="navbar navbar-default navbar-fixed-bottom" role="navigation">
		<p class="navbar-text">版权所有Copyright 2016 by 远航科技</p>
	</nav>
</body>
</html>